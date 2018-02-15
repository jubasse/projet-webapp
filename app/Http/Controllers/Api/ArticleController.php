<?php

namespace Model\Http\Controllers\Api;

use Exception;
use Model\Models\Article;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Model\Http\Controllers\Controller;
use Model\Http\Requests\ArticleRequest;
use Model\Http\Resources\ArticleResource;

/**
 * Class ArticleController
 * @package Model\Http\Controllers\Api
 * @resource Articles
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of articles.
     *
     * @return Response|JsonResponse
     */
    public function index()
    {
        /**
         * @var Article[]|Collection $articles
         */
        $articles = Article::with('author', 'publisher')->latest()
            ->paginate(config('api.per_page_pagination'))
        ;
        if (0 === $articles->count()) {
            return $this->apiError('find any', 'articles');
        }
        return ArticleResource::collection($articles);
    }

    /**
     * Store a new article.
     *
     * @param ArticleRequest $request
     * @return JsonResponse|Response
     */
    public function store(ArticleRequest $request)
    {
        if (! $article = Article::create($request->all())) {
            $this->apiError('create', 'article');
        }
        if ($article->published) {
            $article->load('publisher');
        }
        return (new ArticleResource($article->load('author')))->withStatus(201);
    }

    /**
     * Display a specified article.
     *
     * @param  int  $id
     * @return Response|JsonResponse|ArticleResource
     */
    public function show(int $id)
    {
        /**
         * @var Article $article
         */
        try {
            $article = Article::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'article', 404, $id);
        }
        if ($article->published) {
            $article->load('publisher');
        }
        return new ArticleResource($article->load('author'));
    }

    /**
     * Update a specified article.
     *
     * @param  ArticleRequest  $request
     * @param  int  $id
     * @return Response|JsonResponse
     */
    public function update(ArticleRequest $request, int $id)
    {
        /**
         * @var Article $article
         */
        try {
            $article = Article::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'article', 404, $id);
        }
        if (!$article->update($request->all())) {
            return $this->apiError('update', 'article', 409, $id);
        }
        if ($article->published) {
            $article->load('publisher');
        }
        return (new ArticleResource($article))->withStatus(202);
    }

    /**
     * Remove a specified article.
     *
     * @param  int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(int $id) : JsonResponse
    {
        /**
         * @var Article $article
         */
        try {
            $article = Article::findOrFail($id);
        } catch (Exception $e) {
            return $this->apiError('find', 'article', 404, $id);
        }
        if (! $article->delete()) {
            return $this->apiError('trash', 'article', 409, $id);
        }
        return $this->json(['success' => 'Article deleted'], 204);
    }
}
