<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            "task" => "required|min:3|max:15",
            "des" => "required|max:500",
            "day" => "required",
            'status' => 'nullable', // جعل الحقل غير إجباري باستخدام "nullable"
            'file' => 'nullable|max:30720', // جعل الحقل غير إجباري باستخدام "nullable"
            
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
            "task.required" => "حقل المهمة مطلوب.",
            "task.min" => "حقل المهمة يجب أن يحتوي على الأقل 3 أحرف.",
            "task.max" => "حقل المهمة يجب أن يحتوي على الأكثر 15 حرفًا.",
            "des.required" => "حقل الوصف مطلوب.",
            "day.required" => "حقل اليوم مطلوب.",
            "day.required" => "حقل المهمة مطلوب.",
            "des.required" => "حقل المهمة مطلوب.",
            "des.max" => "حقل المهمة يجب أن يحتوي على الأكثر 500 حرفًا.",
            "file.max"=>"الحد الاقصى لحجم الملف 30mb",
            
        ];
    }
}
