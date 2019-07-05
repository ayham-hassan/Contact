<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCustomerAPIRequest;
use App\Http\Requests\API\UpdateCustomerAPIRequest;
use App\Models\Customer;
use App\Repositories\Backend\CustomerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class CustomerAPIController
 * @package App\Http\Controllers\API
 */
class CustomerAPIController extends Controller
{
    /** @var  CustomerRepository */
    private $customerRepository;
    /** @var  CustomerModel */
    private $customerModel;

    public function __construct(
        CustomerRepository $customerRepo,
        Customer $customer
    ) {
        $this->customerRepository = $customerRepo->skipCache(true);
        $this->customerModel = $customer;
    }

    /**
     * Display a listing of the Customer.
     * GET|HEAD /customers
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $customers = $this->customerRepository->all();
        return response()->json([
            'data' => $customers,
            'Customers retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Customer in storage.
     * POST /customers
     *
     * @param CreateCustomerAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateCustomerAPIRequest $request)
    {
        $input = $request->all();
        $this->customerRepository->create($input);
        return response()->json(['Customer saved successfully']);
    }

    /**
     * Display the specified Customer.
     * GET|HEAD /customers/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Customer $customer */
        //   $customer = $this->customerRepository->findByField('id',$id);
        $customer = $this->customerModel->find($id);
        return response()->json([
            'data' => $customer,
            'Customer retrieved successfully'
        ]);
    }

    /**
     * Update the specified Customer in storage.
     * PUT/PATCH /customers/{id}
     *
     * @param  int $id
     * @param UpdateCustomerAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateCustomerAPIRequest $request)
    {
        $input = $request->all();
        /** @var Customer $customer */
        $customer = $this->customerModel->find($id);
        $customer = $this->customerRepository->update($customer, $input);
        return response()->json(['Customer updated successfully']);
    }

    /**
     * Remove the specified Customer from storage.
     * DELETE /customers/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Customer $customer */
        $customer = $this->customerModel->find($id);
        $customer->delete();

        return response()->json('Customer deleted successfully');
    }
}
