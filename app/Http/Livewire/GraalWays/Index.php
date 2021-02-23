<?php

namespace App\Http\Livewire\GraalWays;

use App\Models\GraalWay;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Redbastie\Larawire\Traits\DisplaysData;

class Index extends Component
{
    use DisplaysData;

    public $routeUri = '/graal-ways';
    public $routeName = 'graal-ways';
    public $routeMiddleware = 'auth';

    public function render()
    {
        return view('livewire.graal-ways.index', [
            'graalWays' => $this->query()->paginate($this->perPage),
        ]);
    }

    public function query()
    {
        $query = GraalWay::query();

        if ($this->search) {
            $query->where(function (Builder $query) {
                collect([
                    'xyg_code',
                    'fps_code',
                    'titile',

                ])->each(function (string $column) use ($query) {
                    $query->orWhere($column, 'like', $this->search . '%')
                        ->orWhere($column, 'LIKE', 'GS' . $this->search . '%');
                });
            });
        }

        return $query->orderBy('id');
    }
}
