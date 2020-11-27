<?php

namespace App\Http\Livewire\Cliente;

use Livewire\Component;

class Resumen extends Component
{
    public $cliente;
    
    public function render()
    {
        return view('livewire.cliente.resumen');
    }
}
