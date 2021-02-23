<?php

namespace App\Http\Livewire\ImportFives;

use App\Models\ImportFive;
use Livewire\Component;

class Read extends Component
{
    public $importFive;
    protected $listeners = ['showReadImportFiveModal'];

    public function render()
    {
        return view('livewire.import-fives.read');
    }

    public function showReadImportFiveModal(ImportFive $importFive)
    {
        $this->importFive = $importFive;

        $this->emit('showModal', 'read-import-five-modal');
    }
}
