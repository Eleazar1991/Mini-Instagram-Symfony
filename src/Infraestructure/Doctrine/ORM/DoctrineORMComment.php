<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Comment;

class DoctrineORMComment extends Comment{
    public function __construct($id,$content,$createdAt,$updatedAt,$image,$user){
        parent::__construct($id,$content,$createdAt,$updatedAt,$image,$user);
    }
}