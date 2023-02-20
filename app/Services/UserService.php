<?php
/**
 * UserService.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from practice
 * @version 1.0.0
 * @date 2022/12/04 18:56
 */


namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Services\UploadService;

class UserService
{
    public function __construct(protected readonly User $userQuery, protected UploadService $uploadService)
    {
    }
    /**
     * @return Collection|array
     */
    public function getUsers(): Collection|array
    {
        return $this->userQuery->query()->get();
    }
    public function store($request)
    {
        $validated = $request->validated();
       $directory = 'users.index';
       $messages = 'user is created';    
       $images = $this->uploadService->getImage($request);
       $user = new User(['name' => $request->get('name'), 'email' => $request->get('email'),
       'password' => $request->get('password'), 'image' => $images]);
       try {
        $user->save();
        return redirect()->route($directory)->with('success', $messages);
    
    } catch (Exception $exception) {
        $message = $exception->getMessage();
        return redirect()->route('users.index')->with('warning', $message);
    
    }
    
    
    } 
    public function user_count($users){
        return $users->count();
    }


    public function get_user($user){

        return $this->userQuery::findOrFail($user->id);    
    }
}
