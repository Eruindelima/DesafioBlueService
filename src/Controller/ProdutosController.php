<?php

namespace App\Controller;

use App\Entity\Produtos;
use App\Form\ProdutosType;
use App\Repository\ProdutosRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/produtos')]
class ProdutosController extends AbstractController
{
    #[Route('/', name: 'app_produtos_index', methods: ['GET'])]
    public function index(ProdutosRepository $produtosRepository): Response
    {
        return $this->render('produtos/index.html.twig', [
            'produtos' => $produtosRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produtos_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProdutosRepository $produtosRepository): Response
    {
        $produto = new Produtos();
        $form = $this->createForm(ProdutosType::class, $produto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produtoSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $produto->getNome())));
            $produto->setSlug($produtoSlug);
            $produtosRepository->add($produto, true);

            return $this->redirectToRoute('app_produtos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produtos/new.html.twig', [
            'produto' => $produto,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produtos_show', methods: ['GET'])]
    public function show(Produtos $produto): Response
    {
        return $this->render('produtos/show.html.twig', [
            'produto' => $produto,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produtos_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produtos $produto, ProdutosRepository $produtosRepository): Response
    {
        $form = $this->createForm(ProdutosType::class, $produto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produtosRepository->add($produto, true);

            return $this->redirectToRoute('app_produtos_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produtos/edit.html.twig', [
            'produto' => $produto,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produtos_delete', methods: ['POST'])]
    public function delete(Request $request, Produtos $produto, ProdutosRepository $produtosRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produto->getId(), $request->request->get('_token'))) {
            $produtosRepository->remove($produto, true);
        }

        return $this->redirectToRoute('app_produtos_index', [], Response::HTTP_SEE_OTHER);
    }
}
