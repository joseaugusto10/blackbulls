<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use App\Models\bulls;

use function Laravel\Prompts\search;

class bullController extends Controller
{
    public function index(){

        $search = request('search');

        if ($search) {
            $bulls = bulls::where([
                ['name','like','%' . $search . '%']
            ])->get();
        }
        else{
        //pegando todos dados do banco
        $bulls = bulls::all();
        }

    return view('welcome',['bulls' => $bulls,'search' => $search]);

    }

    public function create(){
        return view('bulls.create');
    }

    //função para salvar no banco
    public function store(Request $request){
        $bull = new bulls();

        $bull->name = $request->name;
        $bull->rgd = $request->rgd;
        $bull->vaccine = $request->vaccine;
        $bull->observation = $request->observation;

        //adicionar imagem
        try {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
        
                $requestImage->move(public_path('img/bulls'), $imageName);
                $bull->image = $imageName;
            }
        } catch (\Exception $e) {
            // Trate a exceção, por exemplo, registrando-a ou retornando uma resposta de erro
            return response()->json(['error' => 'Erro durante o upload de imagem'], 500);
        }

        $bull->save();

        return redirect('/')->with('msg','Touro adicionado com sucesso!');
    }

    public function show($id){

        $bulls = bulls::findOrFail($id);
        return view('bulls.show',['bull'=>$bulls]);
    }


    public function destroy($id){
        bulls::findOrFail($id)->delete();
        return redirect('/')->with('msg','Touro excluído com sucesso!');
    }



}
