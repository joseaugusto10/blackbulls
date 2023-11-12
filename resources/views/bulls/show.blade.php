@extends('layouts.main')

@section('title',$bull->name)

@section('content')


<div class="container" id="view-bull-container">
<br><br>
<h3 id="main-title">{{ $bull->name }}</h3>
<a class="nav-link active " id="back-link" href="/">
    <i class="fas fa-arrow-left"></i>Voltar
</a>
<br>
    <div class="row">
        <div class="col-md-4">
            <img src="/img/bulls/{{ $bull->image }}" class="img-fluid bull-img border border-dark rounded" alt="{{ $bull->image }}">
        </div>
        <div class="col-md-8">
            <p><strong>RGD:</strong> {{ $bull->rgd }}</p>

            @if($bull ->vaccine == 1)
            <p><strong>Vacinado:</strong> Sim</p>
            @else
            <p><strong>Vacinado:</strong> Não</p>
            @endif
            <p><strong>Observações:</strong> {{ $bull->observation }}</p>
        </div>
    </div>
</div>



@endsection