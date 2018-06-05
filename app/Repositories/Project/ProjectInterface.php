<?php

namespace App\Repositories\Project;

interface ProjectInterface {

    public function getAllProjects();

    public function getProjectsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC");
    
    public function getNewProjects();

}
