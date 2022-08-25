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

        $categoriaArr = [];

        $categoria_min = 1;
        while ($categoria_min <= 4) {
            $categoria = new Categoria();
            $categoria->setNome($faker->department());
            $manager->persist($categoria);
            $manager->flush();

            $this->addReference('CATEGORIA_REFERENCE_' . $categoria_min, $categoria);
            $categoria_min++;
        }

        $i = 1;
        while ($i <= 30) {
            $caracteristicas = new Caracteristicas();
            $caracteristicas->setCor($faker->safeColorName());
            $caracteristicas->setNumero($faker->numberBetween(10, 50));

            $produtos = new Produtos();
            $produtos->setNome($faker->productName());
            $produtos->setDescricao($faker->sentence(20));
            $produtos->setImagem('https://api.lorem.space/image/shoes?w=600');
            $produtos->setPreco($faker->randomFloat());
            $produtos->setCaracteristica($caracteristicas);
            $produtos->addProdutoCategorium($this->getReference('CATEGORIA_REFERENCE_' . $faker->numberBetween(1, 4)));
            $produtos->setSlug(strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $produtos->getNome()))));

            $manager->persist($caracteristicas);
            $manager->persist($produtos);
            $manager->flush();

            $i++;
        }
    }
}