<?php 

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function dataget($table,$namakolom = null,$tipe=null)
    {
        if($namakolom != null && $tipe != null) {
            $result = $this->db->table($table)->orderBy($namakolom, $tipe)->get();
        } else {
            $result = $this->db->table($table)->get();
        }
        return $result;
    }

    public function datainsert($table,$arrayData)
    {
        return $this->db->table($table)->insert($arrayData);
    }

    public function dataupdate($table,$arrayData,$where)
    {
        $this->table = $table;
        return $this->update($arrayData,$where);
    }

    public function datadelete($table,$where)
    {
        $this->table = $table;
        $this->where($where);
        return $this->delete();
    }
}