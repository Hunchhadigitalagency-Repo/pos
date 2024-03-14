<?php

namespace App\Admin\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use OpenAdmin\Admin\Layout\Content;

class UserAdminController extends Controller
{


    function users(Content $content)
    {
        return $content
            ->title('User')
            ->description('List of users...')
            ->view('admin.users.index');
    }

    function create(Content $content)
    {
        return $content
            ->title('User')
            ->description('Create users...')
            ->view('admin.users.create');
    }

    function store(Content $content, Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();



        return redirect('/admin/users');
    }
}
