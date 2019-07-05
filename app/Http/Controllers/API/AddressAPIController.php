<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAddressAPIRequest;
use App\Http\Requests\API\UpdateAddressAPIRequest;
use App\Models\Address;
use App\Repositories\Backend\AddressRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class AddressAPIController
 * @package App\Http\Controllers\API
 */
class AddressAPIController extends Controller
{
    /** @var  AddressRepository */
    private $addressRepository;
    /** @var  AddressModel */
    private $addressModel;

    public function __construct(
        AddressRepository $addressRepo,
        Address $address
    ) {
        $this->addressRepository = $addressRepo->skipCache(true);
        $this->addressModel = $address;
    }

    /**
     * Display a listing of the Address.
     * GET|HEAD /addresses
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $addresses = $this->addressRepository->all();
        return response()->json([
            'data' => $addresses,
            'Addresses retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Address in storage.
     * POST /addresses
     *
     * @param CreateAddressAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateAddressAPIRequest $request)
    {
        $input = $request->all();
        $this->addressRepository->create($input);
        return response()->json(['Address saved successfully']);
    }

    /**
     * Display the specified Address.
     * GET|HEAD /addresses/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Address $address */
        //   $address = $this->addressRepository->findByField('id',$id);
        $address = $this->addressModel->find($id);
        return response()->json([
            'data' => $address,
            'Address retrieved successfully'
        ]);
    }

    /**
     * Update the specified Address in storage.
     * PUT/PATCH /addresses/{id}
     *
     * @param  int $id
     * @param UpdateAddressAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateAddressAPIRequest $request)
    {
        $input = $request->all();
        /** @var Address $address */
        $address = $this->addressModel->find($id);
        $address = $this->addressRepository->update($address, $input);
        return response()->json(['Address updated successfully']);
    }

    /**
     * Remove the specified Address from storage.
     * DELETE /addresses/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Address $address */
        $address = $this->addressModel->find($id);
        $address->delete();

        return response()->json('Address deleted successfully');
    }
}
