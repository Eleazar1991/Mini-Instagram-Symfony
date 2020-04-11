<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use App\Infraestructure\Doctrine\ORM\Entities\UserDoctrineAdapterRepository;
use App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMUser;
class userController extends AbstractController
{

    public function getAllUsers(){

        $users=UserDoctrineAdapterRepository::findAll();
    }
}