@if (session('success'))
    <div class="mb-4 rounded bg-green-100 px-4 py-2 text-green-800">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="mb-4 rounded bg-red-100 px-4 py-2 text-red-800">
        {{ session('error') }}
    </div>
@endif
