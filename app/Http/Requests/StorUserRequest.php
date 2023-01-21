<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Validation\Rule;

class StorUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        // if($this->user)
        // {
        //     $id = $this->user->id;
        // }
        return [
            
            'name' => ['required','max:50', Rule::unique('users')],
            'email' => ['required'],
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols(),]

            
        ];
    }

/**
 * Configure the validator instance.
 *
 * @param  \Illuminate\Validation\Validator  $validator
 * @return void
 */
// public function withValidator($validator)
// {
//     $validator->after(function ($validator) {
//         if ($this->somethingElseIsInvalid()) {
//             $validator->errors()->add('field', 'خطا دارد{{field}}');
//         }
//     });
// }
/**
 * Indicates if the validator should stop on the first rule failure.
 *
 * @var bool
 */
protected $stopOnFirstFailure = true;

/**
 * The URI that users should be redirected to if validation fails.
 *
 * @var string
 */
// protected $redirectRoute = 'users.create';  

/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'name.required' => 'وارد کردن نام کاربری الزامی است',
        'name.max' => 'حداکثر 50 کلمه مجاز است',
        'email.required' => 'وارد کردن ایمیل ضروری است',
        'password.required' => 'وارد کردن پسورد ضروری است',
        'password.letters' => 'پسورد باید شامل حروف باشد',
        'password.mixed' => 'پسورد باید شامل حروف کوچک و بزرگ باشد',
        'password.numbers' => 'پسورد باید شامل عداد باشد',
        'password.symbols' => 'پسورد باید شامل نمادهای خاص',
];
}
}
