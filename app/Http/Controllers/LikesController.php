<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

class LikesController extends Controller
{
    public function addLike($video)
    {
        $like = Likes::find($video);
        $like->increment('likes');
        return redirect('/home');
    }

}
