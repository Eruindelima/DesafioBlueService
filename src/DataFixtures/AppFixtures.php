<?php

namespace App\DataFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Produtos;
use App\Entity\Caracteristicas;
use App\Entity\Categoria;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $caracteristicas = new Caracteristicas();
        $caracteristicas->setCor('PRETO');
        $caracteristicas->setNumero(3323);

        $categoria = new Categoria();
        $categoria->setNome('jogos');
        // $this->addReference('categoria', $$caracteristicas);

        $produtos = new Produtos();
        $produtos->setNome('PS4');
        $produtos->setDescricao('teste');
        $produtos->setImagem('testes.png');
        $produtos->setPreco(2000.99);
        $produtos->setCaracteristica($caracteristicas);
        $produtos->addProdutoCategorium($categoria); 
        $produtos->setSlug('ps4');

        $manager->persist($caracteristicas);
        $manager->persist($categoria);
        $manager->persist($produtos);
        $manager->flush();
    }
}
