<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\UserTrait;
use App\Models\UserDetail;

class UserController extends Controller
{
    use UserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::get();
        return view('admin.users.list',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mobile' => ['required', 'string', 'max:10','min:10', 'unique:users,mobile,'],
            'is_active' => ['required'],
        ]);

        $user = new User();
        $user->name = request('name');
        $user->mobile = request('mobile');
        $user->is_active = request('is_active');
        $user->is_account_created = 1;
        $user->save();

        $this->saveOTP($user->mobile);
        return redirect()->route('admin.users.index')->with('success','Users Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $request->validate([
            'is_active' => ['required'],
        ]);
        $user->is_active = request('is_active');
        $user->save();
        return redirect()->route('admin.users.edit',$user->id)->with('success','User Detail Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus(User $user)
    {
      if($user->is_active ==1){
        User::where('id',$user->id)->update(['is_active' => 0]);
      }else{
        User::where('id',$user->id)->update(['is_active' => 1]);
      }
      return redirect()->route('admin.users.index')->with('success','Status Updated Successfully');
    }

    public function personalInformationUpdate(User $user,Request $request)
    {
        $path = null;
        if($request->file('avatar')){
            $file = $request->file('avatar');
            $file_arr = $this->upload_file($file,'profiles');
            $path = $file_arr['db_path'];
        }

        $datas = [
            'gender' => request('gender'),
            'avatar' => $path,
            'address_line_1' => request('address_line_1'),
            'address_line_2' => request('address_line_2'),
            'postcode' => request('postcode'),
        ];
        UserDetail::updateOrCreate(['user_id' => $user->id],$datas);
        return redirect()->route('admin.users.index')->with('success','User Details Updated Successfully');
    }
}
