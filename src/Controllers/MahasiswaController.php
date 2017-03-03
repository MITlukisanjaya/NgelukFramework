<?php

namespace Ngeluk\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Ngeluk\Models\Mahasiswa;

class MahasiswaController extends AbstractController
{
    public function index(Request $request, Response $response, $arg)
    {
        $mahasiswa = new Mahasiswa($this->db);

        $mahasiswas = $mahasiswa->getAll();

        return $this->view->render($response, 'template.twig',[
            'mahasiswa' => $mahasiswas,
            'title' => 'Halaman Data Mahasiswa'
            ]);
    }

    // public function add(Request $request, Response $response)
    // {
    //     $user = new User($this->db);
    //     $data = [
    //         'name'	=> 'test',
    //         'email'	=> 'test@gmail.com',
    //         'password'	=> 'test',
    //     ];
    //
    //     $user->createData($data);
    // }
}
