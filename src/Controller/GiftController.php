<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GiftController extends AbstractController
{
    /**
     * @Route("/", name="gift")
     */
    public function index()
    {
        $produits =$this->getDoctrine()
        ->getRepository(Produit::class)
        ->findAll();
        return $this->render('gift/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
