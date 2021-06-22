<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User\DBUser;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users=DBUser::where([
            ['name','!=',Null],
            [function($query) use($request){
                if(($term = $request->term)){
                    $query->orWhere('name', 'LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->get();
        $title = 'Users';
        return view('base.index',['title'=>$title, 'users'=>$users,'categories'=>$this->getCategories()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create user';
        return view('base.create', ['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $user = DBUser::create($data);
        if (!$user) {

            return back();
        }
        return redirect()->route('user.index')->with('message', 'Пользователь успешно доавлен!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\DBUser  $dBUser
     * @return \Illuminate\Http\Response
     */
    public function show(DBUser $dBUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param DBUser $user
     * @return \Illuminate\Http\Response
     */
    public function edit(DBUser $user)
    {
        $title='edit';
        return view('base.edit',['title'=>$title,  'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param DBUser $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserCreateRequest $request, DBUser $user)
    {

        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        if ($user->save())
        {
            return redirect()->route('user.index')->with('message', 'Пользователь успешно обновлен!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DBUser $user
     * @return void
     */
    public function destroy(DBUser $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('message', 'Пользователь успешно удален!');
    }
}
