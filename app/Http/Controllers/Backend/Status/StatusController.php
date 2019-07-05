<?php

namespace App\Http\Controllers\Backend\Status;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Status\CreateStatus;
use App\Http\Requests\Backend\Status\UpdateStatus;
use App\Repositories\Backend\StatusRepository;
use App\Events\Backend\Status\StatusCreated;
use App\Events\Backend\Status\StatusUpdated;
use App\Events\Backend\Status\StatusDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Status;

class StatusController extends Controller
{
    /** @var $statusRepository */
    private $statusRepository;

    public function __construct(StatusRepository $statusRepo)
    {
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Status.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->statusRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->statusRepository->getPaginatedAndSortable(10);

        return view('backend.status.index')->with('status', $data);
    }

    /**
     * Show the form for creating a new Status.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.status.create');
    }

    /**
     * Store a newly created Status in storage.
     *
     * @param CreateStatus $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateStatus $request)
    {
        $obj = $this->statusRepository->create(
            $request->only(["code", "description"])
        );

        event(new StatusCreated($obj));
        return redirect()
            ->route('admin.status.index')
            ->withFlashSuccess(__('alerts.frontend.status.saved'));
    }

    /**
     * Display the specified Status.
     *
     * @param Status $status
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Status $status)
    {
        return view('backend.status.show')->with('status', $status);
    }

    /**
     * Show the form for editing the specified Status.
     *
     * @param Status $status
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Status $status)
    {
        return view('backend.status.edit')->with('status', $status);
    }

    /**
     * Update the specified Status in storage.
     *
     * @param UpdateStatus $request
     *
     * @param Status $status
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateStatus $request, Status $status)
    {
        $obj = $this->statusRepository->update($request->all(), $status);

        event(new StatusUpdated($obj));
        return redirect()
            ->route('admin.status.index')
            ->withFlashSuccess(__('alerts.frontend.status.updated'));
    }

    /**
     * Remove the specified Status from storage.
     *
     * @param Status $status
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Status $status)
    {
        $obj = $this->statusRepository->delete($status);
        event(new StatusDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.status.deleted'));
    }
}
