<?php

namespace App\Http\Livewire\ImportFives;

use App\Models\ImportFive;
use Livewire\Component;
use Redbastie\Larawire\Traits\HandlesData;

class Save extends Component
{
    use HandlesData;

    public $importFive;
    protected $listeners = ['showSaveImportFiveModal'];

    public function render()
    {
        return view('livewire.import-fives.save');
    }

    public function showSaveImportFiveModal(ImportFive $importFive = null)
    {
        $this->importFive = $importFive ?? new ImportFive;
        $this->data = $importFive->toArray();

        $this->emit('showModal', 'save-import-five-modal');
    }

    public function save()
    {
        $validatedData = $this->validateData($this->importFive->rules());

        if ($this->importFive && $this->importFive->exists) {
            $this->importFive->update($validatedData);
        }
        else {
            $this->importFive->create($validatedData);
        }

        $this->emitUp('$refresh');
        $this->emit('hideModal', 'save-import-five-modal');
    }
}
