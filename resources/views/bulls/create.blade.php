@extends('layouts.main')

@section('title','Registrar touro')

@section('content')


<div id="bull-create-container" class="col-md-6 offset-md-3">
    <div class="row back-pos">
    <a class="nav-link active" id="back-link" href="/">
        <i class="fas fa-arrow-left"></i>Voltar
    </a>
    <br>
    </div>  
    <h1>Adicione um touro</h1> 
    <form action="/bulls" method="POST" enctype="multipart/form-data">
        @csrf {{--Diretiva para poder enviar o formulário--}}
        <div class="form-group">
            <label for="title">Nome do touro:
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do touro..." required>
            </label>
        </div>
        <div class="form-group">
            <label for="title">RGD:
                <input type="text" class="form-control" id="rgd" name="rgd" placeholder="RGD do touro..." required>
            </label>
        </div>

        <div class="form-group">
            <label for="title">Vacinado:
                <select name="vaccine" id="vaccine" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </label>
        </div>

        <div class="form-group">
            <label for="title">Observações:
                <textarea name="observation" id="observation"  class="form-control" placeholder="Adicione alguma observação..."></textarea>
            </label>
        </div>
        
        <div class="form-group">
            <label for="image">Adicionar imagem:
                <input type="file" id="image" name="image" class="from-control-file">
            </label>
        </div>

        <input type="submit" class="btn btn-dark " value="Adicionar touro">
    </form>

</div>


@endsection