@extends('layouts.nav')

@section('content')

<div class="container-fluid">
    <div class="row">

        <!-- Search & Filter -->
        <div class="border-0 shadow-sm mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Search -->
                <div class="input-group" style="max-width: 300px;">
                    <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Search">
                </div>

                <!-- Filter and Delete Controls -->
                <div class="d-flex  filter">
                    <button type="button" id="selectAll" class="btn p-0 d-flex align-items-center justify-content-center" >
                        <img src="{{ asset('img/icons8-select-all-50.png') }}" alt="Select All" class="img-fluid" style="max-height: 24px;">
                    </button>



                    <button id="deleteSelected" onclick="deleteSelectedProducts()" class="btn p-0 d-flex align-items-center justify-content-center" >
                        <i class="fa-solid fa-trash fa-lg" style="color: #ec1313;" ></i>
                    </button>
                    <button class="btn  d-flex align-items-center justify-content-center" id="filterBtn">
                        <i class="fa-solid fa-filter"></i> 
                    </button>
                    
                </div>

            </div>
        </div>

        <!-- Product Grid -->
        <div class="card">
            <div class="product-grid d-flex flex-row flex-wrap">

                <!-- Product Card 1 -->
                
                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>

                
                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>


                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>

                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>


                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>


                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>

                <div class="product-card position-relative  border rounded">
                    <!-- Checkbox (Top Left) -->
                    <input type="checkbox" class="selectItem form-check-input position-absolute product-checkbox" style="top: 16px;left: 28px;">

                    
                    <div class="dropdown position-absolute" style="top: 10px; right: 15px;">
                        <button class="btn btn-light border-0 p-1" type="button" data-bs-toggle="dropdown" style="width: 20px; height: 30px;">
                            <i class="fa-solid fa-ellipsis-vertical"></i> <!-- 'View More' icon -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-1" style="min-width: 50px;">
                            <li><a class="dropdown-item edit-btn p-1 text-center" href="#"><i class="fa-solid fa-pen"></i></a></li>
                            <li><a class="dropdown-item delete-btn p-1 text-center" href="#"><i class="fa-solid fa-trash"></i></a></li>
                        </ul>
                    </div>



                    
                    <img id="productImage" class="product-image" src="img/image (1).png" alt="Product Image">

                
                    <div style="display:flex;flex-direction:column;align-items:flex-start;">
                        <h6 id="productTitle">Modern geometry</h6>
                    </div>
                    <div style="display:flex;flex-direction:column">
                        <div class="product-info-group">
                            <span>Category</span>
                            <p id="productcategory">Wall</p>
                        </div>
                        <div class="product-info-group">
                            <span>Installation area</span>
                            <p id="installationarea">Bedroom</p>
                        </div>
                        <div class="product-info-group">
                            <span>Cost</span>
                            <p id="productPrice"><i class="fa-solid fa-indian-rupee-sign fa-2xs" style="color: #d0c8c8;"></i>2000</p>
                        </div>
                    </div>
                </div>

                <!-- Add more product-card blocks if needed -->

            </div>
        </div>
    </div>


    <div style="display:flex;flex-direction:row;gap:25%;justify-content:center;align-items:center;margin-top:2%;margin-bottom:2%">
       
        <a href="{{ route('quotations.product_details') }}" class="btn btn-outline-secondary"style="width:15%" >Back</a>
        <a href="{{ route('quotations.client_details') }}" class="btn btn-outline-secondary" id="confirm" style="width:22%">Confirm Order</a>
        

    </div>
</div>

<!-- Filter Sidebar -->
<div id="filterSidebar" class="position-fixed bg-white shadow-lg p-4" style="right: -300px; top: 0; height: 100vh; width: 300px; transition: 0.3s;">
    <h5>Filter Options</h5>
    <hr>
    <div>
        <h6>Zone</h6>
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

<!-- JavaScript Logic -->
<script>
    // Open/Close filter sidebar
    document.getElementById('filterBtn').addEventListener('click', function () {
        document.getElementById('filterSidebar').style.right = '0';
    });
    document.getElementById('closeFilter').addEventListener('click', function () {
        document.getElementById('filterSidebar').style.right = '-300px';
    });

    const selectBtn = document.getElementById('selectAll');
    const selectImg = selectBtn.querySelector('img');

    let allSelected = false;
    selectBtn.addEventListener('click', function () {
        allSelected = !allSelected;
        document.querySelectorAll('.selectItem').forEach(cb => cb.checked = allSelected);

        // Toggle image src
        selectImg.src = allSelected
            ? '/img/icons8-select-all-50.png'
            : '/img/icons8-select-all-50.png';
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Event listener for delete button
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        
        // Confirm before deletion
        if (confirm("Are you sure you want to delete this product?")) {
            // Find the parent product card and remove it from the DOM
            const productCard = btn.closest('.product-card');
            productCard.remove();
        }
    });
});

</script>
<script>
    function deleteSelectedProducts() {
    const selectedProducts = document.querySelectorAll('.product-checkbox:checked');

    if (selectedProducts.length > 0) {
        if (confirm("Are you sure you want to delete the selected products?")) {
            selectedProducts.forEach(cb => {
                const productCard = cb.closest('.product-card');
                if (productCard) {
                    productCard.remove();
                }
            });
        }
    } else {
        alert("Please select at least one product to delete.");
    }
}

</script>


@endsection
