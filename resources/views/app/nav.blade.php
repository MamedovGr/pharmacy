<div class="p-3 mb-2 bg-success">
    <div class="row py-2">
        <div class="col-6">
            <div class="row justify-content-center">
                <div class="col-4">
                    <a href="" class="text-decoration-none text-white fs-6"><i class="bi bi-calendar-plus-fill mx-1"></i>GM Pharmacy</a>
                </div>
                <div class="col-4"><a href="{{route('home')}}" class="text-decoration-none fw-bold text-dark">Home</a></div>
            </div>
        </div>
        <div class="col-6">
            <div class="row justify-content-between">
                <div class="col-3"><a href="" class="text-decoration-none fw-bold text-white">ABOUT US</a></div>
                <div class="col-3"><a href="" class="text-decoration-none fw-bold text-white">SERVICES</a></div>
                <div class="col-3 text-dark">
                    <a href="{{route('drug.index')}}" class="px-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis nav-link">
                        <span class="h5 text-dark  fw-semibold{{request()->routeIs('drug.index') ? ' text-dark py-1' : ''}}"> Search <i class="bi bi-search h5 text-light fw-semibold{{request()->routeIs('drug.index') ? 'text-dark' : ''}}"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

