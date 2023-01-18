<?php
/**
 * CommodityStoreRequest.php
 * @author abbass <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from PhpStorm
 * @version 1.0.0
 * @date 2022/11/28 21:43
 */
namespace App\Http\Requests\Commodity;

use Illuminate\Foundation\Http\FormRequest;

class CommodityStoreRequest extends FormRequest
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
            "name" => "required|unique:commodities"
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'وارد کردن نام محصول اجباری میباشد',
            'name.unique' => 'کالا وارد شده تکراری میباشد',
        ];
    }
}
