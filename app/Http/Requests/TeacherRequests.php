<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequests extends FormRequest
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
            'name'       => 'required|regex:/^[a-zA-Z\s\.]*$/',
            'password'   => 'required',
            'email'      => 'required',
            'qualification' => 'required',
            'phone'      => 'required | numeric | digits:11 | starts_with:013,014,015,016,017,018,019',
            'address'    => 'required'
        ];
    }

    public function messages()
    {
        return [
        ];
    }
}
