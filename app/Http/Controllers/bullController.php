<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use App\Models\bulls;

class bullController extends Controller
{
    public function index(){

        /*pegando todos dados do banco*/
        $bulls = bulls::all();

    return view('welcome',['bulls' => $bulls]);

    }

    public function create(){
        return view('bulls.create');
    }

}
