<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\UserService;
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

    public function __construct(protected UserService $userService)
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
    public function store(StorUserRequest $request, User $user)
    {
        //همه اینا باید ببری تو سرویس میخام یجوری اینجارو تمیز کنی ک کیف کنم یعنی چی ینی درهم برهم کد نزنی هر چیزی رو درست با کامنت قشنگ مشخص کن
        //مثلا برای این قسمت باید ی فانکشنی داشته باشی ک بهش فایل بدی فقط بیاد آپلود برات انجام بده اصول سالید رعایت کن ینی هر متد باید یک کار رو انجام بدن من تو این قسمت کامنت کلی گذاشتم استارت بزن سوال داشتی بپرس حتما

        $validated = $request->validated();

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

        $user = new User(['name' => $request->get('name'), 'email' => $request->get('email'),
            'password' => $request->get('password'), 'image' => $data]);
        try {
            $user->save();
            return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ایجاد شد');

        } catch (Exception $exception) {
            return redirect()->route('users.index')->with('warning', 'ذخیره اطلاعات موفقیت امیز نبود. دوباره سعی کنید   ');

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
            $user->update([
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
