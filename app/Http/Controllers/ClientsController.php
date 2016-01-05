<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\ClientRepositoryEloquent;
use CodeDelivery\Services\ClientService;

#use CodeDelivery\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index()
    {
        $clients = $this->repository->paginate();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * @param AdminClientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminClientRequest $request)
    {
        $this->clientService->create($request->all());
        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $clients = $this->repository->find($id);
        return view('admin.clients.edit', compact('clients'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $this->clientService->update($request->all(), $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clients.index');
    }
}
