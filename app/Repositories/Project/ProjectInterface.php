<?php

namespace App\Repositories\Project;

interface ProjectInterface {

    public function getAllProjectsPaginate();

    public function getProjectsByType($type_id, $limit = 10, $sortBy = "id", $order = "DESC");
    
    public function getNewProjects();

    public function createProject($request);

    public function deleteProject($id);

    public function updateProject($request, $id);
}
