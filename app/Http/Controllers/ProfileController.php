<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Auth;

use App\Models\User;
use App\Models\Dapil;

class ProfileController extends Controller
{
    public function index()
    {
        $data['user'] = User::findOrFail(Auth::guard('user')->user()->id);
        $data['dapil'] = Dapil::all();

        return view('profile.index', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = [
            'name'=>'required',
            'email'=> 'required',
            'dapil' => 'required'
        ];

        if($request->password != null) {
            $validatedData['password'] = 'min:6|required_with:password_confirmation|same:password_confirmation';
            $validatedData['password_confirmation'] = 'min:6';

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
        } else {
            $input = $request->except(['password']);
        }

        $this->validate($request, $validatedData);

        
        $user = User::findOrFail($id);
        $user->update($input);


        return redirect('/profile')->with('success', 'Profile updated!');
    }

    
}
