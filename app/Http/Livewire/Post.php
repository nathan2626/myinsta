<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Post extends Component
{
    public $post;

//    public $name = "Clem";

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        $postsForDisplayGreen = DB::table('posts')->get();
        $countPosts = count($postsForDisplayGreen);

        return view('livewire.post', compact('countPosts'));
    }
}
