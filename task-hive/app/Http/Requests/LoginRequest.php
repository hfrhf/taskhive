<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "email" => "required|email",
            "passwird"=>"required|min:7|max:20", 

            
        ];
    }
    
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            "email.email"=>"عنوان بريد الكتروني غير صحيح",
            "password.required" => "حقل كلمة المرور مطلوب.",
            "password.min" => " كلمة المرور يجب أن تحتوي على الاقل من 7 أحرف.",
            "password.max" => " كلمة المرور يجب أن تحتوي على الاكثر من 20 حرفًا."

            
        ];
    }
}
