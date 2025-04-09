<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card p-5">
            <h4>Delete Contact</h4>
            <hr>
            <p>Do you really want to delete this contact?</p>
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <div class="text-end">
                <button wire:click="cancel" class="btn btn-secondary">Cancel</button>
                <button wire:click="delete" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>