<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        return new PostCollection($user->posts);
    }
}
