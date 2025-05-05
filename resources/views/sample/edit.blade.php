@extends('layouts.app')

@section('content')
<div class="content">
    <!-- Header Section -->
    <div style="display: flex; flex-direction: row; gap: 30%;">
        <h2 class="mb-0">Edit Display Cost</h2>
        <button class="btn btn-primary btn-save" type="submit" form="displayCostForm">Update Sample</button>
    </div>

    <!-- Main Content Section -->
    <form id="displayCostForm" action="{{ route('sample.update', $sample->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mt-3 d-flex flex-row" style="gap:5%">

            <!-- Company Details -->
            <div class="card" style="width: 50%">
                <div class="mb-5">
                    <h5>Sample Details</h5>

                    <div class="mt-4">
                        <label class="form-label">Company</label><span>*</span>
                        <select name="company_id" class="form-select">
                            <option value="" disabled>Select company</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}" {{ $sample->company_id == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                </option>
                            @endforeach
                        </select>
                        <span id="company_name_error" style="color: red;"></span>
                    </div>

                    <div class="mt-4">
                        <label class="form-label">Sample Name</label>
                        <input type="text" name="sample_name" class="form-control w-100" value="{{ $sample->sample_name }}">
                    </div>

                    <div class="mt-4">
                        <label class="form-label">Sample Cost</label>
                        <input type="number" step="0.01" name="sample_cost" class="form-control w-100" value="{{ $sample->sample_cost }}" placeholder="00">
                    </div>

                    <div class="mt-4">
                        <span>Display area required</span>
                        <div style="display: flex; flex-direction: row; justify-content: space-between;">
                            <div>
                                <label class="form-label">Length</label>
                                <input type="number" step="0.01" name="length" class="form-control w-100" value="{{ $sample->length }}" placeholder="00">
                            </div>
                            <div>
                                <label class="form-label">Width</label>
                                <input type="number" step="0.01" name="width" class="form-control w-100" value="{{ $sample->width }}" placeholder="00">
                            </div>
                        </div>
                        <div>
                            <label class="form-label">Thickness</label>
                            <input type="number" step="0.01" name="thickness" class="form-control" style="width: 37%;" value="{{ $sample->thickness }}" placeholder="00">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display Product Image Section -->
            <div class="card" style="width: 40%; display: flex; justify-content: center; padding: 20px;">
                <h6>Display Product Image</h6>
                <div class="upload-box">
                    <input type="file" id="fileInput" name="image" accept=".jpg,.png,.webp" hidden>
                    <label for="fileInput" class="upload-area" style="justify-items: center">
                        <i class="fa-solid fa-cloud-arrow-up fa-xl" style="color: #437ca8;"></i>
                        <p>Drag your file(s) or <span class="browse-text">browse</span></p>
                        <small>Max 10 MB files are allowed</small>
                    </label>
                </div>
                <p class="file-support-text">Only support .jpg, .png, and .webp files</p>

                @if ($sample->image)
                    <div class="mt-3">
                        <img src="{{ asset($sample->image) }}" alt="Current Image" width="100">
                        <p>Current Image</p>
                    </div>
                @endif
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
@endsection
