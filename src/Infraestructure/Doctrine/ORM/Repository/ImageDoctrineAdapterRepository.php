<?php
namespace App\Infraestructure\Doctrine\ORM\Repository;
use App\Repository;
use App\Entity\Image;
use App\Infraestructure\Doctrine\ORM\Entities\DoctrineORMImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class ImageDoctrineAdapterRepository extends ServiceEntityRepository implements RepositoryInterface{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DoctrineORMImage::class);
    }
    public function findAll(){
        
    }
    public function find(string $id){
        return new DoctrineORMImage();
    }
    public function save(DoctrineORMImage $image){

    }
    public function update(DoctrineORMImage $image){

    };
    public function delete(string $id){

    };

}
?>