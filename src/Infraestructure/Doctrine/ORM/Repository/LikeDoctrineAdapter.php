<?php
namespace App\Infraestructure\Doctrine\ORM\Repository;
use App\Repository;
use App\Entity\Like;
use App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMLike;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class LikeDoctrineAdapterRepository extends ServiceEntityRepository implements RepositoryInterface{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineORMLike::class);
    }
    public function findAll(){
        
    }
    public function find(string $id){
        return new DoctrineORMLikeLike();
    }
    public function save(DoctrineORMLike $like){

    }
    public function update(DoctrineORMLike $like){

    };
    public function delete(string $id){

    };

}
?>