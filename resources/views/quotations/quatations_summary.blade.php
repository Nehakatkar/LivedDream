@extends('layouts.nav')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" >
      <div class="quotation-wrapper custom-width" >
        <h2 class="">Quotation Summary</h2>
        <div class="card mt-0 mb-3" style="width:500px">
          <div class="d-flex justify-content-flex-start">
            <p class="date"><strong>Date–</strong> 01/01/2025</p>

          </div>
          <div class="d-flex flex-column justify-content-flex-start">
            <div class="d-flex justify-conetent-flex-start">
              <h6 class="">Client Details</h6> 
            </div>
          
          
            <div class="d-flex justify-content-between">
              <p class="client-info">Name</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Phone number</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Email</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Delivery Address</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">City</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Pincode</p>
              <p>00</p>

            </div>

           
            
            

          </div>

          
        
      </div>
        

        <div class="card mt-0 mb-3" style="width:500px">
        <div class="d-flex flex-column justify-content-flex-start">
            <div class="d-flex justify-conetent-flex-start">
              <h6 class="">Product Details</h6> 
            </div>
          
          
            <div class="d-flex justify-content-between">
              <p class="client-info">Name</p>
              <p>modern geometry</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info"> Product Code</p>
              <p>Abc001</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Required quantity</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Required Addhesive</p>
              <p>2 kg</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Service type</p>
              <p>Wall</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Installation Area</p>
              <p>Living room</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info"> Area</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Estimated delivery date</p>
              <p>1/1/2025</p>

            </div>

            <div class="d-flex justify-conetent-flex-start">
              <h6 class="">Cost Summary</h6> 
            </div>

            <div class="d-flex justify-content-between">
              <p class="client-info">Product Cost</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Labour Charge</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Loading Charge</p>
              <p>00</p>

            </div>
            <div class="d-flex justify-content-between">
              <p class="client-info">Transporation Charge</p>
              <p>00</p>

            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <p class="client-info">Total Cost</p>
              <p>00</p>

            </div>



          

           
            
            

          </div>
          
          
          
        </div>

        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 2%; margin-bottom: 2%;">
          <!-- Back button -->
          <a  href="{{ route('quotations.client_details') }}" class="btn btn-outline-secondary" style="width: 20%; height: 42px;">Back</a>

          <!-- Right side: Share and Next buttons -->
          <div style="display: flex; gap: 10px; width:40%">
            <button type="button" class="btn btn-outline-secondary" style="width: 60%; height: 38px;">Share</button>
            <a href="{{ route('quotations.payment_terms') }}" class="btn btn-outline-secondary" style="width: 60%; height: 42px;">Confirm</a>
          </div>
        </div>

          
      </div>

      </div>
      </div>
    </div>







@endsection