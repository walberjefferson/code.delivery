@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editando produto: {{$product->name}}</h1>

                @include('errors._check')

                {!! Form::model($product, ['route' => ['admin.products.update', $product->id]]) !!}

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