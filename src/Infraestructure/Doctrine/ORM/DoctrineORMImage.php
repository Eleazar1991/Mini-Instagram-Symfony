<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Image;

/**
 * DoctrineORMImage
 *
 * @ORM\Table(name="images", indexes={@ORM\Index(name="fk_images_users", columns={"user_id"})})
 * @ORM\Entity
 */
class DoctrineORMImage extends Image{
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
     * @ORM\Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function __construct(){
        parent::__construct($this->$id,$this->$imagePath,$this->$description,$this->$createdAt,$this->$updatedAt,$this->$user);
    }
}