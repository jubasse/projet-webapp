<?php

namespace Model\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Model\Models\WomanModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Model\Http\Controllers\Controller;
use Model\Http\Requests\WomanModelRequest;
use Model\Http\Resources\WomanModelResource;

/**
 * Class WomanModelController
 * @package Model\Http\Controllers\Api
 * @resource Women
 */
class WomanModelController extends Controller
{
    /**
     * Display a listing of womens.
     *
     * @return Response|JsonResponse|WomanModelResource|mixed
     */
    public function index()
    {
        /**
         * @var WomanModel[]|Collection $models
         */
        $models = WomanModel::with('creator')->paginate(config('api.per_page_pagination'));
        if (0 === $models->count()) {
            return $this->apiError('found any', 'woman');
        }
        return WomanModelResource::collection($models);
    }

    /**
     * Store a new women.
     *
     * @param Request|WomanModelRequest $request
     * @return Response|JsonResponse|WomanModelResource
     */
    public function store(WomanModelRequest $request)
    {
        /**
         * @var WomanModel $model
         */
        if (! $model = WomanModel::create($this->getRequestParams($request))) {
            return $this->apiError('create', 'woman', 409);
        }
        return (new WomanModelResource($model->load('creator')))->withStatus(201);
    }

    /**
     * Display a specified women.
     *
     * @param  int  $id
     * @return Response|JsonResponse|WomanModelResource
     */
    public function show(int $id)
    {
        /**
         * @var WomanModel $model
         */
        try {
            $model = WomanModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'woman', 404, $id);
        }
        return new WomanModelResource($model->load('creator'));
    }

    /**
     * Update a specified women.
     *
     * @param Request|WomanModelRequest $request
     * @param  int $id
     * @return Response|JsonResponse|WomanModelResource
     */
    public function update(WomanModelRequest $request, int $id)
    {
        /**
         * @var WomanModel $model
         */
        try {
            $model = WomanModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'woman', 404, $id);
        }
        if (! $model->update($this->getRequestParams($request))) {
            return $this->apiError('update', 'model', 409, $id);
        }
        return (new WomanModelResource($model->load('author')))->withStatus(203);
    }

    /**
     * Remove a specified women.
     *
     * @param  int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(int $id) : JsonResponse
    {
        /**
         * @var WomanModel $model
         */
        try {
            $model = WomanModel::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'woman', 404, $id);
        }
        if (! $model->delete()) {
            return $this->apiError('delete', 'woman', 409, $id);
        }
        return $this->json([], 204);
    }
    /**
     * @return array
     */
    protected function getModelParams(): array
    {
        return [
            'first_name', 'last_name', 'height', 'waist', 'chest',
            'cap_size', 'hips', 'shoe_size', 'hair', 'created_by'
        ];
    }

    /**
     * @return array
     */
    protected function getDefaultAttributes(): array
    {
        return ['sex' => 'F'];
    }
}
