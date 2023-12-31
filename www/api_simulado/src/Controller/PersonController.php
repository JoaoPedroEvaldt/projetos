<?php

namespace App\Controller;

use App\Entity\Person;
use App\Repository\PersonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/person')]
class PersonController extends AbstractController
{
    #[Route('/', name: 'new_person', methods:['POST'])]
    public function newPerson(EntityManagerInterface $em, Request $request): JsonResponse
    {
        $persons = new Person();
        $personRepository=$em->getRepository(Person::class);
        $parameters = json_decode($request->getContent(), true);
        $persons->setName($parameters["name"]);
        $persons->setNickname($parameters["nickname"]);
        $persons->setAge($parameters["Age"]);
        $em->persist($persons);
        $em->flush();

        return $this->json("Saved Person");
    }


    #[Route('/', name: 'get_all_cars')]
    
    
    public function index(PersonRepository $personRepository): JsonResponse
    {
        $persons = $personRepository->findAll();
        return $this->json($persons);   
    }
 
    #[Route('/{id}', name: 'edit_person', methods: ["PUT"])]
    public function editPerson(EntityManagerInterface $em, Request $request, int $id): JsonResponse
    {
        $personRepository = $em->getRepository(Person::class);
        $person = $personRepository->find($id);

        $parameters = json_decode($request->getContent(), true);
        $person = new Person();
        $person->setName($parameters["name"]);
        $person->setNickname($parameters["nickname"]);
        $person->setAge($parameters["age"]);
        $em->persist($person);
        $em->flush();
        return $this->json("Saved");
      
    }

    #[Route('/{id}', name: 'delete_person', methods:['DELETE'] )]
    public function removePerson(EntityManagerInterface $em,int $id )
    {

        $personRepository = $em->getRepository(Person::class);
        $person = $personRepository->find($id);
        if ( is_null($person)){
            return $this->json("Car Already Deleted");

        }

        $em->remove($person);  
        $em->flush();
        return $this->json("Deleted");

    }


}



