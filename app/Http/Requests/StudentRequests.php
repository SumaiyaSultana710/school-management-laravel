<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequests extends FormRequest
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
            'mothername' => 'required|regex:/^[a-zA-Z\s\.]*$/',
            'fathername' => 'required|regex:/^[a-zA-Z\s\.]*$/',
            'phone'      => 'required | numeric | digits:11 | starts_with:013,014,015,016,017,018,019',
            'address'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Field is required',
            'name.regex' => 'Name must be Letters(can use space and dot)',
            'password.required' => 'Field is required',
            'fathername.required' => 'Field is required',
            'fathername.regex' => 'Name must be Letters(can use space and dot)',
            'mothername.required' => 'Field is required',
            'mothername.regex' => 'Name must be Letters(can use space and dot)',
            'phone.required' => 'Field is required',
            'phone.starts_with' => 'Must be starts with 013/014/015/016/017/018/019',
            'address.required' => 'Field is required',

        ];
    }
}
