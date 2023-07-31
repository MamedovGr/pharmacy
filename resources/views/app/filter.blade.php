<form action="{{ url()->current() }}">
        <div class="accordion" id="accordionPanelsStayOpenExample">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-success fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Category
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        @foreach($categories as $category)
                            <div class="form-check my-2">
                                <input class="form-check-input" type="checkbox" id="flexCheck-c-{{ $category->id }}" name="category[]"
                                       value="{{ $category->id }}" {{ in_array($category->id, $f_categories) ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheck-c-{{ $category->id }}">{{ $category->name}}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-success fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Hard-Drugs
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        @foreach($hard_drugs as $hard_drug)
                            <input class="form-check-input" type="checkbox" id="flexCheck-c-{{ $hard_drug->id }}" name="hard_drug[]"
                                   value="{{ $hard_drug->id }}" {{ in_array($hard_drug->id, $f_hard_drugs) ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexCheck-c-{{$hard_drug->id }}">{{ $hard_drug->name}}</label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-success fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Soft-Drugs
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        @foreach($soft_drugs as $soft_drug)
                            <input class="form-check-input" type="checkbox" id="flexCheck-c-{{ $soft_drug->id }}" name="soft_drug[]"
                                   value="{{ $category->id }}" {{ in_array($category->id, $f_categories) ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexCheck-c-{{  $soft_drug->id }}">{{ $soft_drug->name}}</label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-success fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Liquids
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        @foreach($liquids as $liquid)
                            <input class="form-check-input" type="checkbox" id="flexCheck-c-{{ $liquid->id }}" name="liquid[]"
                                   value="{{ $liquid->id }}" {{ in_array($liquid->id, $f_liquids) ? 'checked' : ''}}>
                            <label class="form-check-label" for="flexCheck-c-{{  $liquid->id }}">{{ $liquid->name}}</label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="{{ url()->current() }}" class="btn btn-secondary btn-sm w-100">
                        Clear
                    </a>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-danger btn-sm w-100">
                        <i class="bi-funnel"></i> Filter
                    </button>
                </div>
            </div>
        </div>
</form>

