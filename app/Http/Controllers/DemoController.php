<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;


class DemoController extends Controller
{
    function DemoAction()
    {
        //One to one Relation //data go from child
        // return User::('profile')->get(); 
        // return User::with('profile')->get(); 

         //Inverse Relationship //Data go from child to parent
        // return Profile::with('user')->get(); 


        // One to Many Relationship
        // return User::with('post')->get(); 

        // One to Many Relationship Reverse
        // return Post::with('user')->get();  

        // Many to Many Relationship
        // return Post::with('tag')->get();

        // Many to Many Relationship Reverse
        // return Tag::with('post')->get();


    }
}
