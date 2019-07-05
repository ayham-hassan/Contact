<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateOutcomeAPIRequest;
use App\Http\Requests\API\UpdateOutcomeAPIRequest;
use App\Models\Outcome;
use App\Repositories\Backend\OutcomeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class OutcomeAPIController
 * @package App\Http\Controllers\API
 */
class OutcomeAPIController extends Controller
{
    /** @var  OutcomeRepository */
    private $outcomeRepository;
    /** @var  OutcomeModel */
    private $outcomeModel;

    public function __construct(
        OutcomeRepository $outcomeRepo,
        Outcome $outcome
    ) {
        $this->outcomeRepository = $outcomeRepo->skipCache(true);
        $this->outcomeModel = $outcome;
    }

    /**
     * Display a listing of the Outcome.
     * GET|HEAD /outcomes
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $outcomes = $this->outcomeRepository->all();
        return response()->json([
            'data' => $outcomes,
            'Outcomes retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Outcome in storage.
     * POST /outcomes
     *
     * @param CreateOutcomeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateOutcomeAPIRequest $request)
    {
        $input = $request->all();
        $this->outcomeRepository->create($input);
        return response()->json(['Outcome saved successfully']);
    }

    /**
     * Display the specified Outcome.
     * GET|HEAD /outcomes/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Outcome $outcome */
        //   $outcome = $this->outcomeRepository->findByField('id',$id);
        $outcome = $this->outcomeModel->find($id);
        return response()->json([
            'data' => $outcome,
            'Outcome retrieved successfully'
        ]);
    }

    /**
     * Update the specified Outcome in storage.
     * PUT/PATCH /outcomes/{id}
     *
     * @param  int $id
     * @param UpdateOutcomeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateOutcomeAPIRequest $request)
    {
        $input = $request->all();
        /** @var Outcome $outcome */
        $outcome = $this->outcomeModel->find($id);
        $outcome = $this->outcomeRepository->update($outcome, $input);
        return response()->json(['Outcome updated successfully']);
    }

    /**
     * Remove the specified Outcome from storage.
     * DELETE /outcomes/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Outcome $outcome */
        $outcome = $this->outcomeModel->find($id);
        $outcome->delete();

        return response()->json('Outcome deleted successfully');
    }
}
