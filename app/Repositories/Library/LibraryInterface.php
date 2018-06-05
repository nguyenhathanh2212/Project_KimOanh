<?php
namespace App\Repositories\Library;

interface LibraryInterface{
    public function getAllLibraries();

    public function getLibrariesByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC");
    
    public function getTop3Libraries();
}