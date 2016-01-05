@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Clientes<a href="{{ route('admin.clients.create') }}" class="btn btn-link" title="Adicionar nova categoria"><i class="glyphicon glyphicon-plus"></i></a></h1>


                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th>Nome</th>
                        <th width="15%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->user->name}}</td>
                        <td><a href="{{route('admin.clients.edit', ['id'=>$client->id])}}" class="btn btn-default btn-sm">Editar</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {!!  $clients->render() !!}
            </div>
        </div>
    </div>
@endsection