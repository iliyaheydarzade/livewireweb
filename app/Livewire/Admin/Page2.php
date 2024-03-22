<?php

namespace App\Livewire\Admin;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\user;
use Livewire\WithFileUploads;
class Page2 extends Component
{
    use WithFileUploads;
    ///////////////////////////////
    public $name;
    public $email;
    public $pas;
    public $srce;
    public $search;
    // ////////////////////////save
    public function save(){
        $n = time().".".$this->srce->getClientOriginalExtension();
        user::create([
            "name" => $this->name,
            "email"=> $this->email,
            "password"=> $this->pas,
            "srce" => 'photos/'.$n
        ]);
        $this->srce->storeas("photos",$n,"public");
        $this->reset("name","email","pas","srce");
    }
    // ////////////////////////////////////////////
    public function render()
    {
        $users = user::where("name","like","%".$this->search."%")->get();
        return view('livewire.admin.page2',[
            "users" => $users
        ]);
    }
}
