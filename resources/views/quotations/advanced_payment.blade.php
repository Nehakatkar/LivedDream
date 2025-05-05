@extends('layouts.nav')

@section('content')


<div class="advance-payment-container d-flex flex-column align-center" >
  <h2 class="text-center mb-20">Advance Payment</h2>

  <div class="card w-50 p-20 payment" >
    
    <div class="amt-input-container d-flex flex-column" style="margin-bottom: 20px;">
      <label for="amount" class="option-label  mb-2 " style="text-align:left">Amount</label>
      <input type="text" id="amount" class="input amt-input p-8 w-100" placeholder="0.00" style="padding: 8px; width: 100%;">
    </div>

    <div class="payment-options d-flex flex-column">
      <div class="d-flex" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
        <label class="payment-option" style="">
          <input type="radio" name="payment" value="cash" class="input">
          <span>Cash</span>
        </label>

        <label class="payment-option" >
          <input type="radio" name="payment" value="cheque" class="input">
          <span>Cheque</span>
        </label>
      </div>

      <div class="d-flex" style="display: flex; justify-content: space-between;">
        <label class="payment-option" >
          <input type="radio" name="payment" value="imps" class="input">
          <span>IMPS/RTGS/NEFT</span>
        </label>

        <label class="payment-option" >
          <input type="radio" name="payment" value="upi" class="input">
          <span>UPI</span>
        </label>
      </div>
    </div>

    <div class="remark-container" style="margin-top: 20px;">
      <label for="remark" class="option-label" style="font-weight: bold; margin-bottom: 5px; text-align: left; display: block;">Remark</label>
      <textarea id="remark" placeholder="Remark" style="width: 100%; padding: 8px;"></textarea>
    </div>
  </div>

  <div class="footer-options-container" style="display:flex;flex-direction:row;gap:20%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
    <!-- <div class="back-btn-container" style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
      <i class="fa-solid fa-arrow-left-long"></i>
      <span>Back</span>
    </div> -->
    <a href="{{ route('quotations.payment_terms') }}" class="btn btn-outline-secondary" style="width: 15%; height: 42px;">Back</a>


    <button class="btn btn-confirm" id="confirmBtn" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 6px;width:15%">Pay</button>
  </div>
</div>

<div id="confirmationModal" style="">
  <div style="background: #fff; padding: 20px; border-radius: 12px; text-align: center; width: 400px; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
    <img src="img\Screenshot 2025-04-05 161843.png" alt="" style="width:30%;height:30%">
    <h3 style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">Order Confirmed</h3>
    <p style="margin-bottom: 20px; font-size: 14px;">Your order is confirmed.</p><hr>
    <button onclick="closeModal()" style="padding: 10px 20px; background-color: #4EE6B1; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer">Done</button>
  </div>
</div>

    <!-- <script>
           document.querySelectorAll(".payment-option input").forEach((input) => {
                input.addEventListener("change", function () {
                    document.querySelectorAll(".payment-option").forEach(opt => {
                        opt.style.border = "1px solid #ccc";
                    });

                    this.closest(".payment-option").style.border = "1px solid #007bff";
                });
            });


            document.getElementById("confirmBtn").addEventListener("click", function () {
                document.getElementById("confirmationModal").style.display = "flex";
            });

            function closeModal() {
                document.getElementById("confirmationModal").style.display = "none";
            }

    </script> -->


  <script>
    // Payment option highlight logic
    document.querySelectorAll(".payment-option input").forEach((input) => {
        input.addEventListener("change", function () {
            document.querySelectorAll(".payment-option").forEach(opt => {
                opt.style.border = "1px solid #ccc";
            });
            this.closest(".payment-option").style.border = "1px solid #007bff";
        });
    });

    // Show modal on Pay button click
    document.getElementById("confirmBtn").addEventListener("click", function () {
        document.getElementById("confirmationModal").style.display = "flex";
    });

    // Close modal and redirect to dashboard
    function closeModal() {
        document.getElementById("confirmationModal").style.display = "none";
        // Redirect to dashboard after short delay
        setTimeout(() => {
            window.location.href = "{{ route('dashboard') }}";  // Replace with your actual dashboard route name
        }, 300); // Optional short delay
    }


 
</script>

@endsection