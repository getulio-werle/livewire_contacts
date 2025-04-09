<div class="card p-5">
    <h4>Create Contact</h4>
    <hr>
    <form wire:submit="createContact">

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
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>

    <script>
        window.addEventListener('notification', (event) => {
            let data = event.detail;
            Swal.fire({
                title: data.title,
                icon: data.type,
                position: data.position,
                showConfirmButton: false,
                timer: 2000
            })
        })
    </script>

</div>