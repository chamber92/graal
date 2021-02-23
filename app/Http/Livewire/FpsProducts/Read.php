<?php

namespace App\Http\Livewire\FpsProducts;

use App\Models\FpsProduct;
use Livewire\Component;

class Read extends Component
{
    public $fpsProduct;
    protected $listeners = ['showReadFpsProductModal'];

    public function render()
    {
        return view('livewire.fps-products.read');
    }

    public function showReadFpsProductModal(FpsProduct $fpsProduct)
    {
        $this->fpsProduct = $fpsProduct;

        $this->emit('showModal', 'read-fps-product-modal');
    }
}
