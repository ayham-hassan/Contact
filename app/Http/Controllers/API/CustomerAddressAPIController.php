<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCustomerAddressAPIRequest;
use App\Http\Requests\API\UpdateCustomerAddressAPIRequest;
use App\Models\CustomerAddress;
use App\Repositories\Backend\CustomerAddressRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Models\Address;

/**
 * Class CustomerAddressAPIController
 * @package App\Http\Controllers\API
 */
class CustomerAddressAPIController extends Controller
{
    /** @var  CustomerAddressRepository */
    private $customeraddressRepository;
    /** @var  CustomerAddressModel */
    private $customeraddressModel;

    public function __construct(
        CustomerAddressRepository $customeraddressRepo,
        CustomerAddress $customeraddress
    ) {
        $this->customeraddressRepository = $customeraddressRepo->skipCache(
            true
        );
        $this->customeraddressModel = $customeraddress;
    }

    /**
     * Display a listing of the CustomerAddress.
     * GET|HEAD /customer_addresses
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $customer_addresses = $this->customeraddressRepository->all();
        return response()->json([
            'data' => $customer_addresses,
            'CustomerAddresses retrieved successfully'
        ]);
    }

    /**
     * Store a newly created CustomerAddress in storage.
     * POST /customer_addresses
     *
     * @param CreateCustomerAddressAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateCustomerAddressAPIRequest $request)
    {
        $input = $request->all();
        $this->customeraddressRepository->create($input);
        return response()->json(['CustomerAddress saved successfully']);
    }

    /**
     * Display the specified CustomerAddress.
     * GET|HEAD /customer_addresses/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var CustomerAddress $customeraddress */
        //   $customeraddress = $this->customeraddressRepository->findByField('id',$id);
        $customeraddress = $this->customeraddressModel->find($id);
        return response()->json([
            'data' => $customeraddress,
            'CustomerAddress retrieved successfully'
        ]);
    }

    /**
     * Update the specified CustomerAddress in storage.
     * PUT/PATCH /customer_addresses/{id}
     *
     * @param  int $id
     * @param UpdateCustomerAddressAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateCustomerAddressAPIRequest $request)
    {
        $input = $request->all();
        /** @var CustomerAddress $customeraddress */
        $customeraddress = $this->customeraddressModel->find($id);
        $customeraddress = $this->customeraddressRepository->update(
            $customeraddress,
            $input
        );
        return response()->json(['CustomerAddress updated successfully']);
    }

    /**
     * Remove the specified CustomerAddress from storage.
     * DELETE /customer_addresses/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var CustomerAddress $customeraddress */
        $customeraddress = $this->customeraddressModel->find($id);
        $customeraddress->delete();

        return response()->json('CustomerAddress deleted successfully');
    }
}
