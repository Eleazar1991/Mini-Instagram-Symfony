<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Like;

class DoctrineORMLike extends Like{
    public function __construct($id,$createdAt,$updatedAt,$image,$user){
        parent::__construct($id,$createdAt,$updatedAt,$image,$user);
    }
}