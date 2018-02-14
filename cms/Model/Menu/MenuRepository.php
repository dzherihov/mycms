<?php

namespace Cms\Model\Menu;

use Engine\Model;

class MenuRepository extends Model
{
	public function add($params = [])
    {
        if (empty($params)) {
            return 0;
        }

        $menu = new Menu;
        $menu->setName($params['name']);
        $menuId = $menu->save();

        return $menuId;
    }

    public function getList()
    {
        $query = $this->db->query(
            $this->queryBuilder
                ->select()
                ->from('menu')
                ->orderBy('id', 'DESC')
                ->sql()
        );

        return $query;
    }

    public function remove ($menuId)
    {
        $sql = $this->queryBuilder
            ->delete()
            ->from('menu_item')
            ->where('menu_id', $menuId)
            ->sql();
            
        $this->db->query($sql, $this->queryBuilder->values);


        $sql2 = $this->queryBuilder
            ->delete()
            ->from('menu')
            ->where('id', $menuId)
            ->sql();
            
        return $this->db->query($sql2, $this->queryBuilder->values);
    }

}

?>