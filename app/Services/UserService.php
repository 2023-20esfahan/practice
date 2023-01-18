<?php
/**
 * UserController.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from pakdaman
 * @version 1.0.0
 * @date 2022/12/04 18:56
 */


namespace App\Services;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function __construct(private readonly User $userQuery)
    {
    }

    /**
     * @param array $attributes
     * @return JsonResponse|array
     */
    public function registerUser(array $attributes): JsonResponse|array
    {
        $attributes['password'] = bcrypt($attributes['password']);
        $check = $this->checkUser($attributes['email']);
        if ($check) {
            return response()->json([
                'message' => "User Exist!!",
                'error' => true
            ]);
        }else{
            $user = $this->userQuery->query()->create($attributes);
            $data['token'] = $user->createToken('MyApp')->plainTextToken;
            $data['name'] = $user->name;
            $data['message'] = "User Register SuccessFully!";
            return $data;
        }

    }

    /**
     * @param $email
     * @return bool
     */
    public function checkUser($email): bool
    {
        return $this->userQuery->query()->where('email', $email)->exists();

    }

    public function login(array $attributes)
    {
        if(Auth::attempt(['email' => $attributes['email'], 'password' => $attributes['password']])){
            $user = Auth::user();
            $data['token'] =  $user->createToken('MyApp')->plainTextToken;
            $data['name'] =  $user->name;

            return response()->json([
                'message' => "Login SuccessFully!!",
                'data' => $data
            ]);
        }
        else{
            return response()->json([
                'message' => "Unauthorised",
                'error' => true
            ]);
        }
    }
}
