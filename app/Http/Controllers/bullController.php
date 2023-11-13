<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $currentTime = now();
        $created_at = $currentTime->format('Y-d-m H:i:s');
        $updated_at = $currentTime->format('Y-d-m H:i:s');

        $bull->created_at = $created_at;
        $bull->updated_at = $updated_at;


        //adicionar imagem
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
        
                $requestImage->move(public_path('img/bulls'), $imageName);
                $bull->image = $imageName;
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

    public function edit($id){
        $bull = bulls::findOrFail($id);
        return view('bulls.edit',['bull'=>$bull]);
    }

    public function update(Request $request, $id){
        $bull = Bulls::find($id);

        if (!$bull) {
            return redirect('/')->with('error', 'Touro não encontrado.');
        }
    
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
    
        return redirect('/')->with('msg', 'Touro alterado com sucesso!');
    }
}
