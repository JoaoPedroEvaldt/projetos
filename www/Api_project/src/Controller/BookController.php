<?php

namespace App\Controller;

use App\Entity\Author;
use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book')]
class BookController extends AbstractController

{
   

    #[Route('/', name: 'new_book', methods: ['POST'] )]
    public function save(EntityManagerInterface $em, Request $request)
    {
        
        $book = new Book();
        $authorRepository = $em->getRepository(Author::class);
        $parameters = json_decode($request->getContent(), true);
        $author = $authorRepository->find($parameters["author"]);
        $book->setName($parameters["name"]);
        $book->setAuthor($author);
        $book->setSinopse($parameters["sinopse"]);
        $em->persist($book);
        $em->flush();
        return $this->json("Saved");
    }
    #[Route('/', name: 'get_all_book')]
    public function index(BookRepository $bookRepository): JsonResponse
    {
     $books = $bookRepository->findAll();
        return $this->json($books);
        
    }
    #[Route('/{id}', name: 'delete_book', methods:['DELETE'] )]
    public function removeBook(EntityManagerInterface $em,int $id )
    {

        $bookRepository = $em->getRepository(Book::class);
        $book = $bookRepository->find($id);
        if ( is_null($book)){
            return $this->json("Book Already Deleted");

        }

        $em->remove($book);  
        $em->flush();
        return $this->json("Deleted");

    }

    #[Route('//{id}', name: 'edit_book', methods: ['PUT'] )]
    public function edit(EntityManagerInterface $em, Request $request, int $id)
    {
        $bookRepository = $em->getRepository(Book::class);
        $book = $bookRepository->find($id);

   
        $parameters = json_decode($request->getContent(), true);
        $book->setName($parameters["name"]);
        $book->setAuthor($parameters["author"]);
        $book->setSinopse($parameters["sinopse"]);
        $em->persist($book);
        $em->flush();
        return $this->json("Saved");
    }
} 