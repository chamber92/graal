<?php

namespace App\Http\Livewire\XygProducts;

use App\Models\XygProduct;
use Livewire\Component;

class Delete extends Component
{
    public $xygProduct;

    public function mount(XygProduct $xygProduct)
    {
        $this->xygProduct = $xygProduct;
    }

    public function render()
    {
        return view('livewire.xyg-products.delete');
    }

    public function delete()
    {
        $this->xygProduct->delete();

        $this->emitUp('$refresh');
    }
}
