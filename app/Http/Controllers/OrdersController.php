<?php
/**
 * Created by PhpStorm.
 * User: Binho
 * Date: 31/10/2015
 * Time: 10:27
 */

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate(5);
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = [0=>'Pendente', 1=>'A Caminho', 2=>'Entregue', 3=>'Cancelado'];
        $order = $this->repository->find($id);
        $deliveryman = $userRepository->getDeliverymen();

        return view('admin.orders.edit', compact('order', 'deliveryman', 'list_status'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->all();
        $this->repository->update($all, $id);

        return redirect()->route('admin.orders.index');
    }

}