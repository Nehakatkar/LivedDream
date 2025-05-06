@extends('layouts.app')
@section('content')
    <div class="content ">
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">Create Category</h2>
            <button class="btn btn-primary btn-save" type="submit" id="category">Save Category</button>
        </div>


        <div class="row mt-3">
            <!-- Company Details -->
            
            <div class="card" style="width:60%"> <!-- Adjust width using Bootstrap class -->
                <div class="mb-5">
                    <h5>Category Details</h5>
                    <div class="mt-4">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control w-100" placeholder="Enter category name">
                    </div>
                </div>
            </div>

            
            <!-- Godown & Sales Details -->
         
        </div>

      
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const mainContent = document.getElementById('mainContent');
        const saveBtn = document.getElementById('category');
        const scrollThreshold = 100;

            if (mainContent && saveBtn) {
                mainContent.addEventListener('scroll', () => {
                    if (mainContent.scrollTop > scrollThreshold) {
                        saveBtn.classList.add('fixed-save-btn');
                    } else {
                        saveBtn.classList.remove('fixed-save-btn');
                    }
                });
            } else {
                console.warn('Main content or Save button not found');
            }
        });

    </script>
    
@endsection
