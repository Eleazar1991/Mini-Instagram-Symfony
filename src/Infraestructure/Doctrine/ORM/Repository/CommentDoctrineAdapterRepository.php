<?php
namespace App\Infraestructure\Doctrine\ORM\Repository;
use App\Repository;
use App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class CommentDoctrineAdapterRepository extends ServiceEntityRepository implements RepositoryInterface{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineORMComment::class);
    }
    public function findAll(){
        
    }
    public function find(string $id){
        return new DoctrineORMComment();
    }
    public function save(DoctrineORMComment $comment){

    }
    public function update(DoctrineORMComment $comment){

    };
    public function delete(string $id){

    };

}
?>