@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Novo cupom</h1>

                @include('errors._check')

                {!! Form::open(['route' => 'admin.cupoms.store']) !!}

                @include('admin.cupoms._form')

                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Criar cupom', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection