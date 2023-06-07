<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            "name" => "required|min:3|max:12",
            "email" => "required",
            "country" => "required",
            "password"=>"required|min:7|max:15"
           
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
            "name.required" => "حقل الاسم مطلوب.",
            "name.min" => "حقل الاسم يجب أن يحتوي على الاقل من 3 أحرف.",
            "name.max" => "حقل الاسم يجب أن يحتوي على الاكثر من 12 حرفًا.",
            "email.required" => "حقل البريد الإلكتروني مطلوب.",
            "country.required" => "حقل البلد مطلوب.",
            "password.required" => "حقل كلمة المرور مطلوب.",
            "password.min" => "حقل كلمة المرور يجب أن يحتوي على الاقل من 7 أحرف.",
            "password.max" => "حقل كلمة المرور يجب أن يحتوي على الاكثر من 15 حرفًا."
            
        ];
    }
}
