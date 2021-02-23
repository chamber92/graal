@section('title', 'Graal Ways')

<div>
    <h1>@yield('title')</h1>

    <div class="row justify-content-between">
        <div class="col-md-auto mb-3">
            <label for="search">
                {{ __(' Search croosings') }}
            </label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
                <input type="search" class="form-control" placeholder="Search" wire:model.debounce.500ms="search">
            </div>
        </div>
        <div class="col-md-auto mb-3">
            <button type="button" class="btn btn-primary" wire:click="$emit('showSaveGraalWayModal')">
                <i class="fas fa-plus"></i> Create Graal Way
            </button>
        </div>
    </div>

    <div class="list-group">
        @forelse($graalWays as $graalWay)
            <div class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <div class="col-md mb-2 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li>{{ $graalWay->xyg_code }}</li>
                        </ul>
                    </div>
                    <div class="col-md-auto mr-n1">
                        <button type="button" class="btn btn-link px-1 py-0" title="Read"
                                wire:click="$emit('showReadGraalWayModal', {{ $graalWay->id }})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-link px-1 py-0" title="Update"
                                wire:click="$emit('showSaveGraalWayModal', {{ $graalWay->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                        @livewire('graal-ways.delete', ['graalWay' => $graalWay->id], key(uniqid()))
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item">
                No graal ways to display.
            </div>
        @endforelse
    </div>

    @livewire('graal-ways.read')
    @livewire('graal-ways.save')
</div>
