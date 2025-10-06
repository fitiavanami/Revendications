<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\RevendicationRepository;
use App\Repository\CategorieRepository;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
public function index(RevendicationRepository $revRepo, CategorieRepository $catRepo): Response
{
    $stats = [];
    foreach ($catRepo->findAll() as $cat) {
        $stats[] = [
            'categorie' => $cat->getNom(),
            'nb_revendications' => count($cat->getRevendications())
        ];
    }

    $soutiensParRev = [];
    foreach ($revRepo->findAll() as $rev) {
        $soutiensParRev[] = [
            'revendication' => $rev->getTitre(),
            'nb_soutiens' => count($rev->getSoutiens())
        ];
    }

    return $this->render('dashboard/index.html.twig', [
        'stats' => $stats,
        'soutiens' => $soutiensParRev,
    ]);
}

}
