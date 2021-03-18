<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company_id' => 'required|integer',
            'department_id' => 'required|integer',
            'hardware_id' => 'required|array',
            'software_id' => 'required|array',

            'first_name' => 'required',
            'last_name' => 'required',
            'position' => 'required',
            'onboarding_date' => 'required',
            'supervisor' => 'required',
        ];
    }
}
