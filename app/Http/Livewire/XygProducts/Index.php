<?php

namespace App\Http\Livewire\XygProducts;

use App\Models\XygProduct;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Redbastie\Larawire\Traits\DisplaysData;

class Index extends Component
{
    use DisplaysData;

    public $routeUri = '/xyg-products';
    public $routeName = 'xyg-products';
    public $routeMiddleware = 'auth';

    public function render()
    {
        return view('livewire.xyg-products.index', [
            'xygProducts' => $this->query()->paginate($this->perPage),
        ]);
    }

    public function query()
    {
        $query = XygProduct::query();

        if ($this->search) {
            $query->where(function (Builder $query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });
        }

        return $query->orderBy('name');
    }
}
