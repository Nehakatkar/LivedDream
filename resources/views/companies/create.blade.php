
@extends('layouts.app')
@section('content')
<div class="container">
        <h2>Add Company</h2>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
        <button class="btn btn-primary btn-save" type="submit" id="company">Save Company</button>
        <div class="row mt-3">
            <!-- Company Details -->
            <div class="col-md-6">
                <div class="card">
                    <div class="m-3">
                    <h5>Company Details</h5>
                    <div class="mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter company name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Type*</label>
                        <select  name="type" class="form-select">
                       
                            @foreach($companyTypes as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Our Relation</label>
                        <select name="relation" class="form-select">
                         
                            @foreach($relations as $relation)
                                <option value="{{ $relation }}">{{ $relation }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Category*</label>
                        <select name="product_category" class="form-select">
                            
                            @foreach($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Zone*</label>
                        <select name="zone" class="form-select">
                          
                            @foreach($zones as $key => $zone)
                                <option value="{{ $key + 1 }}">{{ $zone }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">GST</label>
                        <input type="text" name="gst" class="form-control" placeholder="Enter GST">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City*</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter city">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" name="pincode" class="form-control" placeholder="Enter pincode">
                    </div>
                   {{-- <h5>Godown Details <button class="btn btn-dark btn-sm">Add Godown</button></h5> --}}
                     {{-- <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="" class="form-control" placeholder="Enter Godown Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control" placeholder="Enter Godown Pincode">
                    </div> --}}
                    <h5>Godown Details 
                        <button type="button" id="addGodown" class="btn btn-dark btn-sm">Add Godown</button>
                    </h5>
                    <div id="godownContainer">
                        <div class="godown-item">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" name="godown_address[]" class="form-control" placeholder="Enter Godown Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" name="godown_city[]" class="form-control" placeholder="Enter City">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pincode</label>
                                <input type="text" name="godown_pincode[]" class="form-control" placeholder="Enter Godown Pincode">
                            </div>
                            <button type="button" class="btn btn-danger btn-sm remove-godown">Remove</button>
                            <hr>
                        </div>
                    </div>  
                </div>
                </div>
            </div>
            
            <!-- Godown & Sales Details -->
            <div class="col-md-6">
                <div class="card">
                    <div class="m-3">
                    <h5> Contact Person</h5>
                    <h6 class="my-4">1. Sales Executives Details</h6>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="sales_executive_name" class="form-control" placeholder="Enter name">
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Mobile Number (Whatsapp Number)</label>
                        <input type="text" name="sales_executive_phone" class="form-control" placeholder="Enter Mobile number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="sales_executive_email" class="form-control" placeholder="Enter Email">
                    </div>
                    <h6 class="my-4">2. Channel Partner</h6>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="channel_partner_name" class="form-control" placeholder="Enter name">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Mobile Number (Whatsapp Number)</label>
                        <input type="text" name="channel_partner_phone" class="form-control" placeholder="Enter Mobile number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="channel_partner_email" class="form-control" placeholder="Enter Email">
                    </div>
                    <h6 class="my-4">3. Sales Representative</h6>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="sales_rep_name" class="form-control" placeholder="Enter name">
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Mobile Number (Whatsapp Number)</label>
                        <input type="text" name="sales_rep_phone" class="form-control" placeholder="Enter Mobile number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="sales_rep_email" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    
    <script>
        document.getElementById('addGodown').addEventListener('click', function () {
            let container = document.getElementById('godownContainer');

            let godownHTML = `
                <div class="godown-item">
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="godown_address[]" class="form-control" placeholder="Enter Godown Address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="godown_city[]" class="form-control" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" name="godown_pincode[]" class="form-control" placeholder="Enter Godown Pincode">
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-godown">Remove</button>
                    <hr>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', godownHTML);
        });

        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove-godown')) {
                event.target.closest('.godown-item').remove();
            }
        });
    </script>
{{-- </body>
</html> --}}
@endsection
