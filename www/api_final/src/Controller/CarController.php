<?php

namespace App\Controller;

use App\Entity\Car;
use App\Repository\CarRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/car')]
class CarController extends AbstractController
{
    #[Route('/', name: 'new_car', methods: ['POST'] )]
    public function newCar(EntityManagerInterface $em, Request $request): JsonResponse
    {  
        $cars = new Car();
        $carRepository=$em->getRepository(Car::class);
        $parameters = json_decode($request->getContent(), true);
        $cars->setModel($parameters["Model"]);
        $cars->setPlate($parameters["Plate"]);
        $em->persist($cars);
        $em->flush();
       
        return $this->json("Saved Car");
           
    }
   
    #[Route('/', name: 'get_all_cars')]
    
    
    public function index(CarRepository $carRepository): JsonResponse
    {
        $cars = $carRepository->findAll();
        return $this->json($cars);   
    }

    #[Route('/{id}', name: 'edit_car', methods: ["PUT"])]
    public function editCar(EntityManagerInterface $em, Request $request, int $id): JsonResponse
    {
        $carRepository = $em->getRepository(Car::class);
        $car = $carRepository->find($id);

        $parameters = json_decode($request->getContent(), true);
        $car = new Car();
        $car->setModel($parameters["Model"]);
        $car->setPlate($parameters["Plate"]);
        $em->persist($car);
        $em->flush();
        return $this->json("Saved");
      
    }

    #[Route('/{id}', name: 'delete_car', methods:['DELETE'] )]
    public function removeCar(EntityManagerInterface $em,int $id )
    {

        $carRepository = $em->getRepository(Car::class);
        $car = $carRepository->find($id);
        if ( is_null($car)){
            return $this->json("Car Already Deleted");

        }

        $em->remove($car);  
        $em->flush();
        return $this->json("Deleted");

    }

}



    
