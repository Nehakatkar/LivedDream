@extends('layouts.nav')

@section('content')
<h2 class="mb-5 text-center">New Quotation</h2>

<div class="quatation-content d-flex justify-content-center align-items-center" >
    <div class="card  w-100 p-4 shadow-sm" style="width: 50%; max-width: 600px;"> 
        <!-- <h2 class="mb-4 text-center">New Quotation</h2> -->

        <h5>Project Details</h5>
        <div class="mt-4 d-flex flex-column">
            <label class="form-label">Service Type</label>
            <select class="service form-select">
                <option value="">Select Service</option>
                <option value="wall" id="wall">Wall</option>
                <option value="floor" id="floor">Floor</option>
                <option value="ceiling" id="Ceiling">Ceiling</option>
            </select>
        </div>

        <div class="mt-3 ">
            <label>Installation Area*</label>
            
                <div class="buttons">
                    <button type="button" id="livingroom" class="area-btn">Living room</button>
                    <button type="button" id="bedroom" class="area-btn">Bed room</button>
                </div>
                <div class="buttons">
                    <button type="button" id="kitchen" class="area-btn">Kitchen</button>
                    <button type="button" id="bathroom" class="area-btn">Bathroom</button>
                </div>
                <div class="buttons">
                    <button type="button" id="balcony" class="area-btn">Balcony</button>
                    <button type="button" id="other" class="area-btn">Other</button>
                 </div>
            </div>
        </div>
    </div>
    <div style="display:flex;flex-direction:row;gap:40%;justify-content:center;align-items:center;margin-top:3%">
        <!-- <button type="button" class="btn btn-outline-secondary" style="width:10%" onclick="window.location.href='views\quatations\create_quotation.blade.php'">Back</button>
        <button type="button" class="btn btn-outline-secondary" style="width:10%">Next</button> -->
        <a href="{{ route('quotations.create_quotation') }}" class="btn btn-outline-secondary"style="width:15%" >Back</a>
        <a href="{{ route('quotations.product_list') }}"id="nextBtn" class="btn btn-outline-secondary " style="width:15%" >Next</a>
        

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Highlight selected area button and add the 'active' class
        document.querySelectorAll('.area-btn').forEach(button => {
            button.addEventListener('click', function () {
                // Remove 'active' class from all buttons
                document.querySelectorAll('.area-btn').forEach(btn => btn.classList.remove('active', 'btn-primary'));

                // Add 'active' class and style to the clicked button
                this.classList.add('active', 'btn-primary');
            });
        });

        const nextButton = document.getElementById('nextBtn');

        if (nextButton) {
            nextButton.addEventListener('click', function (e) {
                // Get the selected service value
                const selectedService = document.querySelector('.service').value;

                // Get the active installation area button text
                const selectedArea = document.querySelector('.area-btn.active')?.innerText;

             
                // Check if both values are selected
                if (!selectedService || !selectedArea) {
                    e.preventDefault(); // Prevent page navigation
                    alert("⚠️ Please select both: Service Type and Installation Area.");
                } else {
                    // Log both selected values in the console
                    console.log("✅ Selected Service Type:", selectedService);
                    console.log("✅ Selected Installation Area:", selectedArea);
                }
            });
        }
    });
</script>





@endsection




















