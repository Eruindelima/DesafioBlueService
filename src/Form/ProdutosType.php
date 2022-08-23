<?php

namespace App\Form;

use App\Entity\Produtos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProdutosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome')
            ->add('descricao')
            ->add('imagem')
            ->add('preco')
            ->add('caracteristica')
            ->add('produto_categoria')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produtos::class,
        ]);
    }
}
