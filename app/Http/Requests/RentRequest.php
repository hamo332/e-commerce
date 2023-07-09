<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentRequest extends FormRequest
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
            'name_en' => 'required|string|max:255',
            'disc' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            // 'product_number' => 'required|string|max:255',
            'created_by' => 'nullable|string|max:255',
            'updated_by' => 'nullable|string|max:255',
            // 'status' => 'required|boolean',
            'processes' => 'required|in:accepted,disabled,processed,Cancelled',
            'purpose' => 'required|in:sale,buy',
            'price' => 'required|string|max:255',
            'timeframe' => 'required|string|in:hour,day,week,month,year',
            'discount' => 'nullable|string|max:255',
            'creator' => 'required|in:admin,user',
            'section_id' => 'nullable|integer',
            'brand_id' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'name_en.required' => 'The name field is required.',
            'name_en.string' => 'The name field must be a string.',
            'name_en.max' => 'The name field may not be greater than :max characters.',
            'disc_en.string' => 'The description field must be a string.',
            'image.required' => 'The image field is required.',
            'image.image' => 'The image field must be an image file.',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png, gif.',
            'image.max' => 'The image may not be greater than :max kilobytes.',
            'gallery.*.image' => 'Each item in the gallery must be an image file.',
            'gallery.*.mimes' => 'Each item in the gallery must be a file of type: jpg, jpeg, png, gif.',
            'gallery.*.max' => 'Each item in the gallery may not be greater than :max kilobytes.',
            'product_number.required' => 'The product number field is required.',
            'product_number.string' => 'The product number field must be a string.',
            'product_number.max' => 'The product number may not be greater than :max characters.',
            'created_by.string' => 'The created by field must be a string.',
            'created_by.max' => 'The created by field may not be greater than :max characters.',
            'updated_by.string' => 'The updated by field must be a string.',
            'updated_by.max' => 'The updated by field may not be greater than :max characters.',
            'status.required' => 'The status field is required.',
            'status.boolean' => 'The status field must be a boolean.',
            'processes.required' => 'The process field is required.',
            'processes.in' => 'The selected process is invalid.',
            'purpose.required' => 'The purpose field is required.',
            'purpose.in' => 'The selected purpose is invalid.',
            'price.required' => 'The price field is required.',
            'price.string' => 'The price field must be a string.',
            'price.max' => 'The price may not be greater than :max characters.',
            'timeframe.required' => 'يرجى إدخال قيمة لحقل المدة.',
            'timeframe.string' => 'قيمة حقل المدة يجب أن تكون نصية.',
            'timeframe.in' => 'يجب أن تكون قيمة حقل المدة hour أو day أو week أو month أو year.',
            'discount.string' => 'The discount field must be a string.',
            'discount.max' => 'The discount may not be greater than :max characters.',
            'creator.required' => 'The creator field is required.',
            'creator.in' => 'The selected creator is invalid.',
            'section_id.integer' => 'The section id field must be an integer.',
            'brand_id.integer' => 'The brand id field must be an integer.',
        ];
    }
}
