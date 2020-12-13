<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true, length=120)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_for;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="task")
     */
    private $user;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new Assert\Length([
                    'min' => 3,
                    'max' => 30,
                    'minMessage' => 'This field must be at least {{ limit }} characters long',
                    'maxMessage' => 'This field cannot be longer than {{ limit }} characters',
                    'allowEmptyString' => false,
                ]))
                ->addPropertyConstraint('description', new Assert\Length([
                    'min' => 0,
                    'max' => 120,
                    'minMessage' => 'This field must be at least {{ limit }} characters long',
                    'maxMessage' => 'This field cannot be longer than {{ limit }} characters',
                    'allowEmptyString' => false,    
                ]));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateFor(): ?\DateTimeInterface
    {
        return $this->date_for;
    }

    public function setDateFor(\DateTimeInterface $date_for): self
    {
        $this->date_for = $date_for;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user): self
    {
        $this->user = $user;
        return $this;
    }

}
