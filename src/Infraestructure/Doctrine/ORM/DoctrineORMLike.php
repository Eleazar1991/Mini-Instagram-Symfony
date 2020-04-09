<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Like;

/**
 * DoctrineORMLike
 *
 * @ORM\Table(name="likes", indexes={@ORM\Index(name="fk_likes_images", columns={"image_id"}), @ORM\Index(name="fk_likes_users", columns={"user_id"})})
 * @ORM\Entity
 */
class DoctrineORMLike extends Like{
     /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Images
     *
     * @ORM\ManyToOne(targetEntity="Images")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function __construct(){
        parent::__construct($this->$id,$this->$createdAt,$this->$updatedAt,$this->$image,$this->$user);
    }
}