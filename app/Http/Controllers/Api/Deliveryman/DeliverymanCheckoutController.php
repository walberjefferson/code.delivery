<?php

namespace CodeDelivery\Http\Controllers\Api\Deliveryman;

use Auth;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Illuminate\Http\Request;
use CodeDelivery\Http\Controllers\Controller;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class DeliverymanCheckoutController extends Controller
{

    /**
     * @var OrderRepository
     */
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var OrderService
     */
    private $service;

    public function __construct(OrderRepository $repository, UserRepository $userRepository, OrderService $service)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->service = $service;
    }

    public function index()
    {
        $id = Authorizer::getResourceOwnerId();
        $orders = $this->repository->with(['items'])->scopeQuery(function ($query) use ($id) {
            return $query->where('user_deliveryman_id', '=', $id);
        })->paginate();

        //return view('customer.order.index', compact('orders'));
        return $orders;
    }


    public function show($id)
    {
        $idDelivery = Authorizer::getResourceOwnerId();
        return $this->repository->getByAndIdDeliveryman($id, $idDelivery);
    }

    public function updateStatus(Request $request ,$id)
    {
        $idDelivery = Authorizer::getResourceOwnerId();
        $order = $this->service->updateStatus($id, $idDelivery, $request->get('status'));
        if($order){
            return $order;
        }
        abort(400, 'Order não encontrado!');
    }

}
