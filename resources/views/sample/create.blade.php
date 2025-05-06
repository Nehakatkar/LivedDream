@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Header Section -->
    <div style="display: flex; flex-direction: row; gap: 30%;">
        <h2 class="mb-0">Create New Display Cost</h2>
        <button class="btn btn-primary btn-save" type="submit" form="displayCostForm" id="sample">Save Sample</button>
    </div>

    <!-- Main Content Section -->
    <form id="displayCostForm" action="{{ route('sample.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row mt-3">
            <!-- Sample Details Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 w-100">
                    <div class="card-body">
                        <h5>Sample Details</h5>

                        <div class="mt-4">
                            <label class="form-label">Company</label><span>*</span>
                            <select name="company_id" class="form-select">
                                <option value="" disabled selected>Select company</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                            <span id="company_name_error" style="color: red;"></span>
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Sample Name</label>
                            <input type="text" name="sample_name" class="form-control w-100">
                        </div>

                        <div class="mt-4">
                            <label class="form-label">Sample Cost</label>
                            <input type="number" step="0.01" name="sample_cost" class="form-control w-100" placeholder="00">
                        </div>

                        <div class="mt-4">
                            <span>Display area required</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Length</label>
                                    <input type="number" step="0.01" name="length" class="form-control" placeholder="00">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Width</label>
                                    <input type="number" step="0.01" name="width" class="form-control" placeholder="00">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label class="form-label">Thickness</label>
                                <input type="number" step="0.01" name="thickness" class="form-control" placeholder="00">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display Product Image Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 d-flex justify-content-center align-items-center p-4">
                    <h6>Display Product Image</h6>
                    <div class="upload-box text-center mt-3">
                        <input type="file" id="fileInput" name="product_image" accept=".jpg, .png, .webp" hidden>
                        <label for="fileInput" class="upload-area" style="cursor: pointer;">
                            <i class="fa-solid fa-cloud-arrow-up fa-xl" style="color: #437ca8;"></i>
                            <p>Drag your file(s) or <span class="browse-text">browse</span></p>
                            <small>Max 10 MB files are allowed</small>
                        </label>
                    </div>
                    <p class="file-support-text mt-2">Only support .jpg, .png, and .webp files</p>
                </div>
            </div>
        </div>
</form>

</div>
<script>
    document.getElementById('displayCostForm').addEventListener('submit', function(event) {
        let isValid = true;

        const companySelect = document.querySelector('select[name="company_id"]');
        const productCompany = companySelect.value;
        const errorSpan = document.getElementById('company_name_error');

        if (!productCompany || productCompany === '') {
            errorSpan.innerText = 'Please select a Company.';
            isValid = false;
        } else {
            errorSpan.innerText = ''; // Clear previous error if valid
        }

        if (!isValid) {
            event.preventDefault(); // Stop form submission
        }
    });
</script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('sample');
        const scrollThreshold = 100;

            if (mainContent && saveBtn) {
                mainContent.addEventListener('scroll', () => {
                    if (mainContent.scrollTop > scrollThreshold) {
                        saveBtn.classList.add('fixed-save-btn');
                    } else {
                        saveBtn.classList.remove('fixed-save-btn');
                    }
                });
            } else {
                console.warn('Main content or Save button not found');
            }
        });

</script>
@endsection
