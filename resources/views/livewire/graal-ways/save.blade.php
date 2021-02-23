<div id="save-graal-way-modal" class="modal fade" tabindex="-1" data-backdrop="static" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $graalWay && $graalWay->exists ? 'Update' : 'Create' }} Graal Way</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form wire:submit.prevent="save">
                <div class="modal-body pb-0">
                    <div class="form-group">
                        <label for="titile"><small>
                                {{ __('titile') }}
                            </small></label>
                        <input type="text" id="titile" class="form-control shadow-none @error('titile') is-invalid @enderror" wire:model.defer="data.titile">
                        @error('titile')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="xyg_code"><small>
                                {{ __('XYG') }}
                            </small></label>
                        <input type="text" id="xyg_code" class="form-control shadow-none @error('xyg_code') is-invalid @enderror" wire:model.defer="data.xyg_code">
                        @error('xyg_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="fps_code"><small>
                                {{ __('FPS') }}
                            </small></label>
                        <input type="text" id="fps_code" class="form-control shadow-none @error('fps_code') is-invalid @enderror" wire:model.defer="data.fps_code">
                        @error('fps_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="fps_code"><small>
                                {{ __('FPS') }}
                            </small></label>
                        <input type="text" id="fps_code" class="form-control shadow-none @error('fps_code') is-invalid @enderror" wire:model.defer="data.fps_code">
                        @error('fps_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="prag_id"><small>
                                {{ __('PRAG') }}
                            </small></label>
                        <input type="text" id="prag_id" class="form-control shadow-none @error('prag_id') is-invalid @enderror" wire:model.defer="data.prag_id">
                        @error('prag_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                </div>
                <div class="modal-footer d-inline-flex justify-content-between w-100">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
