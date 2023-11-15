<?php

namespace App\Controller;

use App\Entity\Car;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/car')]
class CarController extends AbstractController
{
    #[Route('/', name: 'new_car', methods: ['POST'] )]
    public function newCar(EntityManagerInterface $em, Request $request): JsonResponse
    {  
        $cars = new Car();
        $CarRepository=$em->getRepository(Car::class);
        $parameters = json_decode($request->getContent(), true);
        $cars->setMoldel($parameters["model"]);
        $cars->setPlate($parameters["plate"]);
        $em->persist($cars);
        $em->flush();
       
        return $this->json("Saved Car");
           
    }
   
}
    #[Route('/', name: 'get_all_cars')]
    
    
    public function index(CarRepository $carRepository): JsonResponse
    {
        $cars = $carRepository->findAll();
        return $this->json($cars);
           
    }

    
