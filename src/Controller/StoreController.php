<?php

namespace App\Controller;

use App\Repository\CategoriaRepository;
use App\Repository\ProdutosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/loja')]
class StoreController extends AbstractController
{
    #[Route('/', name: 'app_store')]
    public function index(ProdutosRepository $produtoRepository): Response
    {
        return $this->render('store/index.html.twig', [
            'controller_name' => 'StoreController',
            'produtos' => $produtoRepository->findAll(),
        ]);
    }
    
    #[Route('/produto/{slug}', name: 'app_store_view')]
    public function show(ProdutosRepository $produtoRepository, string $slug): Response
    {
        $produto = $produtoRepository->getBySlug($slug);
        $produtos_relacionados = $produto->getProdutoCategoria()[0]->getProdutos();

        return $this->render('store/show.html.twig', [
            'controller_name' => 'StoreController',
            'produto' => $produto,
            'produtos_relacionados' => $produtos_relacionados
        ]);
    }

    #[Route('/categoria/{categoria}', name: 'app_store_categoria_view')]
    public function showCategoria(CategoriaRepository $categoriaRepository, string $categoria): Response
    {
        $produtos = $categoriaRepository->findOneBy(['id' => $categoria])->getProdutos();

        return $this->render('store/categoria.html.twig', [
            'controller_name' => 'StoreController',
            'produtos' => $produtos,
        ]);
    }
}
