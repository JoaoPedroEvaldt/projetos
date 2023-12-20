<?php

namespace App\Controller;

use App\Entity\School;
use App\Entity\Student;
use App\Repository\SchoolRepository;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/school')]

class SchoolController extends AbstractController
{
    #[Route('/', name: 'new_school', methods:['POST'])]
    public function new(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $parameters = json_decode($request->getContent(), true);
        $school = $em->getRepository(SchoolController::class)->find($parameters['school']);

        $school = new School();
        $school->setName($parameters['name']);
       

        $em->persist($school);
        $em->flush();

        return $this->json([
            'message' => 'student Saved successfully!',            
        ]);
    }

    #[Route('/', name: 'get_all_school', methods:['GET'])]
    public function getAll(SchoolRepository $schoolRepository): JsonResponse
    {
        $schools = $schoolRepository->findAll(); 
        
        return $this->json($schools);
    }

    #[Route('/{id}', name: 'edit_school', methods:['PUT'])]
    public function edit(Request $request, EntityManagerInterface $em, ?School $school): JsonResponse
    {
        $parameters = json_decode($request->getContent(), true);
        $school = $em->getRepository(School::class)->find($parameters['school']);

       
        $school->setName($parameters['name']);
      

        $em->persist($school);
        $em->flush();

        return $this->json([
            'message' => 'school Edited successfully!',            
        ]);
    }

    #[Route('/{id}', name: 'delete_school', methods:['DELETE'])]
    public function delete(Request $request, EntityManagerInterface $em, ?School $school): JsonResponse
    {
        if($school){
            $em->remove($school);
        $em->flush();
        return $this->json([
            'message' => 'school deleted successfully!',            
        ]);

     }
     return $this->json([
        'message' => 'Book already deleted!',            
    ]);        
    }
    
}
