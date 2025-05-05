@extends('layouts.nav')

@section('content')

    

  


<div class="container ">
    <h2 class="text-center fw-bold mb-4">Payment Terms</h2>

    <div class="card mx-auto" style="max-width: 500px;height:250px">
      <div class="mb-3">
        <div class="d-flex justify-content-flex-start mb-3">
            <label for="payment-description" class="custom-label">Payment Description</label>

        </div>
        <textarea id="payment-description" class="form-control" rows="5" placeholder="Describe Payment Schedule"></textarea>
      </div>
    </div>
</div>



<div style="display:flex;flex-direction:row;gap:20%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
       
       <a href="{{ route('quotations.quatations_summary') }}" class="btn btn-outline-secondary" style="width:15%">Back</a>
       <a href="{{ route('quotations.advanced_payment') }}" class="btn btn-outline-secondary" style="width:15%">Next</a>
       

</div>




@endsection