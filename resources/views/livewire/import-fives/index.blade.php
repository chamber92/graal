@section('title', 'Import Fives')

<div>
    <h1>@yield('title')</h1>

    <div class="row justify-content-between">
        <div class="col-md-auto mb-3">
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
                <input type="search" class="form-control" placeholder="Search" wire:model.debounce.500ms="search">
            </div>
        </div>
        <div class="col-md-auto mb-3">
            <button type="button" class="btn btn-primary" wire:click="$emit('showSaveImportFiveModal')">
                <i class="fas fa-plus"></i> Create Import Five
            </button>
        </div>
    </div>

    <div class="list-group">
        @forelse($importFives as $importFive)
            <div class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <div class="col-md mb-2 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li>{{ $importFive->title }}</li>
                            <li> Форма Партс {{ $importFive->fps_price }} В наличии {{ $importFive->fps_qty }}</li>
                            <li> Елси {{ $importFive->elsie_price }} В наличии {{ $importFive->elsie_qty }}</li>
                            <li> Грааль {{ $importFive->graal_price }} </li>                            <i class="fas fa-eye"></i>


                        </ul>
                    </div>
                    <div class="col-md-auto mr-n1">
                        <button type="button" class="btn btn-link px-1 py-0" title="Read"
                                wire:click="$emit('showReadImportFiveModal', {{ $importFive->id }})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-link px-1 py-0" title="Update"
                                wire:click="$emit('showSaveImportFiveModal', {{ $importFive->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                        @livewire('import-fives.delete', ['importFive' => $importFive->id], key(uniqid()))
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item">
                No import fives to display.
            </div>
        @endforelse
    </div>

    @livewire('import-fives.read')
    @livewire('import-fives.save')
</div>
