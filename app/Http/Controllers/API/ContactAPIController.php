<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContactAPIRequest;
use App\Http\Requests\API\UpdateContactAPIRequest;
use App\Models\Contact;
use App\Repositories\Backend\ContactRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Models\Status;

/**
 * Class ContactAPIController
 * @package App\Http\Controllers\API
 */
class ContactAPIController extends Controller
{
    /** @var  ContactRepository */
    private $contactRepository;
    /** @var  ContactModel */
    private $contactModel;

    public function __construct(
        ContactRepository $contactRepo,
        Contact $contact
    ) {
        $this->contactRepository = $contactRepo->skipCache(true);
        $this->contactModel = $contact;
    }

    /**
     * Display a listing of the Contact.
     * GET|HEAD /contacts
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $contacts = $this->contactRepository->all();
        return response()->json([
            'data' => $contacts,
            'Contacts retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Contact in storage.
     * POST /contacts
     *
     * @param CreateContactAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateContactAPIRequest $request)
    {
        $input = $request->all();
        $this->contactRepository->create($input);
        return response()->json(['Contact saved successfully']);
    }

    /**
     * Display the specified Contact.
     * GET|HEAD /contacts/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Contact $contact */
        //   $contact = $this->contactRepository->findByField('id',$id);
        $contact = $this->contactModel->find($id);
        return response()->json([
            'data' => $contact,
            'Contact retrieved successfully'
        ]);
    }

    /**
     * Update the specified Contact in storage.
     * PUT/PATCH /contacts/{id}
     *
     * @param  int $id
     * @param UpdateContactAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateContactAPIRequest $request)
    {
        $input = $request->all();
        /** @var Contact $contact */
        $contact = $this->contactModel->find($id);
        $contact = $this->contactRepository->update($contact, $input);
        return response()->json(['Contact updated successfully']);
    }

    /**
     * Remove the specified Contact from storage.
     * DELETE /contacts/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Contact $contact */
        $contact = $this->contactModel->find($id);
        $contact->delete();

        return response()->json('Contact deleted successfully');
    }
}
