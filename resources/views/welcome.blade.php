@extends('layouts.main')

@section('title','home')

@section('content')


<div class="container">

        <div id="search-container" class="col-md-12 source-bulss">
            <h5>Busque um touro</h5>
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            <br>
        </div>

        <table class="table" id="bulls-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RGD</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($bulls as $bull)
                    <tr>
                        <td scope="row" class="col-id">{{ $bull ->id}}</td>
                        <td scope="row">{{ $bull ->name}}</td>
                        <td scope="row">{{ $bull ->rgd}}</td>
                        <!-- <td scope="row">{{$bull ->observation}}</td> -->
                        <td class="actions">
                        <a href="#"><i class="fas fa-eye check-icon"></i></a>
                        <a href="#"><i class="far fa-edit edit-icon"></i></a>
                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>



</div>


@endsection