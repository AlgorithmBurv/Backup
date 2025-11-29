<form wire:submit.prevent="submit">
    {{-- Field Complete Name --}}
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Complete Name</label>
        <div class="input-group">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person" viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
            </span>
            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror"
                id="name" placeholder="Type your complete name">
        </div>
        @error('name')
            <div class="text-danger mt-1" style="font-size: 0.875em;">{{ $message }}</div>
        @enderror
    </div>

    {{-- Field Email Address --}}
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email Address</label>
        <div class="input-group">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-envelope" viewBox="0 0 16 16">
                    <path
                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.708 2.825L15 11.105V5.383zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741zM1 11.105l4.708-2.897L1 5.383v5.722z" />
                </svg>
            </span>
            <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                id="email" placeholder="Type your email address">
        </div>
        @error('email')
            <div class="text-danger mt-1" style="font-size: 0.875em;">{{ $message }}</div>
        @enderror
    </div>

    <hr class="my-4">

    {{-- Field Quantity --}}
    <div class="mb-3">
        <label for="quantity" class="form-label fw-bold">Quantity</label>
        <div class="input-group" style="max-width: 200px;">
            <button wire:click="decrementQuantity" class="btn btn-outline-secondary" type="button">-</button>
            <input type="text" id="quantity" class="form-control text-center" value="{{ $quantity }}" readonly>
            <button wire:click="incrementQuantity" class="btn btn-outline-secondary" type="button">+</button>
        </div>
    </div>

    {{-- Field Promo Code --}}
    <div class="mb-3">
        <label for="promo" class="form-label fw-bold">Promo Code</label>
        <div class="input-group">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-ticket-percent" viewBox="0 0 16 16">
                    <path
                        d="M14.25 0H1.75A1.75 1.75 0 0 0 0 1.75v3.5A1.75 1.75 0 0 1 1.75 7h12.5A1.75 1.75 0 0 1 16 5.25v-3.5A1.75 1.75 0 0 0 14.25 0ZM1.75 1A.75.75 0 0 1 1 1.75v3.5A.75.75 0 0 1 1.75 6h12.5A.75.75 0 0 1 15 5.25v-3.5A.75.75 0 0 1 14.25 1H1.75ZM8 4.5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5Zm-2 1a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-1 0v2a.5.5 0 0 0 .5.5Zm4 0a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-1 0v2a.5.5 0 0 0 .5.5Z" />
                    <path
                        d="M0 9.25A1.75 1.75 0 0 1 1.75 7.5h12.5A1.75 1.75 0 0 1 16 9.25v3.5A1.75 1.75 0 0 1 14.25 14.5H1.75A1.75 1.75 0 0 1 0 12.75v-3.5ZM1.75 8.5A.75.75 0 0 0 1 9.25v3.5A.75.75 0 0 0 1.75 13.5h12.5a.75.75 0 0 0 .75-.75v-3.5a.75.75 0 0 0-.75-.75H1.75Z" />
                    <path
                        d="M4.5 10.25a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1-.75-.75Zm7.5.75a.75.75 0 0 0 0-1.5h-.5a.75.75 0 0 0 0 1.5h.5Z" />
                </svg>
            </span>
            <input type="text" wire:model.live.debounce.500ms="promoCode" class="form-control" id="promo"
                placeholder="Input the promo code">
        </div>
        @if (session()->has('message'))
            <div class="alert alert-success mt-2 py-2">{{ session('message') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger mt-2 py-2">{{ session('error') }}</div>
        @endif
    </div>

    <hr class="my-4">

    {{-- Rincian Harga --}}
    <div class="d-flex justify-content-between">
        <p class="text-muted">Sub Total</p>
        <p class="fw-semibold">Rp {{ number_format($subTotalAmount, 0, ',', '.') }}</p>
    </div>
    <div class="d-flex justify-content-between">
        <p class="text-muted">Discount</p>
        <p class="fw-semibold text-danger">Rp {{ number_format($discount, 0, ',', '.') }}</p>
    </div>

    <hr class="my-3">

    <div class="d-flex justify-content-between h5">
        <p class="fw-bold">Grand Total</p>
        <p class="fw-bold">Rp {{ number_format($grandTotalAmount, 0, ',', '.') }}</p>
    </div>

    {{-- Tombol Submit --}}
    <div class="d-grid mt-4">
        <button type="submit" class="btn btn-dark btn-lg">
            Continue to Payment
        </button>
    </div>
</form>
