<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyReportRequest extends FormRequest
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
            'title' => 'bail|required|string|max:200',
            'category' => 'sometimes|array',
            'date' => 'required|date',
            'photo' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string|max:1000'
        ];
    }
}
