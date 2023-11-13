@extends('layouts.main')

@section('title','home')

@section('content')


<div class="container">

        <div id="search-container" class="col-md-12 source-bulss">
            <h5>Busque um touro</h5>
            <form action="/" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
            <br>
        </div>

        @if($search)
        <h6 class="alt-search">Pesquisando por: {{ $search }}, <a href="/">ver todos!</a></h6>
        <br>
        @endif  
        @if(count($bulls) == 0 && $search)
            <p class="alt-search">Não foi possível encontrar nenhum touro com {{ $search }}!</p>
        @elseif(count($bulls) == 0)
            <p class="alt-search">Não existe touros cadastrados, <a href="bulls/create">deseja cadastrar?</a></p>
        @else  
        <br>
        <table class="table" id="bulls-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">RGD</th>
                    <th scope="col">Vacinado</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($bulls as $bull)
                    <tr>
                        <td scope="row" class="col-id">{{ $bull ->id}}</td>
                        <td scope="row">{{ $bull ->name}}</td>
                        <td scope="row">{{ $bull ->rgd}}</td>
                        @if($bull ->vaccine == 1)
                        <td scope="row">Sim</td>
                        @else
                        <td scope="row">Não</td>
                        @endif
                        {{--<td scope="row">{{$bull ->observation}}</td>--}}
                        <td class="actions">
                        <a href="/bulls/{{ $bull->id }}"><i class="fas fa-eye check-icon"></i></a>
                        <a href="/bulls/edit/{{ $bull->id }}"><i class="far fa-edit edit-icon"></i></a>
                        <form action="/bulls/{{ $bull->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="delete-btn" onclick="return confirm('Deseja remover?')">
                            <i class="fas fa-times delete-icon"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>


        @endif


</div>


@endsection