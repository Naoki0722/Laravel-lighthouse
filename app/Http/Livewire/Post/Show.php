<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Show extends Component
{

    public Post $post;

    protected $rules = [
        'post.author_id' => 'required',
        'post.title' => 'required|string|min:10',
        'post.content' => 'required',
    ];


    public function update()
    {
        $this->validate();

        $this->post->save();

        session()->flash('message', 'Post successfully updated.');
    }


    public function render()
    {
        return view('livewire.post.show');
    }
}
