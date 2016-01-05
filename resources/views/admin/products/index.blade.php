@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Produtos<a href="{{ route('admin.products.create') }}" class="btn btn-link" title="Adicionar nova categoria"><i class="glyphicon glyphicon-plus"></i></a></h1>


                <br><br>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th width="15%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('admin.products.edit', ['id'=>$product->id])}}" class="btn btn-default btn-sm">Editar</a>
                            <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {!!  $products->render() !!}
            </div>
        </div>
    </div>
@endsection