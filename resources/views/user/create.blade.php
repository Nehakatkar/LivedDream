@extends('layouts.app')

@section('content')
<div class="content" id="mainContent">
    <form action="{{ route('users.store') }}" id="userForm" method="POST">
        @csrf
        <div style="display:flex;flex-direction:row;gap:30%">
            <h2 class="mb-0">Create User</h2>
            <button class="btn btn-primary btn-save" type="submit" id="user">Save User</button>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5>User Details</h5>

                        <div class="mt-4">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" id="fullname" name="name" class="form-control" placeholder="Enter Full name" autocomplete="off">
                            <span id="error-name" class="text-danger"></span>
                        </div>

                        <div class="mt-4">
                            <label for="user-email" class="form-label">Email</label>
                            <input type="email" id="user-email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off">
                            <span id="error-email" class="text-danger"></span>
                        </div>

                        <div class="mt-4">
                            <label for="phone-number" class="form-label">Phone Number</label>
                            <input type="text" id="phone-number" name="phone" class="form-control" placeholder="Enter Phone Number" autocomplete="off">
                            <span id="error-phone" class="text-danger"></span>
                        </div>

                        <div class="mt-4">
                            <label for="role" class="form-label">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Select Role</option>
                                <option value="0">Employee</option>
                                <option value="1">Admin</option>
                            </select>
                            <span id="error-role" class="text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 d-flex">
                    <div class="card-body">
                        <h5>Create Password</h5>

                        <div class="mt-4">
                            <label for="create-password" class="form-label">Create Password</label>
                            <input type="password" id="create-password" name="password" class="form-control" autocomplete="off">
                            <span id="error-password" class="text-danger"></span>
                        </div>

                        <div class="mt-4">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm-password" name="password_confirmation" class="form-control" autocomplete="off">
                            <span id="error-confirm-password" class="text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('userForm').addEventListener('submit', function (event) {
        let isValid = true;
      
        // Clear previous errors
        document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');

        const name = document.getElementById('fullname').value.trim();
        const email = document.getElementById('user-email').value.trim();
        const phone = document.getElementById('phone-number').value.trim();
        const role = document.getElementById('role').value;
        const password = document.getElementById('create-password').value.trim();
        const confirmPassword = document.getElementById('confirm-password').value.trim();

        if (!name) {
            document.getElementById('error-name').textContent = 'Full name is required.';
            isValid = false;
        }

        if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
            document.getElementById('error-email').textContent = 'A valid email is required.';
            isValid = false;
        }

        // if (!phone || !/^\d{10,15}$/.test(phone)) {
        //     document.getElementById('error-phone').textContent = 'Enter valid phone number';
        //     isValid = false;
        // } 
        if (phone && !/^\d{10,15}$/.test(phone)) {
    document.getElementById('error-phone').textContent = 'Enter valid phone number (10–15 digits).';
    isValid = false;
}


        if (role === "") {
            document.getElementById('error-role').textContent = 'Please select a role.';
            isValid = false;
        }

        if (!password || password.length < 6) {
            document.getElementById('error-password').textContent = 'Password must be at least 6 characters.';
            isValid = false;
        }

        if (confirmPassword !== password) {
            document.getElementById('error-confirm-password').textContent = 'Passwords do not match.';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); // prevent form submission
        }
    });
</script>
@endsection
