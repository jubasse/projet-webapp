<?php

namespace Model\Http\Controllers\Api;

use Exception;
use Model\Models\ManModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Model\Http\Controllers\Controller;
use Model\Http\Requests\ManModelRequest;
use Model\Http\Resources\ManModelResource;

/**
 * Class MaleModelController
 * @package Model\Http\Controllers\Api
 * @resource Men
 */
class ManModelController extends Controller
{
    /**
     * Display a listing of men.
     *
     * @return Response|JsonResponse|ManModelResource|mixed
     */
    public function index()
    {
        /**
         * @var Collection|ManModel[] $models
         */
        $models = ManModel::with('creator')->paginate(config('api.per_page_pagination'));
        if ($models->count() === 0) {
            return $this->apiError('found any', 'man');
        }
        return ManModelResource::collection($models);
    }

    /**
     * Store a new man.
     *
     * @param Request|ManModelRequest $request
     * @return Response|JsonResponse|ManModelResource
     */
    public function store(ManModelRequest $request)
    {
        /**
         * @var ManModel $model
         */
        if (! $model = ManModel::create($this->getRequestParams($request))) {
            return $this->apiError('create', 'man', 409);
        }
        return (new ManModelResource($model->load('creator')))->withStatus(201);
    }

    /**
     * Display a specified man.
     *
     * @param  int  $id
     * @return Response|JsonResponse|ManModelResource
     */
    public function show(int $id)
    {
        /**
         * @var ManModel $model
         */
        try {
            $model = ManModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'man', 404, $id);
        }
        return new ManModelResource($model->load('creator'));
    }

    /**
     * Update a specified man.
     *
     * @param Request|ManModelRequest $request
     * @param  int $id
     * @return Response|JsonResponse|ManModelResource
     */
    public function update(ManModelRequest $request, int $id)
    {
        /**
         * @var ManModel $model
         */
        try {
            $model = ManModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'man', 404, $id);
        }
        if (! $model->update($this->getRequestParams($request))) {
            return $this->apiError('update', 'man', 409, $id);
        }
        return (new ManModelResource($model->load('creator')))->withStatus(203);
    }

    /**
     * Remove a specified man.
     *
     * @param  int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(int $id) : JsonResponse
    {
        /**
         * @var ManModel $model
         */
        try {
            $model = ManModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'man', 404, $id);
        }
        if (! $model->delete()) {
            return $this->apiError('delete', 'man', 409, $id);
        }
        return $this->json([], 204);
    }

    /**
     * @return array
     */
    protected function getModelParams(): array
    {
        return [
            'first_name', 'last_name', 'height', 'waist',
            'shoe_size', 'hair', 'created_by'
        ];
    }

    /**
     * @return array
     */
    protected function getDefaultAttributes(): array
    {
        return ['sex' => 'H'];
    }
}
