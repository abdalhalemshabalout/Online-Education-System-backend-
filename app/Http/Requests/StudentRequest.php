<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $teacherId = $this->get('id') ?? 0;
        return [
            'name'                  => 'required|sometimes',
            'surname'               => 'required|sometimes',
            'phone_number'          => 'required|sometimes|unique:App\Models\Student,phone_number,' . $teacherId,
            'email'                 => 'required|sometimes|email|unique:App\Models\Student,email,' . $teacherId,
            'password'              => 'required|sometimes|min:6|confirmed',
        ];
    }
}
