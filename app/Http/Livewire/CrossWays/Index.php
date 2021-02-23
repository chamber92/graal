<?php

namespace App\Http\Livewire\CrossWays;

use App\Http\Controllers\PragSearchController;
use App\Models\CrossWay;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Redbastie\Larawire\Traits\DisplaysData;

class Index extends Component
{
    use DisplaysData;

    public $routeUri = '/cross-ways';
    public $routeName = 'cross-ways';
    public $routeMiddleware = 'auth';

    public function render()
    {
        return view('livewire.cross-ways.index', [
            'crossWays' => !empty($this->search) ? $this->query()->paginate($this->perPage) : [],
        ]);
    }

    public function query(): Builder
    {
        $query = CrossWay::query();

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
