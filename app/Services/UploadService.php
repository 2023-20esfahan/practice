<?php
/**
 * UserService.php
 */


namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\StorUserRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\URL;
use  Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class UploadService
{
    public function __construct(private readonly User $userQuery)
    {
    }

    /**
     * @return Collection|array
     */

    //  This function save the upload image into uploads directory in 5 sizes
    public function getImage($request): Collection|array
    {

        if ($request->file('image') == null) {
            $data = "";

        } else {
            $image = $request->file('image');
            //*****please make uploads directory in your public folder ******
            $destinationPath = public_path('/uploads');
            $imgFile = Image::make($image->getRealPath());


            $array = [100, 200, 300, 400, 500];

            $images = [];
            foreach ($array as $i) {
                $input['file'] = "$i-" . time() . '.' . $image->getClientOriginalExtension();
                $imgFile->resize($i, $i, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath . '/' . $input['file']);
                $input['file'] = "$i-" . time() . '.' . $image->getClientOriginalExtension();
                $url = URL::to('uploads/' . $input['file']);
                $images[] = $url;
            }
            $data = $images;
        }
        return $data;

    }
    // This function gives the related messages after creating :
    public function MessageafterCreating($directory, $messages){
    
try {
    $user->save();
    return redirect()->route($directory)->with('success', 'کاربر با موفقیت ایجاد شد');

} catch (Exception $exception) {
    $message = $exception->getMessage();
    return redirect()->route('users.index')->with('warning', $message);

}


}

    
}
