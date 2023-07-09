<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image|max:2048',
            'address' => 'required|string|max:255',
            'postcode' => 'required|integer',
            // 'gender' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'يجب تحديد الاسم',
            'name.string' => 'يجب أن يكون الاسم نص',
            'name.max' => 'يجب أن يكون الاسم لا يتجاوز 255 حرفًا',
            'email.required' => 'يجب تحديد البريد الإلكتروني',
            'email.string' => 'يجب أن يكون البريد الإلكتروني نص',
            'email.email' => 'يجب أن يكون البريد الإلكتروني صالح',
            'email.max' => 'يجب أن يكون البريد الإلكتروني لا يتجاوز 255 حرفًا',
            'email.unique' => 'البريد الإلكتروني مستخدم من قبل',
            'password.required' => 'يجب تحديد كلمة المرور',
            'password.string' => 'يجب أن تكون كلمة المرور نص',
            'password.min' => 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
            'password.confirmed' => 'يجب أن تكون تأكيد كلمة المرور متطابقة',
            'phone.required' => 'يجب تحديد رقم الهاتف',
            'phone.string' => 'يجب أن يكون الهاتف نص',
            'phone.max' => 'يجب أن لا يتجاوز الهاتف 20 حرفًا',
            'image.image' => 'يجب أن يكون الملف ملف صورة',
            'image.max' => 'يجب أن يكون حجم الملف أقل من 2 ميجابايت',
            'address.required' => 'يجب تحديد العنوان',
            'address.string' => 'يجب أن يكون العنوان نص',
            'address.max' => 'يجب أن يكون العنوان لا يتجاوز 255 حرفًا',
            'postcode.required' => 'يجب تحديد post code',
            'postcode.integer' => 'يجب أن يكون الرمز البريدي عددًا صحيحً',
            // 'gender.required' => 'يجب تحديد الاسم',
            // 'gender.string' => 'يجب أن يكون الاسم نص',
            // 'gender.max' => 'يجب أن يكون الاسم لا يتجاوز 255 حرفًا',
        ];
    }
}
