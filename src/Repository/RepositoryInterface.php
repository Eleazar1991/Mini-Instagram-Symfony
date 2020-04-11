<?php
namespace App\Repository;



interface RepositoryInterface{

    public function save($value);
    public function update($value);
    public function delete($id);
}


?>