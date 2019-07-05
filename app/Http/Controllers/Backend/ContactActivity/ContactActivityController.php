<?php

namespace App\Http\Controllers\Backend\ContactActivity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\ContactActivity\CreateContactActivity;
use App\Http\Requests\Backend\ContactActivity\UpdateContactActivity;
use App\Repositories\Backend\ContactActivityRepository;
use App\Events\Backend\ContactActivity\ContactActivityCreated;
use App\Events\Backend\ContactActivity\ContactActivityUpdated;
use App\Events\Backend\ContactActivity\ContactActivityDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\ContactActivity;

use App\Models\Contact;
use App\Models\Type;
use App\Models\Outcome;

class ContactActivityController extends Controller
{
    /** @var $contact_activityRepository */
    private $contact_activityRepository;

    public function __construct(ContactActivityRepository $contact_activityRepo)
    {
        $this->contact_activityRepository = $contact_activityRepo;
    }

    /**
     * Display a listing of the ContactActivity.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->contact_activityRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->contact_activityRepository->getPaginatedAndSortable(10);

        return view('backend.contact_activities.index')->with(
            'contact_activities',
            $data
        );
    }

    /**
     * Show the form for creating a new ContactActivity.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $contacts = Contact::all();
        $selectedContact = Contact::first() ? Contact::first()->id : 0;

        $types = Type::all();
        $selectedType = Type::first() ? Type::first()->id : 0;

        $outcomes = Outcome::all();
        $selectedOutcome = Outcome::first() ? Outcome::first()->id : 0;

        return view(
            'backend.contact_activities.create',
            compact(
                "contacts",
                "selectedContact",

                "types",
                "selectedType",
                "outcomes",
                "selectedOutcome"
            )
        );
    }

    /**
     * Store a newly created ContactActivity in storage.
     *
     * @param CreateContactActivity $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateContactActivity $request)
    {
        $obj = $this->contact_activityRepository->create(
            $request->only([
                "contact_id",
                "type_id",
                "outcome_id",
                "activity_date",
                "details"
            ])
        );

        event(new ContactActivityCreated($obj));
        return redirect()
            ->route('admin.contact_activity.index')
            ->withFlashSuccess(__('alerts.frontend.contact_activity.saved'));
    }

    /**
     * Display the specified ContactActivity.
     *
     * @param ContactActivity $contact_activity
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(ContactActivity $contact_activity)
    {
        return view('backend.contact_activities.show')->with(
            'contact_activity',
            $contact_activity
        );
    }

    /**
     * Show the form for editing the specified ContactActivity.
     *
     * @param ContactActivity $contact_activity
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(ContactActivity $contact_activity)
    {
        $contacts = Contact::all();
        $selectedContact = $contact_activity->contact_id;

        $types = Type::all();
        $selectedType = $contact_activity->type_id;

        $outcomes = Outcome::all();
        $selectedOutcome = $contact_activity->outcome_id;

        return view(
            'backend.contact_activities.edit',
            compact(
                "contacts",
                "selectedContact",
                "types",
                "selectedType",
                "outcomes",
                "selectedOutcome"
            )
        )->with('contact_activity', $contact_activity);
    }

    /**
     * Update the specified ContactActivity in storage.
     *
     * @param UpdateContactActivity $request
     *
     * @param ContactActivity $contact_activity
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(
        UpdateContactActivity $request,
        ContactActivity $contact_activity
    ) {
        $obj = $this->contact_activityRepository->update(
            $request->all(),
            $contact_activity
        );

        event(new ContactActivityUpdated($obj));
        return redirect()
            ->route('admin.contact_activity.index')
            ->withFlashSuccess(__('alerts.frontend.contact_activity.updated'));
    }

    /**
     * Remove the specified ContactActivity from storage.
     *
     * @param ContactActivity $contact_activity
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(ContactActivity $contact_activity)
    {
        $obj = $this->contact_activityRepository->delete($contact_activity);
        event(new ContactActivityDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.contact_activity.deleted'));
    }
}
