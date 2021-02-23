<?php

namespace App\Http\Livewire\FpsProducts;

use App\Models\FpsProduct;
use Livewire\Component;

class Delete extends Component
{
    public $fpsProduct;

    public function mount(FpsProduct $fpsProduct)
    {
        $this->fpsProduct = $fpsProduct;
    }

    public function render()
    {
        return view('livewire.fps-products.delete');
    }

    public function delete()
    {
        $this->fpsProduct->delete();

        $this->emitUp('$refresh');
    }
}
