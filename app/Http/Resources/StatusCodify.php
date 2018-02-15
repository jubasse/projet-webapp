<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 25/09/2017
 * Time: 22:15
 */

namespace Model\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Trait StatusCodify
 * @package Model\Http\Resources
 */
trait StatusCodify
{
    /**
     * @param int $status
     * @return Response|JsonResponse
     */
    public function withStatus(int $status)
    {
        return $this->response()->setStatusCode($status);
    }
}
