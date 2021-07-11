<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $message = '';
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }


    /**
     * カウントを増やす
     *
     * @return int
     */
    public function increment()
    {
        $this->count++;
    }


    public function delUser($id){
        User::where('id', $id)->delete();
        $this->users = User::all();
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
