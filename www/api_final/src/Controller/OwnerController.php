<?php

namespace App\Controller;

use App\Entity\Owner;
use App\Repository\OwnerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/owner')]
class OwnerController extends AbstractController
{

    #[Route('/', name: 'new_owner', methods: ['POST'] )]
    public function newOwner(EntityManagerInterface $em, Request $request): JsonResponse
    {  
        $owner = new Owner();
        $parameters = json_decode($request->getContent(), true);
        $owner->setName($parameters["name"]);
        $owner->setNickname($parameters["nickname"]);
        $em->persist($owner);
        $em->flush();
        return $this->json("Saved Owner");
           
    }

   
    #[Route('/', name: 'get_all_owner')]
    
    public function index(OwnerRepository $ownerRepository): JsonResponse
    {
        $owner = $ownerRepository->findAll();
        return $this->json($owner);   
    }

}
