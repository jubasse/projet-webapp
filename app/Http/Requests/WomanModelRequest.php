<?php

namespace Model\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WomanModelRequest extends FormRequest
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
        $capSizes = implode(',', config('enums.cap_sizes'));
        return [
            'first_name' => 'required|string|between:3,80',
            'last_name' => 'required|string|between:3,80',
            'height' => 'required|int|between:170,185',
            'waist' => 'required|int|between:50,70',
            'chest' => 'required|int|between:75,95',
            'cap_size' => "required|string|in:{$capSizes}",
            'hips' => 'required|int|between:75,100',
            'shoe_size' => 'required|int|between:34,40',
            'hair' => "required|string|in:{$hairColors}",
            'created_by' => 'sometimes|required|int|exists:users,id'
        ];
    }
}
