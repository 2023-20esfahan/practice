<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rules\Password;
use  Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Admin.user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     *      * @return RedirectResponse
     */
    public function store(StorUserRequest $request, User $user)
    {
        $validated = $request->validated();

        if ($request->file('image') == null) {
            $data = "";

        } else {
            $image = $request->file('image');
            //*****please make uploads directory in your public folder ******
            $destinationPath = public_path('/uploads');
            $imgFile = Image::make($image->getRealPath());

            $array = ['thumbnail', 100, 200, 300, 400, 500];
            $images = [];

             $imgFile = Image::make($image->getRealPath());

            foreach ($array as $i) {
                if($i == 'thumbnail'){
                    $input['file'] = time() . '.' . $image->getClientOriginalExtension();
                    $imgFile = Image::make($image->getRealPath())->save($destinationPath . '/' . $input['file']);
                    $url = URL::to('uploads/' . $input['file']);
                  $images['thumbnail'] = $url;
                }
                else{
                $input['file'] = "$i-" . time() . '.' . $image->getClientOriginalExtension();
                $imgFile->resize($i, $i, function ($const) {
                    $const->aspectRatio();
                })->save($destinationPath . '/' . $input['file']);
                $input['file'] = "$i-" . time() . '.' . $image->getClientOriginalExtension();
                $url = URL::to('uploads/' . $input['file']);
                $images[] = $url;
            }}
        }
        $data = $images;

        $user = new User(['name' => $request->get('name'), 'email' => $request->get('email'),
            'password' => $request->get('password'), 'image' => $data, 'description'=> $request->get('editor')]);
        try {
            $user->save();
            return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ایجاد شد');

        } catch (Exception $exception) {
            $message = $exception->getMessage();
            return redirect()->route('users.index')->with('warning', $message);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return Application|Factory|View
     */
    public function show(Request $request, User $user): Application|Factory|View
    {
        return view('Admin.user.show')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(Request $request, User $user): View|Factory|Application
    {
        return view('Admin.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     *  \App\Http\Requests\UpdateUserRequest  $request
     *      * @param User $user
     * @return RedirectResponse
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $validated = $request->validated();
        try {
            $name = "";
            $email = "";
            $password = "";
            if (isset($request->name)) {
                if ($request->name === $user->name) {
                    $name = $user->name;
                } else {
                    $name = $request->name;
                }
            }

            if (isset($request->email)) {
                if ($request->email === $user->email) {
                    $email = $user->email;
                } else {
                    $email = $request->email;
                }
            }

            if (isset($request->password)) {
                if ($request->password === $user->password) {
                    $password = $user->password;
                } else {
                    $password = $request->password;
                }
            }
            $description = $request->editor;
            if($request->file('image') != ''){        
                $destinationPath = public_path().'/uploads';
            }
                //code for remove old file
                if($user->file != ''  && $user->file != null){
                     $file_old = $path.$user->file;
                     unlink($file_old);
                }
      
                //upload new file
        $file = $request->file('image');
                // $filename = $file->getClientOriginalName();
                // $file->move($path, $filename);
      
        $array = ['thumbnail', 100, 200, 300, 400, 500];
        $images = [];
        if($file != null){
            $imgFile = Image::make($file->getRealPath());
        
            foreach ($array as $i) {
                    if($i == 'thumbnail'){
                        $input['file'] = time() . '.' . $file->getClientOriginalExtension();
                        $imgFile = Image::make($file->getRealPath())->save($destinationPath . '/' . $input['file']);
                        $url = URL::to('uploads/' . $input['file']);
                      $images['thumbnail'] = $url;
                    }
                    else{
                    $input['file'] = "$i-" . time() . '.' . $file->getClientOriginalExtension();
                    $imgFile->resize($i, $i, function ($const) {
                        $const->aspectRatio();
                    })->save($destinationPath . '/' . $input['file']);
                    $input['file'] = "$i-" . time() . '.' . $image->getClientOriginalExtension();
                    $url = URL::to('uploads/' . $input['file']);
                    $images[] = $url;
                }
    
                //for update in table
           }}else{
            $images = $user->image;

           }
           $data = $images;
            $user->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'image' =>$data,
                'description' => $description,
            ]);

            return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ویرایش  شد');

        } catch (Exception $exception) {
            dd($exception->getMessage());
            return redirect()->route('users.edit')->with('warning', 'ویرایش اطلاعات موفقیت امیز نبود. دوباره سعی کنید   ');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(Request $request, User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت حذف شد');

    }
}
