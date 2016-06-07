@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cupom<a href="{{ route('admin.cupoms.create') }}" class="btn btn-link" title="Adicionar novo cupom"><i class="glyphicon glyphicon-plus"></i></a></h1>


                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th>Código</th>
                        <th>Valor</th>
                        <th width="15%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cupoms as $cupom)
                    <tr @if($cupom->used)class="danger"@else class="success" @endif>
                        <td>{{$cupom->id}}</td>
                        <td>{{$cupom->code}}</td>
                        <td>{{$cupom->value}}</td>
                        <td><a href="{{route('admin.cupoms.edit', ['id'=>$cupom->id])}}" class="btn btn-default btn-sm">Editar</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {!!  $cupoms->render() !!}
            </div>
        </div>
    </div>
@endsection