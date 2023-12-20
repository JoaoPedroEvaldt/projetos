<?php

namespace App\Controller;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/author')]
class AuthorController extends AbstractController

{
   

    #[Route('/', name: 'new_author', methods: ['POST'] )]
    public function save(EntityManagerInterface $em, Request $request)
    {
        
        $author = new Author();
        $authorRepository = $em->getRepository(Author::class);
        $parameters = json_decode($request->getContent(), true);
        $author = $authorRepository->find($parameters["author"]);
        $author->setTitle($parameters["title"]);
        $author->setDescription($parameters["description"]);
        $em->persist($author);
        $em->flush();
        return $this->json("Saved");
    }
    #[Route('/', name: 'get_all_author')]
    public function index(AuthorRepository $authorRepository): JsonResponse
    {
     $authors = $authorRepository->findAll();
        return $this->json($authors);
        
    }
    

    #[Route('//{id}', name: 'edit_author', methods: ['PUT'] )]
    public function edit(EntityManagerInterface $em, Request $request, int $id)
    {
        $bookRepository = $em->getRepository(Author::class);
        $book = $bookRepository->find($id);

   
        $parameters = json_decode($request->getContent(), true);
        $book->setName($parameters["name"]);
        $book->setAuthor($parameters["author"]);
        $book->setSinopse($parameters["sinopse"]);
        $em->persist($book);
        $em->flush();
        return $this->json("Saved");
    }
    #[Route('/{id}', name: 'delete_author', methods:['DELETE'] )]
    public function removeBook(EntityManagerInterface $em,int $id )
    {

        $authorRepository = $em->getRepository(Author::class);
        $author = $authorRepository->find($id);
        if ( is_null($author)){
            return $this->json("Book Already Deleted");

        }

        $em->remove($author);  
        $em->flush();
        return $this->json("Deleted");

    }
} 
