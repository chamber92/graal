<?php

namespace App\Http\Livewire\FpsProducts;

use App\Models\FpsProduct;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Redbastie\Larawire\Traits\DisplaysData;

class Index extends Component
{
    use DisplaysData;

    public $routeUri = '/fps-products';
    public $routeName = 'fps-products';
    public $routeMiddleware = 'auth';

    public function render()
    {
        return view('livewire.fps-products.index', [
            'fpsProducts' => $this->query()->paginate($this->perPage),
        ]);
    }

    public function query()
    {
        $query = FpsProduct::query();

        if ($this->search) {
            $query->where(function (Builder $query) {
                collect([
                    'xyg_code',
                    'fps_code',
                ])->each(function (string $column) use ($query) {
                    $query->orWhere($column, 'like', $this->search . '%')
                        ->orWhere($column, 'LIKE', 'GS' . $this->search . '%');
                });
            });
        }
        return $query->orderBy('id');
    }
}
