<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name_en' => 'required|string|max:255',
            'desc_en' => 'required|string',
            // 'status' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'يرجى إدخال اسم القسم',
            'name_en.string' => 'يجب إدخال اسم القسم بشكل صحيح',
            'name_en.max' => 'اسم القسم يجب ألا يتجاوز 255 حرفًا',

            'desc_en.required' => 'يجب إدخال وصف القسم بشكل صحيح',
            'desc_en.string' => 'يجب إدخال وصف القسم بشكل صحيح',

            // 'image.image' => 'يرجى تحميل صورة صالحة',
            // 'image.mimes' => 'صيغة الصورة غير صالحة، يجب أن تكون بإحدى الصيغ التالية: jpg, jpeg, png, gif',
            // 'image.max' => 'يجب ألا يتجاوز حجم الصورة 2 ميجابايت',

            'status.required' => 'يرجى تحديد حالة القسم',
            'status.in' => 'حالة القسم يجب أن تكون إما 0 أو 1',
        ];
    }
}