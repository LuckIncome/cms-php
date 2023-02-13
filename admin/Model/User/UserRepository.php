<?php

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model
{
    public function getUsers()
    {
        $sql = $this->queryBuilder->select()
            ->from('user')
            ->orderBy('id', 'DESC')
            ->sql();
        print_r($sql);
        return $this->db->query($sql);
    }

    public function test()
    {
        $user = new User(1);
        $user->setEmail('admin@admin.com');
        $user->save();
        //print_r($user);echo '<br>';
    }
}