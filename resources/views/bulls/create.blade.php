@extends('layouts.main')

@section('title','Registrar touro')

@section('content')


<div id="bull-create-container" class="col-md-6 offset-md-3">
    <h1>Adicione um touro</h1>
    <form action="/bulls" method="POST">
        <div class="form-group">
            <label for="title">Nome do touro:
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do touro...">
            </label>
        </div>
        <div class="form-group">
            <label for="title">RGD:
                <input type="text" class="form-control" id="title" name="title" placeholder="RGD do touro...">
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
        <input type="submit" class="btn btn-dark " value="Adicionar touro">
    </form>

</div>


@endsection