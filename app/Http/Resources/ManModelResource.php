<?php

namespace Model\Http\Resources;

use Model\Models\ManModel;
use Illuminate\Http\Resources\Json\Resource;

class ManModelResource extends Resource
{
    use StatusCodify;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request) : array
    {
        /**
         * @var ManModel $model
         */
        $model = $this->resource;
        $uri = config('app.url');
        $api = config('app.api_version');
        return [
            'id' => $model->id,
            'first_name' => $model->first_name,
            'last_name' => $model->last_name,
            'height' => $model->height,
            'waist' => $model->waist,
            'shoe_size' => $model->shoe_size,
            'hair' => $model->hair,
            'sex' => $model->sex,
            'created_at' => $model->created_at->format('Y-m-d H:i:s'),
            'created_diff' => $model->created_at->diffForHumans(),
            'links' => [
                'web_link' => "{$uri}/males/{$model->slug}",
                'api_link' => "{$uri}/api/{$api}/males/{$model->id}",
            ],
            $this->mergeWhen($model->created_by, [
                'creator' => [
                    'id' => $model->creator->id,
                    'display_name' => $model->creator->__toString(),
                    'web_link' => "{$uri}/males/{$model->id}",
                    'api_link' => "{$uri}/api/{$api}/males/{$model->id}",
                ]
            ])
        ];
    }
}
