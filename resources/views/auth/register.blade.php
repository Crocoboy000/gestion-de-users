<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up - USERS.ON</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .container {
      max-width: 370px;
      min-height: 500px;
      background: #F8F9FD;
      background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
      border-radius: 40px;
      padding: 23px 30px;
      border: 5px solid rgb(255, 255, 255);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
      margin: 20px;
    }

    .heading {
      text-align: center;
      font-weight: 900;
      font-size: 30px;
      color: rgb(16, 137, 211);
    }

    .form {
      margin-top: 20px;
    }

    .form .input {
      width: 100%;
      background: white;
      border: none;
      padding: 15px 20px;
      border-radius: 20px;
      margin-top: 15px;
      box-shadow: #cff0ff 0px 10px 10px -5px;
      border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
      color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
      color: rgb(170, 170, 170);
    }

    .form .input:focus {
      outline: none;
      border-inline: 2px solid #12B1D1;
    }

    .form .forgot-password {
      display: block;
      margin-top: 10px;
      margin-left: 10px;
    }

    .form .forgot-password a {
      font-size: 11px;
      color: #0099ff;
      text-decoration: none;
    }

    .form .login-button {
      display: block;
      width: 100%;
      font-weight: bold;
      background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
      color: white;
      padding-block: 15px;
      margin: 20px auto;
      border-radius: 20px;
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
      border: none;
      transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
      transform: scale(1.03);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    .form .login-button:active {
      transform: scale(0.95);
      box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    .social-account-container {
      margin-top: 25px;
    }

    .social-account-container .title {
      display: block;
      text-align: center;
      font-size: 10px;
      color: rgb(170, 170, 170);
    }

    .agreement {
      display: block;
      text-align: center;
      margin-top: 15px;
    }

    .agreement a {
      text-decoration: none;
      color: #0099ff;
      font-size: 9px;
    }
    .logo-gradient {
      background-image: linear-gradient(45deg, #3b82f6, #1e40af, #000000);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-align: center;
    }
    /* From Uiverse.io by Lokesh1379 */
    .parent {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .child {
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      transform-style: preserve-3d;
      transition: all 0.5s ease-in-out;
      border-radius: 50%;
      margin: 0 5px;
    }

    .child:hover {
      background-color: white;
      background-position: -100px 100px, -100px 100px;
      transform: rotate3d(0.5, 1, 0, 30deg);
      transform: perspective(180px) rotateX(60deg) translateY(2px);
      box-shadow: 0px 10px 10px rgb(1, 49, 182);
    }

    button {
      border: none;
      background-color: transparent;
      font-size: 20px;
    }

    .button:hover {
      width: inherit;
      height: inherit;
      display: flex;
      justify-content: center;
      align-items: center;
      transform: translate3d(0px, 0px, 15px) perspective(180px) rotateX(-35deg) translateY(2px);
      border-radius: 50%;
    }
    /* From Uiverse.io by adamgiebl */
    .cyberpunk-checkbox {
      appearance: none;
      width: 20px;
      height: 20px;
      /* margin-top: 5px; */
      border: 2px solid #30cfd0;
      border-radius: 5px;
      background-color: transparent;
      display: inline-block;
      position: relative;
      margin-right: 5px;
      cursor: pointer;
    }

    .cyberpunk-checkbox:before {
      content: "";
      background-color: #0099ff;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      width: 10px;
      height: 10px;
      border-radius: 3px;
      transition: all 0.3s ease-in-out;
    }

    .cyberpunk-checkbox:checked:before {
      transform: translate(-50%, -50%) scale(1);
    }

    .cyberpunk-checkbox-label {
      font-size: 11px;
      color: #0099ff;
      margin-left: 10px;
      margin-top: 13px;
      text-decoration: none;
    }

    /* From Uiverse.io by nima-mollazadeh */
    .btn-1,
    .btn-1 *,
    .btn-1 :after,
    .btn-1 :before,
    .btn-1:after,
    .btn-1:before {
      border: none;
      box-sizing: border-box;
    }

    .btn-1 {
      scale: 0.8;
      -webkit-tap-highlight-color: transparent;
      background-color: #000;
      background-image: none;
      color: #fff;
      font-family:
        ui-sans-serif,
        system-ui,
        -apple-system,
        BlinkMacSystemFont,
        Segoe UI,
        Roboto,
        Helvetica Neue,
        Arial,
        Noto Sans,
        sans-serif,
        Apple Color Emoji,
        Segoe UI Emoji,
        Segoe UI Symbol,
        Noto Color Emoji;
      cursor: pointer;
      font-size: 100%;
      line-height: 1.5;
      margin-left: 4.5rem;
      padding: 2;
    }

    .btn-1:disabled {
      cursor: default;
    }

    .btn-1:-moz-focusring {
      outline: auto;
    }

    .btn-1 svg {
      display: block;
      vertical-align: middle;
    }

    .btn-1 [hidden] {
      display: none;
    }

    .btn-1 {
      border: 1px solid;
      border-radius: 999px;
      box-sizing: border-box;
      display: block;
      font-weight: 900;
      overflow: hidden;
      padding: 1.2rem 3rem;
      position: relative;
      text-transform: uppercase;
    }

    .btn-1 .original {
      background: #ffffff;
      color: #000;
      display: grid;
      inset: 0;
      place-content: center;
      position: absolute;
      transition: transform 0.3s cubic-bezier(0.87, 0, 0.13, 1);
    }

    .btn-1:hover .original {
      transform: translateY(100%);
    }

    .btn-1 .letters {
      display: inline-flex;
    }

    .btn-1 span {
      opacity: 0;
      transform: translateY(-15px);
      transition:
        transform 0.3s cubic-bezier(0.87, 0, 0.13, 1),
        opacity 0.3s;
    }

    .btn-1 span:nth-child(2n) {
      transform: translateY(15px);
    }

    .btn-1:hover span {
      opacity: 1;
      transform: translateY(0);
    }

    .btn-1:hover span:nth-child(2) {
      transition-delay: 0.1s;
    }

    .btn-1:hover span:nth-child(3) {
      transition-delay: 0.2s;
    }

    .btn-1:hover span:nth-child(4) {
      transition-delay: 0.3s;
    }

    .btn-1:hover span:nth-child(5) {
      transition-delay: 0.4s;
    }

    .btn-1:hover span:nth-child(6) {
      transition-delay: 0.5s;
    }

    /* Error alert styling */
    .error {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      width: 320px;
      padding: 12px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: start;
      background: #FCE8DB;
      border-radius: 8px;
      box-shadow: 0px 0px 5px -3px #111;
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%) translateY(-100%);
      opacity: 0;
      z-index: 1000;
      animation: slideDownError 0.5s forwards;
    }

    .error__icon {
      width: 20px;
      height: 20px;
      transform: translateY(-2px);
      margin-right: 8px;
    }

    .error__icon path {
      fill: #EF665B;
    }

    .error__title {
      font-weight: 500;
      font-size: 14px;
      color: #71192F;
    }

    .error__close {
      width: 20px;
      height: 20px;
      cursor: pointer;
      margin-left: auto;
    }

    .error__close path {
      fill: #71192F;
    }

    /* Success alert styling */
    .success {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      width: 320px;
      padding: 12px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: start;
      background: #E3F9E5;
      border-radius: 8px;
      box-shadow: 0px 0px 5px -3px #111;
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%) translateY(-100%);
      opacity: 0;
      z-index: 1000;
      animation: slideDownSuccess 0.5s forwards;
    }

    .success__icon {
      width: 20px;
      height: 20px;
      transform: translateY(-2px);
      margin-right: 8px;
    }

    .success__icon path {
      fill: #34C759;
    }

    .success__title {
      font-weight: 500;
      font-size: 14px;
      color: #1D7D31;
    }

    /* Alert animations */
    @keyframes slideDownError {
      from {
        transform: translateX(-50%) translateY(-100%);
        opacity: 0;
      }
      to {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
      }
    }

    @keyframes slideDownSuccess {
      from {
        transform: translateX(-50%) translateY(-100%);
        opacity: 0;
      }
      to {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
      }
    }

    @keyframes slideUp {
      from {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
      }
      to {
        transform: translateX(-50%) translateY(-100%);
        opacity: 0;
      }
    }

    .slide-up {
      animation: slideUp 0.5s forwards;
    }
/* From Uiverse.io by gharsh11032000 */
.radio-buttons-container {
  display: flex;
  align-items: center;
  gap: 24px;
}

.radio-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
}

.radio-button__input {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

.radio-button__label {
  display: inline-block;
  padding-left: 30px;
  margin-bottom: 10px;
  position: relative;
  font-size: 16px;
  color: #0099ff;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
}

.radio-button__custom {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid #555;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
}

.radio-button__input:checked + .radio-button__label .radio-button__custom {
  transform: translateY(-50%) scale(0.9);
  border: 5px solid #4c8bf5;
  color: #4c8bf5;
}

.radio-button__input:checked + .radio-button__label {
  color: #1e40af;
  font-weight: 700;
}

.radio-button__label:hover .radio-button__custom {
  transform: translateY(-50%) scale(1.2);
  border-color: #4c8bf5;
  box-shadow: 0 0 10px #4c8bf580;
}



  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @if ($errors->any())
    <div class="error">
        <div class="error__icon">
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z" fill="#393a37"></path></svg>
        </div>
        <div class="error__title">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        <button onclick="closeAlert(this.parentElement)" class="text-gray-600 hover:bg-white/10 p-1 rounded-md transition-colors ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    @endif

    @if(session('status'))
    <div class="success">
        <div class="success__icon">
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="#34C759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 4L12 14.01l-3-3" stroke="#34C759" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="success__title">
            {{ session('status') }}
        </div>
        <button onclick="closeAlert(this.parentElement)" class="text-gray-600 hover:bg-white/10 p-1 rounded-md transition-colors ease-linear">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    @endif

    <div class="container">
        <div class="text-center">
            <span class="text-2xl font-bold logo-gradient">USERS.ON</span>
        </div>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <!-- Registration Fields -->
            <input required class="input" type="text" name="name" id="name" placeholder="Full Name" value="{{ old('name') }}">

            <input required class="input" type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">

            <input required class="input" type="password" name="password" id="password" placeholder="Password">

            <input required class="input mb-5" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">

            <!-- Role Selection -->
            <div class="radio-buttons-container flex justify-around items-center">
                <div class="radio-button">
                    <input name="role" id="Client" class="radio-button__input" type="radio" value="Client" {{ old('role') === 'Client' ? 'checked' : '' }}>
                    <label for="Client" class="radio-button__label">
                        <span class="radio-button__custom text-blue-500"></span>
                        Client
                    </label>
                </div>
                <div class="radio-button">
                    <input name="role" id="Admin" class="radio-button__input" type="radio" value="Admin" {{ old('role') === 'Admin' ? 'checked' : '' }}>
                    <label for="Admin" class="radio-button__label">
                        <span class="radio-button__custom text-blue-500"></span>
                        Admin
                    </label>
                </div>
            </div>


            <input class="login-button" type="submit" value="Sign Up">
        </form>

        <div class="agreement">
            <a href="{{ route('login') }}">Already have an account? Sign In</a>
        </div>
    </div>

    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.error, .success');

            alerts.forEach(alert => {
                setTimeout(function() {
                    closeAlert(alert);
                }, 5000);
            });
        });

        // Function to close alert with animation
        function closeAlert(element) {
            element.classList.add('slide-up');

            // Remove the element after animation completes
            setTimeout(function() {
                if (element.parentNode) {
                    element.parentNode.removeChild(element);
                }
            }, 500);
        }
    </script>
</body>
</html>
