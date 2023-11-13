<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book implements JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

   

    #[ORM\Column(length: 2000)]
    private ?string $sinopse = null;

    #[ORM\ManyToOne(targetEntity: Author::class)]
    #[ORM\JoinColumn(name: 'author_id', referencedColumnName: 'id')]
    private Author|null $author = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getSinopse(): ?string
    {
        return $this->sinopse;
    }

    public function setSinopse(string $sinopse): static
    {
        $this->sinopse = $sinopse;

        return $this;
    }
    public function JsonSerialize(): mixed
    {
        return[
            "id" =>$this->getId(),
            "name" => $this->getName(),
            "sinopse" => $this->getSinopse(),
            "author" => $this->getAuthor() ? $this->getAuthor()->getName() : null,
            
        ];
    }
}
