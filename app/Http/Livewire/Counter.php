<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $count2 = 0;
    public $textshow = [];
    public $nameshow = "";
    public $name_company = "";
    public $berhasil = false;
    public $error = false;

    public $data_id;

    public function increment()
    {
        $this->count++;
    }

    public function increment2()
    {
        $this->count2++;
    }

    public function addText()
    {
        if ($this->name_company != null){
            $this->textshow[] = $this->name_company;
            $this->name_company = "";
            $this->berhasil = true;
            $this->error = false;
        }else{
            $this->berhasil = false;
            $this->error = true;
        }
    }

    public function minText()
    {
         array_pop($this->textshow);
    }

    public function resetText()
    {
        $this->textshow = [];
    }

    public function editText($id)
    {
        // dd($id);
        $this->data_id = $id;
    }

    public function render()
    {
        return view('livewire.counter')
        ->extends('layouts.master')
        ->section('sentana');
    }
}
