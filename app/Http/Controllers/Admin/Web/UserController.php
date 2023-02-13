<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
use App\Services\UploadService;
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

    public function __construct(protected UserService $userService, protected UploadService $uploadService)
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $users = $this->userService->getUsers();
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
    public function store(StorUserRequest $request, UserService $userService, UploadService $uploadService)
    {
        $validated = $request->validated();

        $directory = 'users.index';
        $messages = 'کاربر با موفقیت ایجاد شد';    
        $images = $this->uploadService->getImage($request);

        $user = new UserService(['name' => $request->get('name'), 'email' => $request->get('email'),
        'password' => $request->get('password'), 'image' => $images]);
        $this->uploadService->MessageafterCreating($directory, $messages);

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return Application|Factory|View
     */
    public function show(Request $request, UserService $userService): Application|Factory|View
    {
        return view('Admin.user.show')->with('user', $userService);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(Request $request, UserService $userService): View|Factory|Application
    {
        return view('Admin.user.edit')->with('user', $userService);
    }

    /**
     * Update the specified resource in storage.
     *
     *  \App\Http\Requests\UpdateUserRequest  $request
     *      * @param User $user
     * @return RedirectResponse
     * @return RedirectResponse
     */
    public function update(UpdateUserRequest $request, UserService $userService): RedirectResponse
    {
        $validated = $request->validated();
        try {
            $userService->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);

            return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ویرایش  شد');

        } catch (Exception $exception) {
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
