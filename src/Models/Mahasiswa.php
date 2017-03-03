<?php

namespace Ngeluk\Models;

class Mahasiswa extends AbstractModel
{
    protected $table = 'tbl_mahasiswa';

    public function insert(array $data)
    {
        $data = [
            'nim' => $request->getParam('nim'),
            'nama' => $request->getParam('nama'),
            'alamat' => $request->getParam('alamat'),
        ];

        $this->insertData($data);

        return $data;
      }

      public function read()
      {
          var_dump ($this->db->getAll());
      }
}
