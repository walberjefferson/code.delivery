@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nova categoria</h1>

                @include('errors._check')

                {!! Form::open(['route' => 'admin.categories.store']) !!}

                @include('admin.categories._form')

                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Criar categoria', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection