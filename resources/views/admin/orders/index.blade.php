@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pedidos</h1>


                <br><br>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <th width="5%" class="text-center">ID</th>
                        <th>Cliente</th>
                        <th width="8%">Total</th>
                        <th>Itens</th>
                        <th>Entregador</th>
                        <th>Status</th>
                        <th width="15%">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <?php
                            if($order->status == 0) : $class = 'warning';
                            elseif($order->status == 1): $class = 'info';
                            elseif($order->status == 2): $class = 'success';
                            elseif($order->status == 3): $class = 'danger';
                            else: $class = 'active';
                            endif;
                        ?>

                    <tr class="<?= $class ?>">
                        <th class="text-center">#{{$order->id}}</th>
                        <td>{{$order->client->user->name}}</td>
                        <td>R$ {{$order->total}}</td>
                        <td>
                            <ul>
                            @foreach($order->items as $item)
                                <li>{{$item->product->name}}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>

                            @if($order->deliveryman)
                                {{$order->deliveryman->name}}
                            @else
                                --
                            @endif
                        </td>
                        <td>
                            @if($order->status == 0)
                                Pendente
                            @elseif($order->status == 1)
                                A Caminho
                            @elseif($order->status == 2)
                                Entregue
                            @elseif($order->status == 3)
                                Cancelado
                            @endif
                        </td>
                        <td><a href="{{route('admin.orders.edit', ['id'=>$order->id])}}" class="btn btn-default btn-sm">Editar</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                {!!  $orders->render() !!}
            </div>
        </div>
    </div>
@endsection