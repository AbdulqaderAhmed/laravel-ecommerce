<?php

namespace App\Http\Controllers;

use App\Events\UserEvent;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test()
    {
        $user = User::findorfail(1);
        event(new UserEvent($user));

        // return '123';
    }
}
