<div class="container my-5">
    <div class="row mb-5">
        <div class="col text-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="128px">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            @livewire('contact-form')
        </div>
        <div class="col-md-8">
            @livewire('contacts')
        </div>
    </div>
</div>