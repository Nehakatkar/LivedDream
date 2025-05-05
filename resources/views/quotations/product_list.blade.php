@extends('layouts.nav')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Main Content -->
       

            <!-- Search & Filter -->
            <div class=" border-0 shadow-sm mb-3" >
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Search -->
                    <div class="input-group" style="max-width: 300px;">
                        <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Search">
                    </div>
                    
                   
                    <div class="d-flex gap-2">
                    <button class="btn  d-flex align-items-center justify-content-center" id="filterBtn">
                        <i class="fa-solid fa-filter"></i> 
                    </button>
                        
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="product-grid "> 
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                   
                </div>
                <div class="product-grid d-flex flex-row flex-wrap"> 
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                    <div class="product-card position-relative  border rounded">
                        <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">
                        <div style="display:flex;flex-direction:column;align-items:flex-start;">
                            <h6 id="productTitle">Modern geometry</h6>
                            <p id="productId">KL5656</p>
                        </div>
                       
                        <div style="display:flex;flex-direction:column">
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <p id="productSize">5m X 10m</p>
                                <p id="productYears"><i class="fa-solid fa-shield-alt fa-xs" style="color: #B197FC;"></i> 5 Years</p>
                            </div>
                            <div style="display:flex;flex-direction:row;justify-content:space-between">
                                <label for="">Price</label>
                                <p class="price" id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>500</p>
                            </div>
                           
                            
                        </div>
                       
                    </div>
                   
                </div>
                <!-- <img id="productImage" class="product-image" src="" alt="Product Image">
                <h2 id="productTitle"></h2>
                <p id="productId"></p>
                <p id="productSize"></p>
                <p id="productYears"></p>
                <p class="price" id="productPrice"></p> -->
                
            </div>
    

            


           
            
           
           



        
    </div>
</div>


<div id="filterSidebar" class="position-fixed bg-white shadow-lg p-4" style="right: -300px; top: 0; height: 100vh; width: 300px; transition: 0.3s;">
                <h5>Filter Options</h5>
                <hr>
                <div>
                    <h6>zone</h6>
                    <input type="checkbox"> Zone A<br>
                    <input type="checkbox"> Zone B<br>
                </div>
               
                <div>
                    <h6>Company Type</h6>
                    <input type="checkbox"> Category X<br>
                    <input type="checkbox"> Category Y<br>
                </div>
                <button class="btn btn-primary mt-3 w-100">Apply</button>
                <button class="btn btn-light mt-2 w-100" id="closeFilter">Close</button>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    const filterBtn = document.getElementById('filterBtn');
    const closeFilter = document.getElementById('closeFilter');
    // const deleteToggle = document.getElementById('deleteToggle');

    if (filterBtn) {
        filterBtn.addEventListener('click', function () {
            document.getElementById('filterSidebar').style.right = '0';
        });
    }

    if (closeFilter) {
        closeFilter.addEventListener('click', function () {
            document.getElementById('filterSidebar').style.right = '-300px';
        });
    }

    // if (deleteToggle) {
    //     deleteToggle.addEventListener('click', function () {
    //         let checkboxes = document.querySelectorAll('.selectItem, #selectAll');
    //         checkboxes.forEach(cb => {
    //             cb.style.display = cb.style.display === 'none' ? 'block' : 'none';
    //         });
    //     });
    // }
});

</script>

<!-- <script>
        const products = [
            { title: "Modern geometry", id: "KL5656", size: "5m X 10m", years: "5 Years", price: 200, img: "https://via.placeholder.com/250" },
            { title: "Classic pattern", id: "KL1234", size: "4m X 8m", years: "3 Years", price: 150, img: "https://via.placeholder.com/250" },
            { title: "Abstract art", id: "KL7890", size: "6m X 12m", years: "7 Years", price: 250, img: "https://via.placeholder.com/250" }
        ];

        function getProductDetails() {
            const urlParams = new URLSearchParams(window.location.search);
            const productId = urlParams.get('id');
            const product = products.find(p => p.id === productId);
            if (product) {
                document.getElementById("productImage").src = product.img;
                document.getElementById("productTitle").textContent = product.title;
                document.getElementById("productId").textContent = "Product ID: " + product.id;
                document.getElementById("productSize").textContent = "Size: " + product.size;
                document.getElementById("productYears").textContent = "Warranty: " + product.years;
                document.getElementById("productPrice").textContent = "₹" + product.price + " / unit";
            } 
        }

        document.addEventListener("DOMContentLoaded", getProductDetails);
</script> -->


























@endsection