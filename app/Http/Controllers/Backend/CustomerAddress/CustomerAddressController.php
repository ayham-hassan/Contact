<?php

namespace App\Http\Controllers\Backend\CustomerAddress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\CustomerAddress\CreateCustomerAddress;
use App\Http\Requests\Backend\CustomerAddress\UpdateCustomerAddress;
use App\Repositories\Backend\CustomerAddressRepository;
use App\Events\Backend\CustomerAddress\CustomerAddressCreated;
use App\Events\Backend\CustomerAddress\CustomerAddressUpdated;
use App\Events\Backend\CustomerAddress\CustomerAddressDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\CustomerAddress;

use App\Models\Customer;
use App\Models\Address;

class CustomerAddressController extends Controller
{
    /** @var $customer_addressRepository */
    private $customer_addressRepository;

    public function __construct(CustomerAddressRepository $customer_addressRepo)
    {
        $this->customer_addressRepository = $customer_addressRepo;
    }

    /**
     * Display a listing of the CustomerAddress.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->customer_addressRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->customer_addressRepository->getPaginatedAndSortable(10);

        return view('backend.customer_addresses.index')->with(
            'customer_addresses',
            $data
        );
    }

    /**
     * Show the form for creating a new CustomerAddress.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $customers = Customer::all();
        $selectedCustomer = Customer::first() ? Customer::first()->id : 0;

        $addresses = Address::all();
        $selectedAddress = Address::first() ? Address::first()->id : 0;

        return view(
            'backend.customer_addresses.create',
            compact(
                "customers",
                "selectedCustomer",

                "addresses",
                "selectedAddress"
            )
        );
    }

    /**
     * Store a newly created CustomerAddress in storage.
     *
     * @param CreateCustomerAddress $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateCustomerAddress $request)
    {
        $obj = $this->customer_addressRepository->create(
            $request->only(["customer_id", "address_id", "rec_date", "details"])
        );

        event(new CustomerAddressCreated($obj));
        return redirect()
            ->route('admin.customer_address.index')
            ->withFlashSuccess(__('alerts.frontend.customer_address.saved'));
    }

    /**
     * Display the specified CustomerAddress.
     *
     * @param CustomerAddress $customer_address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(CustomerAddress $customer_address)
    {
        return view('backend.customer_addresses.show')->with(
            'customer_address',
            $customer_address
        );
    }

    /**
     * Show the form for editing the specified CustomerAddress.
     *
     * @param CustomerAddress $customer_address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(CustomerAddress $customer_address)
    {
        $customers = Customer::all();
        $selectedCustomer = $customer_address->customer_id;

        $addresses = Address::all();
        $selectedAddress = $customer_address->address_id;

        return view(
            'backend.customer_addresses.edit',
            compact(
                "customers",
                "selectedCustomer",
                "addresses",
                "selectedAddress"
            )
        )->with('customer_address', $customer_address);
    }

    /**
     * Update the specified CustomerAddress in storage.
     *
     * @param UpdateCustomerAddress $request
     *
     * @param CustomerAddress $customer_address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(
        UpdateCustomerAddress $request,
        CustomerAddress $customer_address
    ) {
        $obj = $this->customer_addressRepository->update(
            $request->all(),
            $customer_address
        );

        event(new CustomerAddressUpdated($obj));
        return redirect()
            ->route('admin.customer_address.index')
            ->withFlashSuccess(__('alerts.frontend.customer_address.updated'));
    }

    /**
     * Remove the specified CustomerAddress from storage.
     *
     * @param CustomerAddress $customer_address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(CustomerAddress $customer_address)
    {
        $obj = $this->customer_addressRepository->delete($customer_address);
        event(new CustomerAddressDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.customer_address.deleted'));
    }
}
