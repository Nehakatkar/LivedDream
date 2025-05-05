@extends('layouts.nav')

@section('content')

<div class="container ">
    <h5 class="d-flex justify-content-center">Client Details</h5>
    
    <div class="card p-4 shadow-sm w-100 d-flex justify-content-center "  style="width: 50%; max-width: 600px;">
        <form action="#" method="POST">
            @csrf  <!-- Add CSRF protection -->
            
            <div class="form-group mb-3">
                <label for="fullName" class="d-flex justigy-content-flex-start">Full Name <span class="text-danger">*</span></label>
                <input type="text" id="fullName" name="fullName" class="form-control" placeholder="Enter your full name" required>
            </div>

            <div class="form-group mb-3">
                <label for="phonenumber" class="d-flex justigy-content-flex-start">Phone Number <span class="text-danger">*</span></label>
                <input type="number" id="phonenumber" name="phonenumber" class="form-control" placeholder="Enter Phone Number" required>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="d-flex justigy-content-flex-start">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
            </div>

            <div class="form-group mb-3">
                <label for="address" class="d-flex justigy-content-flex-start">Delivery Address <span class="text-danger">*</span></label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Delivery Address" required>
            </div>

            <div class="form-group mb-3 d-flex justify-content-between" >
                <div class="d-flex flex-column">
                    <label for="city" class="d-flex justigy-content-flex-start">City <span class="text-danger">*</span></label>
                    <input type="text" id="city" name="" class="form-control" placeholder="city" required>

                </div>
                <div class="d-flex flex-column">
                    <label for="pincode" class="d-flex justigy-content-flex-start">Pincode <span class="text-danger">*</span></label>
                    <input type="number" id="pincode" name="" class="form-control" placeholder="Pincode" required>

                </div>
                
            </div>

            <div class="form-group mb-3">
                <label for="company" class="d-flex justigy-content-flex-start">Company Name</label>
                <input type="text" id="company" name="" class="form-control" placeholder="Enter Company Name">
            </div>

            <div class="form-group mb-3">
                <label for="gst" class="d-flex justigy-content-flex-start">GST Number</label>
                <input type="number" id="gst" name="" class="form-control" placeholder="Enter GST number">
            </div>
            
        </form>
    </div>


    <div style="display:flex;flex-direction:row;gap:25%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
       
        <a href="{{ route('quotations.product_cart') }}" class="btn btn-outline-secondary" style="width:15%">Back</a>
        <a href="{{ route('quotations.quatations_summary') }}" class="btn btn-outline-secondary" style="width:15%">Next</a>
        

    </div>
</div>

@endsection
