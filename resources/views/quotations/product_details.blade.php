@extends('layouts.nav')

@section('content')
<div class="d-flex flex-column flex-xl-row gap-4 custom-flex-lg">
    <!-- Left Section -->
    <div class="w-100 w-lg-50" style="width:50%;">
        <div class="d-flex flex-column align-items-center">
            <img id="productimg"src="img/image (1).png" alt="Wallpaper" style="width:50%; height:50%;">
            <button class="btn btn-outline-primary mt-2" onclick="toggleSampleImages()">View Sample Image</button>

            <div id="sampleImagesContainer" style="display: none;" class="mt-3 text-center">
                <img src="img\wallpaper.jpg" alt="Sample 1" style="width: 40%; margin-bottom: 10px;">
                <img src="img\wallpaper2.jpg" alt="Sample 2" style="width: 40%;">
            </div>
        </div>
        
        <div class="card p-3 mt-3" style="width:50%">
            <h5>Product Details</h5>
            <div class="d-flex justify-content-between"><strong>Product Code:</strong> <span id="productid">KL5656</span></div>
            <div class="d-flex justify-content-between"><strong>Size:</strong> <span id="productSize">10m X 20m</span></div>
            <div class="d-flex justify-content-between"><strong>Color:</strong> <span id="color">Golden</span></div>
            <div class="d-flex justify-content-between"><strong>Warranty:</strong> <span id="warranty">5 Years</span></div>
            <div class="d-flex justify-content-between"><strong>Price:</strong> <span id="price">₹200 per unit</span></div>
        </div>

        <div class="mt-3 d-flex flex-column gap-2 justify-content-center align-items-center">
            <button class="btn btn-primary" onclick="downloadImage()">Download Image</button>
            <button class="btn btn-success" onclick="showApplicationArea()">Application Area</button>
            <button class="btn btn-secondary" onclick="checkStock()">Check Stock Availability</button>
        </div>
    </div>

    <!-- Right Section -->
    <div class="card w-100 w-lg-50" style="width:50%;">
        <div >
            <h5>Calculate Area</h5>
            <div class="d-flex gap-3 justify-content-between">
                <div class="d-flex flex-column align-items-start">
                    <label>Width (ft)</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
                <div class="d-flex flex-column align-items-start">
                    <label>Height (ft)</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
            </div>
            <input type="number" class="form-control mt-2" placeholder="Total Area (sq.ft)">
        </div>
        
        <div class="card mt-3 mb-3 w-100">
            <table class="table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>
                    <tr>
                        <td>Adhesive</td>
                        <td>00</td>
                        <td>00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="card w-100 mb-3">
            <h5>Additional Items</h5>
            <div class="d-flex gap-3 justify-content-between">
                <div class="d-flex flex-column w-50 align-items-start">
                    <label>Item Name</label>
                    <input type="text" class="form-control" placeholder="Enter Item Name">
                </div>
                <div class="d-flex flex-column align-items-start">
                    <label>Price</label>
                    <input type="number" class="form-control" placeholder="00">
                </div>
            </div>
        </div>
         

       
        <div class="card p-3 mt-3 d-flex flex-column w-100 mb-3">
            <h5>Labor & Transportation Details</h5>
           
            <div class="d-flex justify-content-between align-items-start">
                
                <label>Labor Charges</label>
                <span>00</span>
            </div>
            <div class="d-flex justify-content-between align-items-start">
                <label>Estimated Delivery Date</label>
                <span>00</span>
            </div>
            <div class="mt-2">
                <label class="d-flex justify-content-flex-start">Transportation Charges</label>
                <input type="number" class="form-control" placeholder="Enter Transportation Charges">
                <label class="mt-2 d-flex justify-content-flex-start">Loading Charges</label>
                <input type="number" class="form-control" placeholder="00">
                <label class="mt-2 d-flex justify-content-flex-start">Unloading Charges</label>
                <input type="number" class="form-control" placeholder="00">
            </div>
        </div>
        
        <div class="card d-flex flex-column mt-3 w-100">
            <div class="form-check">
                <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                        Include GST (On POroduct)
                </label>00
                      
            </div>
            
            <div class="d-flex justify-content-between">
                
                <label>Total Cost </label>
                <span>00</span>
            </div>
        </div>
    </div>
   
</div>
<div style="display:flex;flex-direction:row;gap:40%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
        <!-- <button type="button" class="btn btn-outline-secondary" style="width:10%" onclick="window.location.href='views\quatations\create_quotation.blade.php'">Back</button>
        <button type="button" class="btn btn-outline-secondary" style="width:10%">Next</button> -->
        <a href="{{ route('quotations.product_list') }}" class="btn btn-outline-secondary" style="width:15%">Back</a>
        <a href="{{ route('quotations.product_cart') }}" class="btn btn-outline-secondary" style="width:15%">Next</a>
        

</div>


<script>
    function toggleSampleImages() {
        const container = document.getElementById('sampleImagesContainer');
        container.style.display = (container.style.display === 'none' || container.style.display === '') ? 'block' : 'none';
    }


    function downloadImage() {
            const link = document.createElement('a');
            link.href = document.getElementById('productimg').src;
            link.download = 'product_image.png';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }




</script>
<script>
    function showApplicationArea() {
        // Sample dynamic data – replace these with actual dynamic values if available
        const productName = "Golden Wallpaper"; 
        const productId = document.getElementById('productid').innerText || "Unknown ID";
        const installationAreaId = "IA456"; // Placeholder – replace with real value if available
        const serviceType = "Interior Design"; // Placeholder – update as per your logic

        const message = `📌 This ${productName}/${productId} is used for installation area (${installationAreaId}) on wall (${serviceType}).`;

        
        const popup = document.createElement('div');
        popup.style.position = 'fixed';
        popup.style.top = '0';
        popup.style.left = '0';
        popup.style.width = '100%';
        popup.style.height = '100%';
        popup.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        popup.style.display = 'flex';
        popup.style.justifyContent = 'center';
        popup.style.alignItems = 'center';
        popup.style.zIndex = '9999';

    
        const popupBox = document.createElement('div');
        popupBox.style.backgroundColor = '#fff';
        popupBox.style.padding = '35px';
        popupBox.style.borderRadius = '10px';
        popupBox.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.3)';
        popupBox.style.width = '90%'; 
        popupBox.style.maxWidth = '600px'; 
        popupBox.style.height = "20%";
        popupBox.style.textAlign = 'center';
        popupBox.style.position = 'relative';

        popupBox.innerHTML = `
            <span style="position:absolute; top:10px; right:20px; cursor:pointer; font-size:20px;" onclick="this.parentElement.parentElement.remove()">
                <i class="fa-solid fa-xmark"></i>
            </span>
            <p style="margin: 0; font-size: 16px; text-align: center;">${message}</p>
        `;


    
        popup.appendChild(popupBox);

        // Append popup to body
        document.body.appendChild(popup);

        // Close popup on background click
        popup.addEventListener('click', function(e) {
            if (e.target === popup) {
                popup.remove();
            }
        });
    }
</script>
<script>
   
    function checkStock() {
    const productName = "Golden Wallpaper";
    const stockCount = "44";
    const whatsappNumber = 7387964668;

    const message = `Hello, I want to check stock availability for "${productName}".\nCurrently, there are ${stockCount} items available. Please confirm.`;
    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

    // Always open a new tab without a fixed window name to avoid reusing the same window
    const win = window.open('', '_blank');
    if (win) {
        win.location.href = whatsappURL;
    } else {
        // Fallback if popup blocked
        alert("Please allow popups to open WhatsApp.");
    }
}

</script>




@endsection
