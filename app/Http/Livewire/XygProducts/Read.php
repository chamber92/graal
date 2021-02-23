<?php

namespace App\Http\Livewire\XygProducts;

use App\Models\XygProduct;
use Livewire\Component;

class Read extends Component
{
    public $xygProduct;
    protected $listeners = ['showReadXygProductModal'];

    public function render()
    {
        return view('livewire.xyg-products.read');
    }

    public function showReadXygProductModal(XygProduct $xygProduct)
    {
        $this->xygProduct = $xygProduct;

        $this->emit('showModal', 'read-xyg-product-modal');
    }
}
