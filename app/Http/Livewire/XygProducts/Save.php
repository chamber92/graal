<?php

namespace App\Http\Livewire\XygProducts;

use App\Models\XygProduct;
use Livewire\Component;
use Redbastie\Larawire\Traits\HandlesData;

class Save extends Component
{
    use HandlesData;

    public $xygProduct;
    protected $listeners = ['showSaveXygProductModal'];

    public function render()
    {
        return view('livewire.xyg-products.save');
    }

    public function showSaveXygProductModal(XygProduct $xygProduct = null)
    {
        $this->xygProduct = $xygProduct ?? new XygProduct;
        $this->data = $xygProduct->toArray();

        $this->emit('showModal', 'save-xyg-product-modal');
    }

    public function save()
    {
        $validatedData = $this->validateData($this->xygProduct->rules());

        if ($this->xygProduct && $this->xygProduct->exists) {
            $this->xygProduct->update($validatedData);
        }
        else {
            $this->xygProduct->create($validatedData);
        }

        $this->emitUp('$refresh');
        $this->emit('hideModal', 'save-xyg-product-modal');
    }
}
