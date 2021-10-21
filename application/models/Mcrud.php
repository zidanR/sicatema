<?php

Class Mcrud extends CI_Model
{
    public function update($table, $data, $where)
    {
        $this->db->where($where)
                ->update($table, $data);
            return TRUE;
    }
}
       