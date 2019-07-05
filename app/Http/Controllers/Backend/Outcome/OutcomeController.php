<?php

namespace App\Http\Controllers\Backend\Outcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Outcome\CreateOutcome;
use App\Http\Requests\Backend\Outcome\UpdateOutcome;
use App\Repositories\Backend\OutcomeRepository;
use App\Events\Backend\Outcome\OutcomeCreated;
use App\Events\Backend\Outcome\OutcomeUpdated;
use App\Events\Backend\Outcome\OutcomeDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Outcome;

class OutcomeController extends Controller
{
    /** @var $outcomeRepository */
    private $outcomeRepository;

    public function __construct(OutcomeRepository $outcomeRepo)
    {
        $this->outcomeRepository = $outcomeRepo;
    }

    /**
     * Display a listing of the Outcome.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->outcomeRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->outcomeRepository->getPaginatedAndSortable(10);

        return view('backend.outcomes.index')->with('outcomes', $data);
    }

    /**
     * Show the form for creating a new Outcome.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.outcomes.create');
    }

    /**
     * Store a newly created Outcome in storage.
     *
     * @param CreateOutcome $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateOutcome $request)
    {
        $obj = $this->outcomeRepository->create(
            $request->only(["code", "description"])
        );

        event(new OutcomeCreated($obj));
        return redirect()
            ->route('admin.outcome.index')
            ->withFlashSuccess(__('alerts.frontend.outcome.saved'));
    }

    /**
     * Display the specified Outcome.
     *
     * @param Outcome $outcome
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Outcome $outcome)
    {
        return view('backend.outcomes.show')->with('outcome', $outcome);
    }

    /**
     * Show the form for editing the specified Outcome.
     *
     * @param Outcome $outcome
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Outcome $outcome)
    {
        return view('backend.outcomes.edit')->with('outcome', $outcome);
    }

    /**
     * Update the specified Outcome in storage.
     *
     * @param UpdateOutcome $request
     *
     * @param Outcome $outcome
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateOutcome $request, Outcome $outcome)
    {
        $obj = $this->outcomeRepository->update($request->all(), $outcome);

        event(new OutcomeUpdated($obj));
        return redirect()
            ->route('admin.outcome.index')
            ->withFlashSuccess(__('alerts.frontend.outcome.updated'));
    }

    /**
     * Remove the specified Outcome from storage.
     *
     * @param Outcome $outcome
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Outcome $outcome)
    {
        $obj = $this->outcomeRepository->delete($outcome);
        event(new OutcomeDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.outcome.deleted'));
    }
}
