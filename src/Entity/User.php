<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    public const PASSWORDS_NOT_MATCH = 'The passwords don\'t match';
    public const SUCCESS_REGISTER = 'Account created succesfully!';
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ban;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Task", mappedBy="user")
     */
    private $task;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disable;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('name', new Assert\Length([
                    'min' => 3,
                    'max' => 25,
                    'minMessage' => 'Your name must be at least {{ limit }} characters long',
                    'maxMessage' => 'Your name cannot be longer than {{ limit }} characters',
                    'allowEmptyString' => false,
                ]))
                ->addPropertyConstraint('email', new Assert\Email([
                    'message' => 'The email "{{ value }}" is not a valid email.'
                ]))
                ->addPropertyConstraint('password', new Assert\Length([
                    'min' => 8,
                    'minMessage' => 'Your password must be at least {{ limit }} characters long',
                    'allowEmptyString' => false,
                ]))
                ->addConstraint(new UniqueEntity([
                    'fields' => 'email',
                ]));
    }

    public function __construct(){
        $this->ban = false;
        $this->disable = false;
        $this->roles = ['ROLE_USER'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getBan(): bool
    {
        return $this->ban;
    }

    public function setBan($ban): self
    {
        $this->ban = $ban;
        
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getDisable(): ?bool
    {
        return $this->disable;
    }

    public function setDisable(bool $disable): self
    {
        $this->disable = $disable;

        return $this;
    }
}
