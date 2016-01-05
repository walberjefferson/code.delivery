@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editando categoria: {{$category->name}}</h1>

                @include('errors._check')

                {!! Form::model($category, ['route' => ['admin.categories.update', $category->id]]) !!}

                @include('admin.categories._form')

                        <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Editar categoria', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection