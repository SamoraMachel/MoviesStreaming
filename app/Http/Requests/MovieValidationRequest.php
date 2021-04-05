<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'releaseYear' => 'required|numeric|max:2021|min:1900',
            'runningTime' => 'required|numeric',
            'category' => 'required|boolean',
            'quality' => 'required|boolean',
            'age' => 'required|min:10|max:100',
            'coverPic' => 'required|string',
            'video' => 'required|string',
            'rating' => 'required|numeric'
        ];
    }
}
