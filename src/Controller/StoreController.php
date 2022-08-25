<?php

namespace App\Controller;

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
        return $this->render('store/show.html.twig', [
            'controller_name' => 'StoreController',
            'produto' => $produtoRepository->getBySlug($slug),
        ]);
    }
}
