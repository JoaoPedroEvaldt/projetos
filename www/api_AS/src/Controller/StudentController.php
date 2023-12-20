<?php

namespace App\Controller;

use App\Entity\Student;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/student')]
class StudentController extends AbstractController
{
    #[Route('/', name: 'new_student', methods:['POST'])]
    public function new(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $parameters = json_decode($request->getContent(), true);
        $student = $em->getRepository(Student::class)->find($parameters['student']);

        $student = new Student();
        $student->setName($parameters['name']);
        $student->setDescription($parameters['description']);
        $student->setAge($parameters['age']);
       

        $em->persist($student);
        $em->flush();

        return $this->json([
            'message' => 'Student Saved successfully!',            
        ]);
    }

    #[Route('/', name: 'get_all_student', methods:['GET'])]
    public function getAll(StudentRepository $studentRepository): JsonResponse
    {
        $students = $studentRepository->findAll(); 
        
        return $this->json($students);
    }

    #[Route('/{id}', name: 'edit_students', methods:['PUT'])]
    public function edit(Request $request, EntityManagerInterface $em, Student $student): JsonResponse
    {
        $parameters = json_decode($request->getContent(), true);
        $student = $em->getRepository(Student::class)->find($parameters['student']);

       
        $student->setName($parameters['name']);
        $student->setDescription($parameters['description']);
        $student->setAge($parameters['age']);
     

        $em->persist($student);
        $em->flush();

        return $this->json([
            'message' => 'Student Edited successfully!',            
        ]);
    }

    #[Route('/{id}', name: 'student_book', methods:['DELETE'])]
    public function delete(Request $request, EntityManagerInterface $em, ?Student $student): JsonResponse
    {
        if($student){
            $em->remove($student);
        $em->flush();
        return $this->json([
            'message' => 'student deleted successfully!',            
        ]);

     }
     return $this->json([
        'message' => 'student already deleted!',            
    ]);        
    }
}
