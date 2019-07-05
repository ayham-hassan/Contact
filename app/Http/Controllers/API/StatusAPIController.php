<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateStatusAPIRequest;
use App\Http\Requests\API\UpdateStatusAPIRequest;
use App\Models\Status;
use App\Repositories\Backend\StatusRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class StatusAPIController
 * @package App\Http\Controllers\API
 */
class StatusAPIController extends Controller
{
    /** @var  StatusRepository */
    private $statusRepository;
    /** @var  StatusModel */
    private $statusModel;

    public function __construct(StatusRepository $statusRepo, Status $status)
    {
        $this->statusRepository = $statusRepo->skipCache(true);
        $this->statusModel = $status;
    }

    /**
     * Display a listing of the Status.
     * GET|HEAD /status
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $status = $this->statusRepository->all();
        return response()->json([
            'data' => $status,
            'Statuses retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Status in storage.
     * POST /status
     *
     * @param CreateStatusAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateStatusAPIRequest $request)
    {
        $input = $request->all();
        $this->statusRepository->create($input);
        return response()->json(['Status saved successfully']);
    }

    /**
     * Display the specified Status.
     * GET|HEAD /status/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Status $status */
        //   $status = $this->statusRepository->findByField('id',$id);
        $status = $this->statusModel->find($id);
        return response()->json([
            'data' => $status,
            'Status retrieved successfully'
        ]);
    }

    /**
     * Update the specified Status in storage.
     * PUT/PATCH /status/{id}
     *
     * @param  int $id
     * @param UpdateStatusAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateStatusAPIRequest $request)
    {
        $input = $request->all();
        /** @var Status $status */
        $status = $this->statusModel->find($id);
        $status = $this->statusRepository->update($status, $input);
        return response()->json(['Status updated successfully']);
    }

    /**
     * Remove the specified Status from storage.
     * DELETE /status/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Status $status */
        $status = $this->statusModel->find($id);
        $status->delete();

        return response()->json('Status deleted successfully');
    }
}
