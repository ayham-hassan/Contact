<?php

namespace App\Http\Controllers\Backend\Type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Type\CreateType;
use App\Http\Requests\Backend\Type\UpdateType;
use App\Repositories\Backend\TypeRepository;
use App\Events\Backend\Type\TypeCreated;
use App\Events\Backend\Type\TypeUpdated;
use App\Events\Backend\Type\TypeDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Type;

class TypeController extends Controller
{
    /** @var $typeRepository */
    private $typeRepository;

    public function __construct(TypeRepository $typeRepo)
    {
        $this->typeRepository = $typeRepo;
    }

    /**
     * Display a listing of the Type.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->typeRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->typeRepository->getPaginatedAndSortable(10);

        return view('backend.types.index')->with('types', $data);
    }

    /**
     * Show the form for creating a new Type.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.types.create');
    }

    /**
     * Store a newly created Type in storage.
     *
     * @param CreateType $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateType $request)
    {
        $obj = $this->typeRepository->create(
            $request->only(["code", "description"])
        );

        event(new TypeCreated($obj));
        return redirect()
            ->route('admin.type.index')
            ->withFlashSuccess(__('alerts.frontend.type.saved'));
    }

    /**
     * Display the specified Type.
     *
     * @param Type $type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Type $type)
    {
        return view('backend.types.show')->with('type', $type);
    }

    /**
     * Show the form for editing the specified Type.
     *
     * @param Type $type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Type $type)
    {
        return view('backend.types.edit')->with('type', $type);
    }

    /**
     * Update the specified Type in storage.
     *
     * @param UpdateType $request
     *
     * @param Type $type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateType $request, Type $type)
    {
        $obj = $this->typeRepository->update($request->all(), $type);

        event(new TypeUpdated($obj));
        return redirect()
            ->route('admin.type.index')
            ->withFlashSuccess(__('alerts.frontend.type.updated'));
    }

    /**
     * Remove the specified Type from storage.
     *
     * @param Type $type
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Type $type)
    {
        $obj = $this->typeRepository->delete($type);
        event(new TypeDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.type.deleted'));
    }
}
