@section('title', 'Fps Products')

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
            <button type="button" class="btn btn-primary" wire:click="$emit('showSaveFpsProductModal')">
                <i class="fas fa-plus"></i> Create Fps Product
            </button>
        </div>
    </div>

    <div class="list-group">
        @forelse($fpsProducts as $fpsProduct)
            <div class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <div class="col-md mb-2 mb-md-0">
                        <ul class="list-unstyled mb-0">
                            <li>{{ $fpsProduct->name }}</li>
                        </ul>
                    </div>
                    <div class="col-md-auto mr-n1">
                        <button type="button" class="btn btn-link px-1 py-0" title="Read"
                                wire:click="$emit('showReadFpsProductModal', {{ $fpsProduct->id }})">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-link px-1 py-0" title="Update"
                                wire:click="$emit('showSaveFpsProductModal', {{ $fpsProduct->id }})">
                            <i class="fas fa-edit"></i>
                        </button>
                        @livewire('fps-products.delete', ['fpsProduct' => $fpsProduct->id], key(uniqid()))
                    </div>
                </div>
            </div>
        @empty
            <div class="list-group-item">
                No fps products to display.
            </div>
        @endforelse
    </div>

    @livewire('fps-products.read')
    @livewire('fps-products.save')
</div>
