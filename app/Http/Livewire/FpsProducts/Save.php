<?php

namespace App\Http\Livewire\FpsProducts;

use App\Models\FpsProduct;
use Livewire\Component;
use Redbastie\Larawire\Traits\HandlesData;

class Save extends Component
{
    use HandlesData;

    public $fpsProduct;
    protected $listeners = ['showSaveFpsProductModal'];

    public function render()
    {
        return view('livewire.fps-products.save');
    }

    public function showSaveFpsProductModal(FpsProduct $fpsProduct = null)
    {
        $this->fpsProduct = $fpsProduct ?? new FpsProduct;
        $this->data = $fpsProduct->toArray();

        $this->emit('showModal', 'save-fps-product-modal');
    }

    public function save()
    {
        $validatedData = $this->validateData($this->fpsProduct->rules());

        if ($this->fpsProduct && $this->fpsProduct->exists) {
            $this->fpsProduct->update($validatedData);
        }
        else {
            $this->fpsProduct->create($validatedData);
        }

        $this->emitUp('$refresh');
        $this->emit('hideModal', 'save-fps-product-modal');
    }
}
