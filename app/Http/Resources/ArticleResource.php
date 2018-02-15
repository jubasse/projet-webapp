<?php

namespace Model\Http\Resources;

use Model\Models\Article;
use Illuminate\Http\Resources\Json\Resource;

/**
 * Class ArticleResource
 * @package Model\Http\Resources
 */
class ArticleResource extends Resource
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
         * @var Article $article
         */
        $article = $this->resource;
        $p = $article->published;
        $uri = env('APP_URL');
        $api = env('API_VERSION', 'v1');
        return [
            'id' => $article->id,
            'title' => $article->title,
            'slug' => $article->slug,
            'content' => $article->content,
            'published' => $p,
            'dates' => [
                $this->mergeWhen($p, [
                    'published_at' => $p ? $article->published_at->format('Y-m-d H:i:s') : null,
                    'published_diff' => $p ? $article->published_at->diffForHumans() : null,
                ]),
                'created_at' => $article->created_at->format('Y-m-d H:i:s'),
                'created_diff' => $article->created_at->diffForHumans(),
                'updated_at' => $article->updated_at->format('Y-m-d H:i:s'),
                'updated_diff' => $article->updated_at->diffForHumans(),
            ],
            'links' => [
                'web_link' => "{$uri}/articles/{$article->slug}",
                'api_link' => "{$uri}/api/{$api}/articles/{$article->id}",
            ],
            'author' => [
                'id' => $article->author->id,
                'name' => $article->author->__toString(),
                'web_link' => "{$uri}/users/{$article->author->id}",
                'api_link' => "{$uri}/api/{$api}/users/{$article->author->id}"
            ],
            $this->mergeWhen($p, [
                'publisher' => [
                    'id' => $p ? $article->publisher->id : null,
                    'name' => $p ? $article->publisher->__toString() : null,
                    'web_link' => $p ? "{$uri}/users/{$article->publisher->id}" : null,
                    'api_link' => $p ? "{$uri}/api/{$api}/users/{$article->publisher->id}" : null,
                ]
            ])
        ];
    }
}
