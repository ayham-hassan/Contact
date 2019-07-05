<?php

namespace App\Http\Controllers\Backend\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Customer\CreateCustomer;
use App\Http\Requests\Backend\Customer\UpdateCustomer;
use App\Repositories\Backend\CustomerRepository;
use App\Events\Backend\Customer\CustomerCreated;
use App\Events\Backend\Customer\CustomerUpdated;
use App\Events\Backend\Customer\CustomerDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Customer;

class CustomerController extends Controller
{
    /** @var $customerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Customer.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->customerRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->customerRepository->getPaginatedAndSortable(10);

        return view('backend.customers.index')->with('customers', $data);
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomer $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateCustomer $request)
    {
        $obj = $this->customerRepository->create(
            $request->only(["name", "coming_date", "details"])
        );

        event(new CustomerCreated($obj));
        return redirect()
            ->route('admin.customer.index')
            ->withFlashSuccess(__('alerts.frontend.customer.saved'));
    }

    /**
     * Display the specified Customer.
     *
     * @param Customer $customer
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Customer $customer)
    {
        return view('backend.customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param Customer $customer
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Customer $customer)
    {
        return view('backend.customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param UpdateCustomer $request
     *
     * @param Customer $customer
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateCustomer $request, Customer $customer)
    {
        $obj = $this->customerRepository->update($request->all(), $customer);

        event(new CustomerUpdated($obj));
        return redirect()
            ->route('admin.customer.index')
            ->withFlashSuccess(__('alerts.frontend.customer.updated'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param Customer $customer
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Customer $customer)
    {
        $obj = $this->customerRepository->delete($customer);
        event(new CustomerDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.customer.deleted'));
    }
}
