<?php

namespace Model\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param array $data
     * @param int $status
     * @return JsonResponse
     */
    public function json(array $data, int $status = 200) : JsonResponse
    {
        return response()->json($data, $status);
    }

    /**
     * @param string $verb
     * @param string $resource
     * @param int $statusCode
     * @param int|null $id
     * @return Response|JsonResponse
     */
    public function apiError(string $verb, string $resource, int $statusCode = 404, int $id = null)
    {
        if ($id === null) {
            return response()->json([
                'error' => sprintf('Could not %s %s', $verb, $resource)
            ], $statusCode);
        }
        return response()->json([
            'error' => sprintf('Could not %s %s with id %d', $verb, $resource, $id)
        ], $statusCode);
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function getRequestParams(Request $request): array
    {
        $params = $request->only($this->getModelParams());
        return array_merge($params, $this->getDefaultParams());
    }

    /**
     * @return array
     */
    protected function getDefaultAttributes(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getModelParams(): array
    {
        return [];
    }
}
