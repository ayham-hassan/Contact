<?php

namespace App\Http\Controllers\Backend\Address;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Address\CreateAddress;
use App\Http\Requests\Backend\Address\UpdateAddress;
use App\Repositories\Backend\AddressRepository;
use App\Events\Backend\Address\AddressCreated;
use App\Events\Backend\Address\AddressUpdated;
use App\Events\Backend\Address\AddressDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Address;

class AddressController extends Controller
{
    /** @var $addressRepository */
    private $addressRepository;

    public function __construct(AddressRepository $addressRepo)
    {
        $this->addressRepository = $addressRepo;
    }

    /**
     * Display a listing of the Address.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->addressRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->addressRepository->getPaginatedAndSortable(10);

        return view('backend.addresses.index')->with('addresses', $data);
    }

    /**
     * Show the form for creating a new Address.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.addresses.create');
    }

    /**
     * Store a newly created Address in storage.
     *
     * @param CreateAddress $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateAddress $request)
    {
        $obj = $this->addressRepository->create(
            $request->only([
                "build_num",
                "street",
                "area",
                "city",
                "zipcode",
                "country",
                "details"
            ])
        );

        event(new AddressCreated($obj));
        return redirect()
            ->route('admin.address.index')
            ->withFlashSuccess(__('alerts.frontend.address.saved'));
    }

    /**
     * Display the specified Address.
     *
     * @param Address $address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Address $address)
    {
        return view('backend.addresses.show')->with('address', $address);
    }

    /**
     * Show the form for editing the specified Address.
     *
     * @param Address $address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Address $address)
    {
        return view('backend.addresses.edit')->with('address', $address);
    }

    /**
     * Update the specified Address in storage.
     *
     * @param UpdateAddress $request
     *
     * @param Address $address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateAddress $request, Address $address)
    {
        $obj = $this->addressRepository->update($request->all(), $address);

        event(new AddressUpdated($obj));
        return redirect()
            ->route('admin.address.index')
            ->withFlashSuccess(__('alerts.frontend.address.updated'));
    }

    /**
     * Remove the specified Address from storage.
     *
     * @param Address $address
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Address $address)
    {
        $obj = $this->addressRepository->delete($address);
        event(new AddressDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.address.deleted'));
    }
}
