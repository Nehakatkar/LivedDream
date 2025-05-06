@extends('layouts.app')
@section('content')

    <div class="content" id="mainContent">
        <!-- Header Section -->
       
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">Create User</h2>
            <button class="btn btn-primary btn-save" type="button" id="user">Save User</button>
        </div>

        <!-- Main Content Section -->
        <div class="row mt-3">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5>User Details</h5>
                        <div class="mt-4">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter Full name" >
                        </div>
                        <div class="mt-4">
                            <label for="user-email">Email</label>
                            <input type="text" id="user-email" name="user-email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="mt-4">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone-number" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="mt-4 d-flex flex-column">
                            <label for="" class="form-label">Role</label>
                            <select name="" id="role">
                                <option value="emp">Employee</option>
                                <option value="admin">Admin</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display Product Image Section -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 d-flex ">
                    <h5>Create Password</h5>
                    <div class="mt-4">
                            <label class="form-label">Create Password</label>
                            <input type="text" name="create-password" class="form-control" placeholder="Password">
                    </div>
                    <div class="mt-4">
                            <label class="form-label">Confirm Password</label>
                            <input type="text" name="confirm-number" class="form-control" placeholder="Confirm Password">
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
   
    <script>
        

        document.addEventListener("DOMContentLoaded", function () {
            const mainContent = document.getElementById('mainContent');
            const saveBtn = document.getElementById('user');

            console.log("mainContent element:", mainContent);
            console.log("saveBtn element:", saveBtn);

            if (mainContent && saveBtn) {
                const scrollThreshold = 100;
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
