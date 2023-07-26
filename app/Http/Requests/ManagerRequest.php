<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ManagerRequest extends FormRequest
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
        $managerId = $this->get('id') ?? 0;
        return [
            'name'                  => 'required|sometimes',
            'surname'               => 'required|sometimes',
            'phone_number'          => 'required|sometimes|unique:App\Models\Manager,phone_number,' . $managerId,
            'email'                 => 'required|sometimes|email|unique:App\Models\Manager,email,' . $managerId,
            'password'              => 'required|sometimes|min:6|confirmed',
            'identity_number'       => 'required|sometimes|',
            'gender'                => 'required|sometimes|',
        ];      

    }
    /**
     * Validation's error messages.
     *
     * @var array<int, string>
     */
    public function messages(): array
    {
        return [
            'name.required'              => 'Name field is required.',
            'surname.required'           => 'Surname field is required.',
            'phone_number.required'      => 'Telefon numarası field is required.',
            'phone_number.unique'        => 'The phone number you entered is registered in the system..',
            'email.required'             => 'E-Posta field is required.',
            'email.unique'               => 'The e-mail address you entered is registered in the system..',
            'password.required'          => 'Şifre field is required.',
            'password.min'               => 'Password field must be at least 6 characters.',
            'password.confirmed'         => 'Passwords do not match.',
            'identity_number.required'   => 'identity_number field is required..',
            'gender.required'            => 'gender field is required..',
        ];
    }

     /**
     * If request has password, hash it before sending.
     *
     * @return void
     */
    protected function passedValidation(): void
    {
        if ($this->request->has("password")) {
            $password = $this->request->get("password");
            $this->request->set("password", Hash::make($password));
        }
    }
}
