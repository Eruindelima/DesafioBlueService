<?php

namespace App\Controller;

use App\Entity\Caracteristicas;
use App\Form\CaracteristicasType;
use App\Repository\CaracteristicasRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/caracteristicas')]
class CaracteristicasController extends AbstractController
{
    #[Route('/', name: 'app_caracteristicas_index', methods: ['GET'])]
    public function index(CaracteristicasRepository $caracteristicasRepository): Response
    {
        return $this->render('caracteristicas/index.html.twig', [
            'caracteristicas' => $caracteristicasRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_caracteristicas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CaracteristicasRepository $caracteristicasRepository): Response
    {
        $caracteristica = new Caracteristicas();
        $form = $this->createForm(CaracteristicasType::class, $caracteristica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $caracteristicasRepository->add($caracteristica, true);

            return $this->redirectToRoute('app_caracteristicas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('caracteristicas/new.html.twig', [
            'caracteristica' => $caracteristica,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_caracteristicas_show', methods: ['GET'])]
    public function show(Caracteristicas $caracteristica): Response
    {
        return $this->render('caracteristicas/show.html.twig', [
            'caracteristica' => $caracteristica,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_caracteristicas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Caracteristicas $caracteristica, CaracteristicasRepository $caracteristicasRepository): Response
    {
        $form = $this->createForm(CaracteristicasType::class, $caracteristica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $caracteristicasRepository->add($caracteristica, true);

            return $this->redirectToRoute('app_caracteristicas_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('caracteristicas/edit.html.twig', [
            'caracteristica' => $caracteristica,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_caracteristicas_delete', methods: ['POST'])]
    public function delete(Request $request, Caracteristicas $caracteristica, CaracteristicasRepository $caracteristicasRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$caracteristica->getId(), $request->request->get('_token'))) {
            $caracteristicasRepository->remove($caracteristica, true);
        }

        return $this->redirectToRoute('app_caracteristicas_index', [], Response::HTTP_SEE_OTHER);
    }
}
