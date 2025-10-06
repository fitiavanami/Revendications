<?php

namespace App\Controller;

use App\Entity\Revendication;
use App\Form\RevendicationType;
use App\Repository\RevendicationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/revendication')]
final class RevendicationController extends AbstractController
{
    #[Route(name: 'app_revendication_index', methods: ['GET'])]
    public function index(RevendicationRepository $revendicationRepository): Response
    {
        return $this->render('revendication/index.html.twig', [
            'revendications' => $revendicationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_revendication_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $revendication = new Revendication();
        $form = $this->createForm(RevendicationType::class, $revendication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($revendication);
            $entityManager->flush();

            return $this->redirectToRoute('app_revendication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('revendication/new.html.twig', [
            'revendication' => $revendication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_revendication_show', methods: ['GET'])]
    public function show(Revendication $revendication): Response
    {
        return $this->render('revendication/show.html.twig', [
            'revendication' => $revendication,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_revendication_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Revendication $revendication, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RevendicationType::class, $revendication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_revendication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('revendication/edit.html.twig', [
            'revendication' => $revendication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_revendication_delete', methods: ['POST'])]
    public function delete(Request $request, Revendication $revendication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$revendication->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($revendication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_revendication_index', [], Response::HTTP_SEE_OTHER);
    }
}
