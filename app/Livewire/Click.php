<?php

namespace App\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;



class Click extends Component
{
    public $msg = '';
    public Collection $images;
    public ?int $random = 3;
    public ?string $url = null;
    public ?string $title = null;


    public function render()
    {
        return view('livewire.click');
    }

    public function clickNewImage($images)
    {
       // dd($images);
        $this->msg = "New random image";
        $this->random = rand(1,count($images)-1);
        //$this->images = $images;
    }
}
