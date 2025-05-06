<x-guest-layout>


  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <div class="login-container">
    <div class="d-flex flex-column login-box">
      <!-- Logo -->
      <div class="logo">
        <img src="img/WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="logo">
        <span class="head">Lived Dream</span>
      </div>

      <!-- Toggle -->
      <div class="toggle-container" id="roleToggle">
        <button class="toggle-option active" id="employeeBtn">Employee</button>
        <button class="toggle-option" id="adminBtn">Admin</button>
      </div>

      <!-- <spam class="">Welcome Back 👋</spam> -->
      <p class="font-bold text-xl">Welcome Back 👋</p>
      

      <!-- Login Form -->
      <form method="POST" action="{{ route('login') }}" class="form-group">
        @csrf

        <div >
          <x-input-label for="email" :value="('Email')" />
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Example@gmail.com" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="from-group mt-4">
          <x-input-label for="password" :value="('Password')" />
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- <div class="block mt-4">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
          </label>
        </div> -->

        <div class="button-group  mt-4">
          @if (Route::has('password.request'))
            <a class="text-sm font-bold text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 no-underline" href="{{ route('password.request') }}">
                

            {{ __('Forgot password?') }}
          </a>
          @endif

         
        </div>
        <x-primary-button class="login ms-3 w-full justify-center text-center">
            {{ __('Log in') }}
        </x-primary-button>
      </form>

      <!-- <p class="signup-text">Don't have an account? <a href="#">Sign up</a></p> -->
    </div>

    <!-- Image Section -->
    <div class="image-side">
      <img src="img/login image.png" alt="Login Image">
    </div>
  </div>

  <script>
    const employeeBtn = document.getElementById('employeeBtn');
    const adminBtn = document.getElementById('adminBtn');

    employeeBtn.addEventListener('click', () => {
      employeeBtn.classList.add('active');
      adminBtn.classList.remove('active');
      console.log("Role: Employee");
    });

    adminBtn.addEventListener('click', () => {
      adminBtn.classList.add('active');
      employeeBtn.classList.remove('active');
      console.log("Role: Admin");
    });
  </script>

  <style>
    
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      font-weight: 100;
      font-style: normal;
    
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .login-container {
      background: #fff;
      padding: 15px;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      display: flex;
      width: 90%;
      height: 80%;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      width: 60%;
      margin-bottom: 10px;
    }

    .logo img {
      height: 50px;
      width: 50px;
    }

    .login-box {
      width: 50%;
      padding: 5px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      
    }

    .image-side {
      width: 50%;
    }

    .image-side img {
      width: 100%;
      height: 100%;
    }

    .toggle-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 300px;
      margin: 10px auto;
      background-color: #ddd;
      border: 2px solid #ccc;
      border-radius: 6px;
      overflow: hidden;
      height: 45px;
    }

    .toggle-option {
      flex: 1;
      text-align: center;
      padding: 10px 0;
      border: none;
      background-color: transparent;
      font-weight: bold;
      color: #333;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .toggle-option.active {
      background-color: #fff;
      color: #000;
    }

    .form-group {
      width: 75%;
      max-width: 300px;
      /* margin: 10px auto; */
    }

    .head {
      color: black;
      font-weight: bold;
      font-size: x-large;
    }
    .button-group{
      width: 100%;
      max-width: 300px;
      margin: 10px auto;
      display: flex;
      justify-content: flex-end;

    }

    .login{
      width:100%;
      text-align:center;
    }

    /* .signup-text {
      text-align: center;
      margin-top: 15px;
    } */

    /*Tablet View */
     @media (max-width: 768px) {
          .login-container {
        flex-direction: column;
        width: 500px;
        height: auto;
        box-shadow: none;
        padding: 10px;
        height:700px;
        /* background:purple; */
      }

      .login-box {
        width: 100%;
        padding: 15px;
        height:100%;
        /* align-items: stretch; */
        /* background:purple; */
        
      }

      .logo {
        justify-content: center;
        text-align: center;
        width: 36%;
      }

      .logo img {
        display: block;
        margin: 0 auto;
      }

      .head {
        font-size: medium;
        display: block;
        text-align: center;
      }

      .form-group {
        width: 100%;
        max-width: none;
        
      }

      .button-group {
        width: 100%;
        max-width: none;
        justify-content: flex-end;
      }

      .login {
        width: 100%;
      }

      .toggle-container {
        width: 100%;
        height: 35px;
      }

      .image-side {
        display: none;
      }
    } 

    /* Mobile View
@media (max-width: 480px) {
  body {
    margin: 5px;
    padding: 5px;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f4f4f4;
    width: 100%;
    height: 100vh;
    align-items:center;
    justify-content:center;
  }

  .login-container {
    flex-direction: column;
    width: 370px;
    height: auto;
    box-shadow: none;
    padding: 20px;
    height:500px;
    background:purple;
  }

  .login-box {
    width: 100%;
    padding: 15px;
    align-items: stretch;
  }

  .logo {
    justify-content: center;
    text-align: center;
    width: 100%;
  }

  .logo img {
    display: block;
    margin: 0 auto;
  }

  .head {
    font-size: medium;
    display: block;
    text-align: center;
  }

  .form-group {
    width: 100%;
    max-width: none;
    
  }

  .button-group {
    width: 100%;
    max-width: none;
    justify-content: flex-end;
  }

  .login {
    width: 100%;
  }

  .toggle-container {
    width: 100%;
    height: 35px;
  }

  .image-side {
    display: none;
  }
} */


  </style>
</x-guest-layout>
