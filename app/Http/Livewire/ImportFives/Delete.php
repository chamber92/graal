<?php

namespace App\Http\Livewire\ImportFives;

use App\Models\ImportFive;
use Livewire\Component;

class Delete extends Component
{
    public $importFive;

    public function mount(ImportFive $importFive)
    {
        $this->importFive = $importFive;
    }

    public function render()
    {
        return view('livewire.import-fives.delete');
    }

    public function delete()
    {
        $this->importFive->delete();

        $this->emitUp('$refresh');
    }
}
