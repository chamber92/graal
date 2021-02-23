<?php

namespace App\Http\Livewire;

use App\Http\Controllers\PragSearchController;
use Livewire\Component;

class PragResult extends Component
{
    public $prag_id;
    public $data;

    public function getRules()
    {
        return [
            'prag_id' => ['nullable',],
        ];
    }

    public function mount($pragId)
    {
        $this->prag_id = $pragId;
        $this->data = $this->prag_id ? (new PragSearchController($this->prag_id))->search() : [];
    }

    public function render()
    {
        return view('livewire.prag-result');
    }
}
