<?php

namespace Model\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManModelRequest extends FormRequest
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
        $hairColors = implode(',', config('enums.hair_colors'));
        return [
            'first_name' => 'required|string|between:3,80',
            'last_name' => 'required|string|between:3,80',
            'height' => 'required|int|between:180,195',
            'waist' => 'required|int|between:75,95',
            'shoe_size' => 'required|int|between:42,50',
            'hair' => "required|string|in:{$hairColors}",
            'sex' => 'required|string|in:H',
            'created_by' => 'sometimes|int|exists:users,id'
        ];
    }
}
