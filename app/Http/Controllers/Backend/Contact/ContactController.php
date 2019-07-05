<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Contact\CreateContact;
use App\Http\Requests\Backend\Contact\UpdateContact;
use App\Repositories\Backend\ContactRepository;
use App\Events\Backend\Contact\ContactCreated;
use App\Events\Backend\Contact\ContactUpdated;
use App\Events\Backend\Contact\ContactDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Contact;

use App\Models\Customer;
use App\Models\Status;

class ContactController extends Controller
{
    /** @var $contactRepository */
    private $contactRepository;

    public function __construct(ContactRepository $contactRepo)
    {
        $this->contactRepository = $contactRepo;
    }

    /**
     * Display a listing of the Contact.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->contactRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->contactRepository->getPaginatedAndSortable(10);

        return view('backend.contacts.index')->with('contacts', $data);
    }

    /**
     * Show the form for creating a new Contact.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $customers = Customer::all();
        $selectedCustomer = Customer::first() ? Customer::first()->id : 0;

        $statuses = Status::all();
        $selectedStatus = Status::first() ? Status::first()->id : 0;

        return view(
            'backend.contacts.create',
            compact(
                "customers",
                "selectedCustomer",

                "statuses",
                "selectedStatus"
            )
        );
    }

    /**
     * Store a newly created Contact in storage.
     *
     * @param CreateContact $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateContact $request)
    {
        if (request()->hasFile('image_file')) {
            $path = $request->file('image_file')->store('public');
            $request['image'] = $path;
        }

        $obj = $this->contactRepository->create(
            $request->only([
                "image",
                "name",
                "customer_id",
                "status_id",
                "email",
                "web_sit",
                "mobile",
                "fax",
                "details"
            ])
        );

        event(new ContactCreated($obj));
        return redirect()
            ->route('admin.contact.index')
            ->withFlashSuccess(__('alerts.frontend.contact.saved'));
    }

    /**
     * Display the specified Contact.
     *
     * @param Contact $contact
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Contact $contact)
    {
        return view('backend.contacts.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified Contact.
     *
     * @param Contact $contact
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Contact $contact)
    {
        $customers = Customer::all();
        $selectedCustomer = $contact->customer_id;

        $statuses = Status::all();
        $selectedStatus = $contact->status_id;

        return view(
            'backend.contacts.edit',
            compact(
                "customers",
                "selectedCustomer",
                "statuses",
                "selectedStatus"
            )
        )->with('contact', $contact);
    }

    /**
     * Update the specified Contact in storage.
     *
     * @param UpdateContact $request
     *
     * @param Contact $contact
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateContact $request, Contact $contact)
    {
        if (request()->hasFile('image_file')) {
            $path = $request->file('image_file')->store('public');
            $request['image'] = $path;
        }

        $obj = $this->contactRepository->update($request->all(), $contact);

        event(new ContactUpdated($obj));
        return redirect()
            ->route('admin.contact.index')
            ->withFlashSuccess(__('alerts.frontend.contact.updated'));
    }

    /**
     * Remove the specified Contact from storage.
     *
     * @param Contact $contact
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Contact $contact)
    {
        $obj = $this->contactRepository->delete($contact);
        event(new ContactDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.contact.deleted'));
    }
}
