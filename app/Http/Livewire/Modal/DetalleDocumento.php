<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class DetalleDocumento extends Component
{
    public $id_documento;
    public function render()
    {
        return view('livewire.modal.detalle-documento');
    }
}
