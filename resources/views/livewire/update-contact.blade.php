<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-5">
            <h4>Edit Contact</h4>
            <hr>
            <form wire:submit="updateContact">

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" wire:model="email">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" wire:model="phone">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="text-end mb-3">
                    <button type="button" wire:click="cancel" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

            {{-- @if(session()->has()) --}}
            @hasSection ('error')
                <div class="alert alert-danger p-5">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
</div>
