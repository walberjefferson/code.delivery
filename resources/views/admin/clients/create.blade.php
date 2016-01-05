@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Novo cliente</h1>

                @include('errors._check')

                {!! Form::open(['route' => 'admin.clients.store']) !!}

                @include('admin.clients._form')

                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Criar cliente', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection