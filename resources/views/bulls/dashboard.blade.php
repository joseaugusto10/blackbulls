@extends('layouts.main')

@section('title','Dashboard')

@section('content')

<div class="container">
<br><br>
        <h1 class="text-center">Dashboard</h1>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de Touros Registrados</h5>
                        <p class="card-text">{{ $qtyBulls }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de Touros Vacinados</h5>
                        <p class="card-text">{{ $qtyVaccine }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de Touros com Fotos</h5>
                        <p class="card-text">{{ $qtyImage }}</p>
                    </div>
                </div>
            </div>
        </div>


@endsection