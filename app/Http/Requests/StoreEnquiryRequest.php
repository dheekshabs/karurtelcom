<?php

namespace App\Http\Requests;

use App\Models\Enquiry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEnquiryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('enquiry_create');
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'required',
            ],
            'email'         => [
                'required',
            ],
            'mobile_number' => [
                'string',
                'min:10',
                'max:10',
                'required',
            ],
            'address'       => [
                'required',
            ],
            'plan'          => [
                'string',
                'nullable',
            ],
        ];
    }
}
