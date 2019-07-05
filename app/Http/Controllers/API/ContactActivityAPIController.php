<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateContactActivityAPIRequest;
use App\Http\Requests\API\UpdateContactActivityAPIRequest;
use App\Models\ContactActivity;
use App\Repositories\Backend\ContactActivityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Contact;
use App\Models\Type;
use App\Models\Outcome;

/**
 * Class ContactActivityAPIController
 * @package App\Http\Controllers\API
 */
class ContactActivityAPIController extends Controller
{
    /** @var  ContactActivityRepository */
    private $contactactivityRepository;
    /** @var  ContactActivityModel */
    private $contactactivityModel;

    public function __construct(
        ContactActivityRepository $contactactivityRepo,
        ContactActivity $contactactivity
    ) {
        $this->contactactivityRepository = $contactactivityRepo->skipCache(
            true
        );
        $this->contactactivityModel = $contactactivity;
    }

    /**
     * Display a listing of the ContactActivity.
     * GET|HEAD /contact_activities
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $contact_activities = $this->contactactivityRepository->all();
        return response()->json([
            'data' => $contact_activities,
            'ContactActivitys retrieved successfully'
        ]);
    }

    /**
     * Store a newly created ContactActivity in storage.
     * POST /contact_activities
     *
     * @param CreateContactActivityAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateContactActivityAPIRequest $request)
    {
        $input = $request->all();
        $this->contactactivityRepository->create($input);
        return response()->json(['ContactActivity saved successfully']);
    }

    /**
     * Display the specified ContactActivity.
     * GET|HEAD /contact_activities/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var ContactActivity $contactactivity */
        //   $contactactivity = $this->contactactivityRepository->findByField('id',$id);
        $contactactivity = $this->contactactivityModel->find($id);
        return response()->json([
            'data' => $contactactivity,
            'ContactActivity retrieved successfully'
        ]);
    }

    /**
     * Update the specified ContactActivity in storage.
     * PUT/PATCH /contact_activities/{id}
     *
     * @param  int $id
     * @param UpdateContactActivityAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateContactActivityAPIRequest $request)
    {
        $input = $request->all();
        /** @var ContactActivity $contactactivity */
        $contactactivity = $this->contactactivityModel->find($id);
        $contactactivity = $this->contactactivityRepository->update(
            $contactactivity,
            $input
        );
        return response()->json(['ContactActivity updated successfully']);
    }

    /**
     * Remove the specified ContactActivity from storage.
     * DELETE /contact_activities/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var ContactActivity $contactactivity */
        $contactactivity = $this->contactactivityModel->find($id);
        $contactactivity->delete();

        return response()->json('ContactActivity deleted successfully');
    }
}
