<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\User;

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
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        

      $messages = ['name.required'=> 'وارد کردن نام کاربری الزامی است',
      'name.max'=>'حداکثر 50 کلمه مجاز است',
      'email.required'=>'وارد کردن ایمیل ضروری است',
      'password.required'=>'وارد کردن پسورد ضروری است',
      'password.letters'=>'پسورد باید شامل حروف باشد',
      'password.mixed'=>'پسورد باید شامل حروف کوچک و بزرگ باشد',
      'password.numbers'=>'پسورد باید شامل عداد باشد',
      'password.symbols'=>'پسورد باید شامل نمادهای خاص',

      ] ;  

        $validated = $request->validate([
            'name' => 'required|unique:users|max:50',
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
            ]
            

        ], $messages);
   
      $user = new User(['name'=>$request->get('name'),'email'=>$request->get('email'), 'password'=>$request->get('password')]);
    try{
      $user->save();
      return redirect()->route('users.index')->with('success','کاربر با موفقیت ایجاد شد');

    }catch(Exception $exception){
        return redirect()->route('users.index')->with('warning','ذخیره اطلاعات موفقیت امیز نبود. دوباره سعی کنید   ');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        return view('admin.user.show')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('admin.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $messages = ['name.required'=> 'وارد کردن نام کاربری الزامی است',
        'name.max'=>'حداکثر 50 کلمه مجاز است',
        'email.required'=>'وارد کردن ایمیل ضروری است',
        'password.required'=>'وارد کردن پسورد ضروری است',
        'password.letters'=>'پسورد باید شامل حروف باشد',
        'password.mixed'=>'پسورد باید شامل حروف کوچک و بزرگ باشد',
        'password.numbers'=>'پسورد باید شامل عداد باشد',
        'password.symbols'=>'پسورد باید شامل نمادهای خاص',
  
        ];  
  
          $validated = $request->validate([
              'name' => 'required|unique:users|max:50',
              'email' => ['required', 'email:rfc,dns'],
              'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
              ]
              
  
          ], $messages);
          $user->name = $request->get('name');
          $user->email = $request->get('email');
          $user->password = $request->get('password');
     
      try{

        return redirect()->route('users.index')->with('success','کاربر با موفقیت ویرایش  شد');
  
      }catch(Exception $exception){
          return redirect()->route('users.edit')->with('warning','ویرایش اطلاعات موفقیت امیز نبود. دوباره سعی کنید   ');
  
      }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','کاربر با موفقیت حذف شد');

    }
}
