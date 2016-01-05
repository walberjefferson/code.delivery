@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editando cliente: {{$clients->user->name}}</h1>

                @include('errors._check')

                {!! Form::model($clients, ['route' => ['admin.clients.update', $clients->id]]) !!}

                @include('admin.clients._form')

                        <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection