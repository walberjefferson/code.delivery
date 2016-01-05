@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Nova categoria</h1>

                @include('errors._check')

                {!! Form::open(['route' => 'admin.products.store']) !!}

                @include('admin.products._form')

                <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Criar produto', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection