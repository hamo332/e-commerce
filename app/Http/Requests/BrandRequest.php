<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            // 'image' => 'required|image|max:2048',
            
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'desc_en' => 'required|string|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'حقل الاسم مطلوب',
            'name_en.string' => 'حقل الاسم يجب أن يكون نص',
            'name_en.max' => 'حقل الاسم يجب ألا يتجاوز 255 حرفًا',
            
            // 'image.required' => 'حقل اللوجو مطلوب',
            // 'image.image' => 'حقل اللوجو يجب أن يكون صورة',
            // 'image.max' => 'حقل اللوجو يجب أن يكون حجم الصورة أقل من 2048 كيلوبايت',

            'image.image' => 'يرجى تحميل صورة صالحة',
            'image.mimes' => 'صيغة الصورة غير صالحة، يجب أن تكون بإحدى الصيغ التالية: jpg, jpeg, png, gif',
            'image.max' => 'يجب ألا يتجاوز حجم الصورة 2 ميجابايت',

            'desc_en.required' => 'حقل الوصف مطلوب',
            'desc_en.string' => 'حقل الوصف يجب أن يكون نص',
            'desc_en.max' => 'حقل الوصف يجب ألا يتجاوز 500 حرفًا',
        ];
    }




}
