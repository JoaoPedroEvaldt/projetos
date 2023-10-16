<?php

namespace App\Controller;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/book')]
class BookController extends AbstractController

{
    #[Route('/', name: 'get_all_book')]
    public function index(BookRepository $bookRepository): JsonResponse
    {
     $books = $bookRepository->findAll();
        return $this->json($books);
        
    }

    #[Route('/new', name: 'new_book')]
    public function save(EntityManagerInterface $em)
    {
        $book = new Book();
        $book->setName("Teste");
        $book->setAuthor("João");
        $book->setSinopse("Teste");
        $em->persist($book);
        $em->flush();
        return $this->json("Saved");
    }
    #[Route('/delete/{id}', name: 'delete_book', methods:['DELETE'] )]
    public function removeBook(EntityManagerInterface $em,int $id )
    {

        $bookRepository = $em->getRepository(Book::class);
        $book = $bookRepository->find($id);
        $em->remove($book);  
        $em->flush();
            

    }

} 