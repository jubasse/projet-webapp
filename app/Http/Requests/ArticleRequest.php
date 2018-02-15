<?php

namespace Model\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'title' => 'required|string|between:6,120',
            'published' => 'required|boolean',
            'published_at' => 'sometimes|required|date',
            'published_by' => 'sometimes|required|int|exists:users,id',
            'author_id' => 'required|int|exists:users,id',
            'content' => 'required|string|min:1'
        ];
    }
}
