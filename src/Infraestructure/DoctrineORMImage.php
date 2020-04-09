<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Image;

class DoctrineORMImage extends Image{
    public function __construct($id,$imagePath,$description,$createdAt,$updatedAt,$user){
        parent::__construct($id,$imagePath,$description,$createdAt,$updatedAt,$user);
    }
}