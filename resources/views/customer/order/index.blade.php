@extends('app')

@section('content')

    <div class="container">
        <h3>Meus pedidos</h3>

        @include('errors._check')

        <a href="{{route('customer.order.create')}}" class="btn btn-default">Novo pedido</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="7%">ID</th>
                <th>Total</th>
                <th width="15%">Status</th>
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
                <td>{{$order->id}}</td>
                <td>{{$order->total}}</td>
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
            </tr>
            @endforeach
            </tbody>
        </table>

    {!! $orders->render() !!}

@endsection