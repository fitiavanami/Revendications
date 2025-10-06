<?php

namespace App\Controller;

use App\Entity\Soutien;
use App\Form\SoutienType;
use App\Repository\SoutienRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/soutien')]
final class SoutienController extends AbstractController
{
    #[Route(name: 'app_soutien_index', methods: ['GET'])]
    public function index(SoutienRepository $soutienRepository): Response
    {
        return $this->render('soutien/index.html.twig', [
            'soutiens' => $soutienRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_soutien_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $soutien = new Soutien();
        $form = $this->createForm(SoutienType::class, $soutien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($soutien);
            $entityManager->flush();

            return $this->redirectToRoute('app_soutien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('soutien/new.html.twig', [
            'soutien' => $soutien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soutien_show', methods: ['GET'])]
    public function show(Soutien $soutien): Response
    {
        return $this->render('soutien/show.html.twig', [
            'soutien' => $soutien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_soutien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Soutien $soutien, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SoutienType::class, $soutien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_soutien_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('soutien/edit.html.twig', [
            'soutien' => $soutien,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soutien_delete', methods: ['POST'])]
    public function delete(Request $request, Soutien $soutien, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$soutien->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($soutien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_soutien_index', [], Response::HTTP_SEE_OTHER);
    }
}
