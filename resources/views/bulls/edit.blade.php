@extends('layouts.main')

@section('title','Editando: ' . $bull->name)

@section('content')


<div id="bull-edit-container" class="col-md-6 offset-md-3">
    <div class="row back-pos">
        <a class="nav-link active" id="back-link" href="/">
            <i class="fas fa-arrow-left"></i>Voltar
        </a>
        <br>
    </div>

    <h1>Editando o touro: {{$bull->name}}</h1>
    <form action="/bulls/update/{{ $bull->id }}" method="POST" enctype="multipart/form-data">
        @csrf {{--Diretiva para poder enviar o formulário--}}
        @method('PUT')
        <div class="form-group">
            <label for="title">Nome do touro:
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do touro..." value="{{ $bull->name }}">
            </label>
        </div>
        <div class="form-group">
            <label for="title">RGD:
                <input type="text" class="form-control" id="rgd" name="rgd" placeholder="RGD do touro..." value="{{ $bull->rgd }}">
            </label>
        </div>

        <div class="form-group">
            <label for="title">Vacinado:
                <select name="vaccine" id="vaccine" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $bull->vaccine ==1 ? "selected='selected'": ""}}>Sim</option>
                </select>
            </label>
        </div>

        <div class="form-group">
            <label for="title">Observações:
                <textarea name="observation" id="observation"  class="form-control" placeholder="Adicione alguma observação...">{{ $bull->observation }}</textarea>
            </label>
        </div>
        
        <div class="row">
            <div class="form-group">
                <label for="image">Adicionar imagem:
                    <input type="file" id="image" name="image" class="from-control-file col-md-8">
                    <br class="col-md-6"><br class="col-md-6">
                    <img src="/img/bulls/{{ $bull->image }}" alt="{{ $bull->name }}" class="img-preview col-md-12">
                </label>
            </div>
        </div>
        <input type="submit" class="btn btn-dark " value="Alterar touro">
    </form>

</div>


@endsection