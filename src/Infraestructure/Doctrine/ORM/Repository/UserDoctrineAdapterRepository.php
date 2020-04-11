<?php
namespace App\Infraestructure\Doctrine\ORM\Repository;
use App\Repository\RepositoryInterface;
use App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class UserDoctrineAdapterRepository extends ServiceEntityRepository implements RepositoryInterface{
    public function __construct(ManagerRegistry $registry){
        parent::__construct($registry, DoctrineORMUser::class);
    }
    public function findAll(){
        return $this->getDoctrine()->getRepository(DoctrineORMUser::class)->findAll();
    }

    public function save($user){

    }
    public function update($user){

    }
    public function delete($id){

    }

}