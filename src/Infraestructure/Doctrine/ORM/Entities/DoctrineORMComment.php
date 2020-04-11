<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Comment;

/**
 * DoctrineORMComment
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="fk_comments_images", columns={"image_id"}), @ORM\Index(name="fk_comments_users", columns={"user_id"})})
 * @ORM\Entity
 */

class DoctrineORMComment extends Comment{
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

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
     * @var \DoctrineORMImage
     *
     * @ORM\ManyToOne(targetEntity="DoctrineORMImage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;

    /**
     * @var \DoctrineORMUser
     *
     * @ORM\ManyToOne(targetEntity="DoctrineORMUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
    public function __construct(){
        parent::__construct($this->$id,$this->$content,$this->$createdAt,$this->$updatedAt,$this->$image,$this->$user);
    }
}