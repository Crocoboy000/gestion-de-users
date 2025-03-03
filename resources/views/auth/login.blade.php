<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In - USERS.ON</title>
  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>

/* From Uiverse.io by Smit-Prajapati */
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
From Uiverse.io by nima-mollazadeh
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
/* From Uiverse.io by andrew-demchenk0 */
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
.error {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            background-color: #fef2f2;
            color: #b91c1c;
            border-radius: 0.375rem;
            border-left: 4px solid #b91c1c;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            animation: slideDown 0.5s ease-out forwards, fadeIn 0.5s ease-out forwards;
            transform: translateY(-100%);
            opacity: 0;
        }

        .error__icon {
            margin-right: 0.75rem;
            flex-shrink: 0;
        }

        .error__title {
            flex-grow: 1;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .close-animation {
            animation: slideUp 0.4s ease-in forwards, fadeOut 0.4s ease-in forwards;
        }

        @keyframes slideUp {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-100%);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
  </style>


</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    @if ($errors->any())
    <div class="error absolute top-12">
        <div class="error__icon">
            <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z" fill="#393a37"></path></svg>
        </div>
        <div class="error__title">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        <button class="text-gray-600 hover:bg-white/10 p-1 rounded-md transition-colors ease-linear" onclick="this.parentElement.style.display='none';">
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
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <input required class="input" type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">

            <!-- Success Alert -->
            @if(session('status'))
            <div role="alert" class="rounded-xl border border-gray-100 bg-white p-4 dark:border-gray-800 dark:bg-gray-900">
                <div class="flex items-start gap-4">
                    <span class="text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>

                    <div class="flex-1">
                        <strong class="block font-medium text-gray-900 dark:text-white">Success</strong>
                        <p class="mt-1 text-sm text-gray-700 dark:text-gray-200">{{ session('status') }}</p>
                    </div>

                    <button class="text-gray-600 hover:bg-white/10 p-1 rounded-md transition-colors ease-linear" onclick="this.parentElement.parentElement.style.display='none';">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            @endif
            <input required class="input" type="password" name="password" id="password" placeholder="Password">
            <div class="flex justify-between items-center">
                <label class="cyberpunk-checkbox-label flex items-center">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    <span>Remember me</span>
                </label>
                    <span class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password ?</a></span>
            </div>


            <input class="login-button" type="submit" value="Sign In">
        </form>

    <div class="social-account-container">
            <span class="title">Or Sign in with</span>
                <!-- From Uiverse.io by Lokesh1379 -->
<div class="parent">
    <div class="child child-1">
      <button class="button btn-1-twit">
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#1e90ff"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
    </button>
    </div>
    <div class="child child-2">
      <button class="button btn-2">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#ff00ff"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></button>
    </div>
    <div class="child child-3">
      <button class="button btn-3">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></button>
    </div>
    <div class="child child-4">
      <button class="button btn-4">
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="#4267B2"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></button>
  </div>
</div>
    <button class="btn-1">
        <a href="{{ route('register') }}">
            <div class="original">Signup</div>
            <div class="letters">
              <span>S</span>
              <span>I</span>
              <span>G</span>
              <span>N</span>
              <span>U</span>
              <span>P</span>
            </div>
          </a>
        </button>

    </div>
    <script>
        function closeAlert(element) {
            // Add the close animation class
            element.classList.add('close-animation');

            // Wait for animation to complete before removing the element
            setTimeout(function() {
                element.style.display = 'none';
            }, 400); // Match this to your animation duration
        }
    </script>

</body>
</html>
