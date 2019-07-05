<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTypeAPIRequest;
use App\Http\Requests\API\UpdateTypeAPIRequest;
use App\Models\Type;
use App\Repositories\Backend\TypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * Class TypeAPIController
 * @package App\Http\Controllers\API
 */
class TypeAPIController extends Controller
{
    /** @var  TypeRepository */
    private $typeRepository;
    /** @var  TypeModel */
    private $typeModel;

    public function __construct(TypeRepository $typeRepo, Type $type)
    {
        $this->typeRepository = $typeRepo->skipCache(true);
        $this->typeModel = $type;
    }

    /**
     * Display a listing of the Type.
     * GET|HEAD /types
     *
     * @param Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(Request $request)
    {
        $types = $this->typeRepository->all();
        return response()->json([
            'data' => $types,
            'Types retrieved successfully'
        ]);
    }

    /**
     * Store a newly created Type in storage.
     * POST /types
     *
     * @param CreateTypeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateTypeAPIRequest $request)
    {
        $input = $request->all();
        $this->typeRepository->create($input);
        return response()->json(['Type saved successfully']);
    }

    /**
     * Display the specified Type.
     * GET|HEAD /types/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function show($id)
    {
        /** @var Type $type */
        //   $type = $this->typeRepository->findByField('id',$id);
        $type = $this->typeModel->find($id);
        return response()->json([
            'data' => $type,
            'Type retrieved successfully'
        ]);
    }

    /**
     * Update the specified Type in storage.
     * PUT/PATCH /types/{id}
     *
     * @param  int $id
     * @param UpdateTypeAPIRequest $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function update($id, UpdateTypeAPIRequest $request)
    {
        $input = $request->all();
        /** @var Type $type */
        $type = $this->typeModel->find($id);
        $type = $this->typeRepository->update($type, $input);
        return response()->json(['Type updated successfully']);
    }

    /**
     * Remove the specified Type from storage.
     * DELETE /types/{id}
     *
     * @param  int $id
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Type $type */
        $type = $this->typeModel->find($id);
        $type->delete();

        return response()->json('Type deleted successfully');
    }
}
