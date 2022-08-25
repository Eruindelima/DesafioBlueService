<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produtos;
use App\Entity\Caracteristicas;
use App\Entity\Categoria;
use \Faker\Factory as Faker;
use Bezhanov\Faker\Provider\Commerce as Commerce;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Faker::create();
        $faker->addProvider(new Commerce($faker));

        $i = 1;
        while ($i <= 30) {
            $caracteristicas = new Caracteristicas();
            $caracteristicas->setCor($faker->safeColorName());
            $caracteristicas->setNumero($faker->numberBetween(10, 50));

            $categoria = new Categoria();
            $categoria->setNome($faker->department());

            $produtos = new Produtos();
            $produtos->setNome($faker->productName());
            $produtos->setDescricao($faker->sentence(20));
            $produtos->setImagem('https://api.lorem.space/image/shoes?w=600');
            $produtos->setPreco($faker->randomFloat());
            $produtos->setCaracteristica($caracteristicas);
            $produtos->addProdutoCategorium($categoria);
            $produtos->setSlug(strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $produtos->getNome()))));

            $manager->persist($caracteristicas);
            $manager->persist($categoria);
            $manager->persist($produtos);
            $manager->flush();

            $i++;
        }
    }
}