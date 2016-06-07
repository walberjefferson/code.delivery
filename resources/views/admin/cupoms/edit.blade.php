@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editando cupom: {{$cupom->id}}</h1>
                <?php print_r($cupom); ?>
                @include('errors._check')

                {!! Form::model($cupom, ['route' => ['admin.cupoms.update', $cupom->id]]) !!}

                @include('admin.cupoms._form')

                        <!-- Form Button -->
                <div class="form-group">
                    {!! Form::submit('Editar cupom', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection