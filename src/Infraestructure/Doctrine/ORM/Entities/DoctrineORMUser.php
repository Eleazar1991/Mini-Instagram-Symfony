<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */

class DoctrineORMUser extends User{
        /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=20, nullable=true)
     */
    private $role;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", length=200, nullable=true)
     */
    private $surname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nick", type="string", length=100, nullable=true)
     */
    private $nick;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remember_token", type="string", length=255, nullable=true)
     */
    private $rememberToken;

        /**
     *
     *
     * @ORM\OneToMany(targetEntity="App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMLike",mappedBy="DoctrineORMUser")
     */
    private $likes;

    /**
     *
     *
     * @ORM\OneToMany(targetEntity="App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMComment",mappedBy="DoctrineORMUser")
     */
    private $comments;

        /**
     *
     *
     * @ORM\OneToMany(targetEntity="App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMImage",mappedBy="DoctrineORMUser")
     */
    private $images;

    public function __construct(){
        parent::__construct($this->$id,$this->$role,$this->$name,$this->$surname,$this->$nick,$this->$email,$this->$password,$this->$image,$this->$createdAt,$this->$updatedAt,$this->$rememberToken);
    }

        /**
     *
     *
     * @return Collection|DoctrineORMlike[]
     */

    public function getLikes(): Collection{
        return $this->likes;
    }

    /**
     *
     *
     * @return Collection|DoctrineORMComment[]
     */

    public function getComments(): Collection{
        return $this->comments;
    }

        /**
     *
     *
     * @return Collection|DoctrineORMImage[]
     */

    public function getImages(): Collection{
        return $this->images;
    }
}