<?php

namespace App\Http\Requests\Remittance;

use Illuminate\Foundation\Http\FormRequest;

class RemittanceStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            "commodity_id" => "required"
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'commodity_id.required' => 'انتخاب نام کالا اجباری میباشد',
        ];
    }
}
