<div class="card p-5">
    <h4>Contacts</h4>
    <hr>
    @if ($contacts->count() == 0)
        <p class="opacity-50">No contacts to show</p>
    @else
        @foreach ($contacts as $contact)
            <div class="card bg-dark p-3 mb-2 d-flex flex-row justify-content-between align-items-center">
                <p>Name: {{ $contact->name }}</p>
                <p>Email: {{ $contact->email }}</p>
                <p>Phone: {{ $contact->phone }}</p>
                <div>
                    <a href="{{ route('update-contact', ['id' => $contact->id]) }}" class="btn btn-secondary p-2">Edit</a>
                    <a href="{{ route('delete-contact', ['id' => $contact->id]) }}" class="btn btn-danger p-2">Delete</a>
                </div>
            </div>        
        @endforeach

        <div>
            {{ $contacts->links() }}
        </div>
        
    @endif
</div>