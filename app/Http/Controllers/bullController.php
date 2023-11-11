<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class bullController extends Controller
{
    public function index(){

    $nome = "José";
    $idade = 28;

    $listName = ["Fernando","Maria","Carlos","João"];
    return view('welcome',
        [
            'name' => $nome,
            'age' => $idade,
            'profissao' => "Programador",
            'nomes' => $listName
        ]);

    }

    public function create(){
        return view('bulls.create');
    }

}
