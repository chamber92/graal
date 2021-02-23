<div id="save-import-five-modal" class="modal fade" tabindex="-1" data-backdrop="static" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $importFive && $importFive->exists ? 'Update' : 'Create' }} Import Five</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form wire:submit.prevent="save">
                <div class="modal-body pb-0">
                    <div class="form-group">
                        <label for="title"><small>
                                {{ __('title') }}
                            </small></label>
                        <input type="text" id="title" class="form-control shadow-none @error('title') is-invalid @enderror" wire:model.defer="data.title">
                        @error('title')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="xyg_code"><small>
                                {{ __('xyg_code') }}
                            </small></label>
                        <input type="text" id="xyg_code" class="form-control shadow-none @error('xyg_code') is-invalid @enderror" wire:model.defer="data.xyg_code">
                        @error('xyg_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="euro_code"><small>
                                {{ __('euro_code') }}
                            </small></label>
                        <input type="text" id="euro_code" class="form-control shadow-none @error('euro_code') is-invalid @enderror" wire:model.defer="data.euro_code">
                        @error('euro_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nags_code"><small>
                                {{ __('nags_code') }}
                            </small></label>
                        <input type="text" id="nags_code" class="form-control shadow-none @error('nags_code') is-invalid @enderror" wire:model.defer="data.nags_code">
                        @error('nags_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="elsie_code"><small>
                                {{ __('elsie_code') }}
                            </small></label>
                        <input type="text" id="elsie_code" class="form-control shadow-none @error('elsie_code') is-invalid @enderror" wire:model.defer="data.elsie_code">
                        @error('elsie_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="elsie_price"><small>
                                {{ __('elsie_price') }}
                            </small></label>
                        <input type="text" id="elsie_price" class="form-control shadow-none @error('elsie_price') is-invalid @enderror" wire:model.defer="data.elsie_price">
                        @error('elsie_price')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="elsie_qty"><small>
                                {{ __('elsie_qty') }}
                            </small></label>
                        <input type="text" id="elsie_qty" class="form-control shadow-none @error('elsie_qty') is-invalid @enderror" wire:model.defer="data.elsie_qty">
                        @error('elsie_qty')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="graal_code"><small>
                                {{ __('graal_code') }}
                            </small></label>
                        <input type="text" id="graal_code" class="form-control shadow-none @error('graal_code') is-invalid @enderror" wire:model.defer="data.graal_code">
                        @error('graal_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="graal_price"><small>
                                {{ __('graal_price') }}
                            </small></label>
                        <input type="text" id="elsie_price" class="form-control shadow-none @error('graal_price') is-invalid @enderror" wire:model.defer="data.graal_price">
                        @error('graal_price')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="graal_qty"><small>
                                {{ __('graal_qty') }}
                            </small></label>
                        <input type="text" id="graal_qty" class="form-control shadow-none @error('graal_qty') is-invalid @enderror" wire:model.defer="data.graal_qty">
                        @error('graal_qty')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>


                    <div class="form-group">
                        <label for="fps_code"><small>
                                {{ __('fps_code') }}
                            </small></label>
                        <input type="text" id="fps_code" class="form-control shadow-none @error('fps_code') is-invalid @enderror" wire:model.defer="data.fps_code">
                        @error('fps_code')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="fps_price"><small>
                                {{ __('fps_price') }}
                            </small></label>
                        <input type="text" id="fps_price" class="form-control shadow-none @error('fps_price') is-invalid @enderror" wire:model.defer="data.fps_price">
                        @error('fps_price')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="fps_qty"><small>
                                {{ __('fps_qty') }}
                            </small></label>
                        <input type="text" id="fps_qty" class="form-control shadow-none @error('fps_qty') is-invalid @enderror" wire:model.defer="data.fps_qty">
                        @error('fps_qty')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
