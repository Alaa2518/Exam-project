{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div> --}}


<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    <div>
        {{ $logo }}
    </div>
    <div class="card mb-3">
        <div class="card-body">
                {{ $slot }}
        </div>
    </div>

</div>
