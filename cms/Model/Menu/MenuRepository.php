<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
    public function getAllItems()
    {
        $sql = $this->queryBuilder
                ->select()
                ->from('menu')
                ->orderBy('id', 'DESC')
                ->sql();

        return $this->db->query($sql);
    }
}