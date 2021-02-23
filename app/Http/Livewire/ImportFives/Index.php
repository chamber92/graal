<?php

namespace App\Http\Livewire\ImportFives;

use App\Models\ImportFive;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Redbastie\Larawire\Traits\DisplaysData;

class Index extends Component
{
    use DisplaysData;

    public $routeUri = '/import-fives';
    public $routeName = 'import-fives';
    public $routeMiddleware = 'auth';

    public function render()
    {
        return view('livewire.import-fives.index', [
            'importFives' => $this->query()->paginate($this->perPage),
        ]);
    }

    public function query()
    {
        $query = ImportFive::query();

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
