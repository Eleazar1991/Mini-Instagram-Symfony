<?php
namespace App\Infraestructure\Doctrine\ORM;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

class DoctrineORMUser extends User{
    public function __construct($id,$role,$name,$surname,$nick,$email,$password,$image,$createdAt,$updatedAt,$rememberToken){
        parent::__construct($id,$role,$name,$surname,$nick,$email,$password,$image,$createdAt,$updatedAt,$rememberToken);
    }
}