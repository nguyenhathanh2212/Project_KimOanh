<?php
namespace App\Repositories\User;

interface UserInterface {
    public function createUser($data);

    public function deleteUser($id);

    public function updateUser($id, $data);
}
