@section('title', 'Cross Ways')

<div>
    <h1>@yield('title')</h1>

    <div class="row justify-content-between align-items-center">
        <div class="col-md-auto mb-3">
            <label for="search">
                {{ __(' Search croosings') }}
            </label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
                <input type="search" class="form-control shadow-none" id="search" placeholder="Search" wire:model.debounce.500ms="search">
            </div>
        </div>
        <div class="col-md-auto mb-3">
            <button type="button" class="btn btn-primary" wire:click="$emit('showSaveCrossWayModal')">
                <i class="fas fa-plus"></i> Create Cross Way
            </button>
        </div>
    </div>

    <div class="list-group">
        @forelse($crossWays as $crossWay)
            <div class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <div class="col-md mb-2 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            @foreach(['fps_code', 'xyg_code', 'prag_id'] as $column)
                                <li>{{ $crossWay->$column }}</li>
                                @if($loop->last)
                                    <li>
                                        <livewire:prag-result :pragId="$crossWay->$column"></livewire:prag-result>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-auto mr-n1">
                        <button type="button" class="btn btn-link px-1 py-0" title="Read"
                                wire:click="$emit('showReadCrossWayModal', {{ $crossWay->id }})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-link px-1 py-0" title="Update"
                                wire:click="$emit('showSaveCrossWayModal', {{ $crossWay->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                        @livewire('cross-ways.delete', ['crossWay' => $crossWay->id], key(uniqid()))
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item">
Нечего не найдено
            </div>
        @endforelse
    </div>

    @livewire('cross-ways.read')
    @livewire('cross-ways.save')
</div>
