<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            'Joel',
            'Ellie',
            'Test',
            'Tommy',
            'Bill',
            '<script>alert("click aquí")</script>'
        ];

        $title = 'Usuarios';

        return view('users') -> with(compact('users', 'title'));
    }

    public function create()
    {
        return 'Creando nuevo usuario';
    }

    public function show($id)
    {
        return 'Mostrando detalles del usuario: ' . $id;
    }
}
