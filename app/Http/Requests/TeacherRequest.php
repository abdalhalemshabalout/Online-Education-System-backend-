<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class TeacherRequest extends FormRequest
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
            'phone_number'          => 'required|sometimes|unique:App\Models\Teacher,phone_number,' . $teacherId,
            'email'                 => 'required|sometimes|email|unique:App\Models\Teacher,email,' . $teacherId,
            'password'              => 'required|sometimes|min:6|confirmed',
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
            'name.required'         => 'Name field is required.',
            'surname.required'      => 'Surname field is required.',
            'phone_number.required' => 'Telefon numarası field is required.',
            'phone_number.unique'   => 'The phone number you entered is registered in the system..',
            'email.required'        => 'E-Posta field is required.',
            'email.unique'          => 'The e-mail address you entered is registered in the system..',
            'password.required'     => 'Şifre field is required.',
            'password.min'          => 'Password field must be at least 6 characters.',
            'password.confirmed'    => 'Passwords do not match.',

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
