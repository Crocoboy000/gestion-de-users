<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS.ON - Professional User Management</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    .hero {
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #bae6fd 100%);
    /* Purple gradient */
}
@media (max-width: 768px) {
.nav-link {
@apply py-4 text-xl;
}
}
.profile-status::before {
    content: '';
    @apply w-2 h-2 rounded-full absolute bottom-0 right-0 border-2 border-white;
}
.active::before { background: #059669; }
.inactive::before { background: #dc2626; }
.profile-status.inactive::before { transform: translateX(calc(100% - 2px)); }
.profile-status.active::before { transform: translateX(calc(100% - 2px)); }
.logo-gradient {
background-image: linear-gradient(45deg, #3b82f6, #1e40af, #000000);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
}
.footer-sec{
    background: linear-gradient(135deg, #f0f9ff 20%, #e0f2fe 50%, #bae6fd 100%);
}
.profile-image {
    background-image: url('https://ui-avatars.com/api/?name=John+Doe&background=2563eb&color=fff');
    background-size: cover;
    background-position: center;
}
.btn-primary {
background: linear-gradient(45deg, #3b82f6, #1e40af);
color: white;
transition: all 0.3s ease;
}

.btn-primary:hover {
background: linear-gradient(45deg, #1e40af, #3b82f6);
transform: translateY(-2px);
}

.btn-secondary {
background: transparent;
border: 2px solid #3b82f6;
color: #1e40af;
position: relative;
overflow: hidden;
}

.btn-secondary::before {
content: '';
position: absolute;
top: 0;
left: -100%;
width: 100%;
height: 100%;
background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.1), transparent);
transition: all 0.4s ease;
}
.box:hover{
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.65);
}
.btn-secondary:hover::before {
left: 100%;
}
.nav-link {
@apply relative text-gray-600 hover:text-blue-700 transition-all duration-300 text-lg font-bold:800;
}

.nav-link::after {
@apply content-[''] absolute bottom-0 left-0 w-0 h-0.5 bg-blue-700 transition-all duration-300;
}
.nav-link:hover::after,
.nav-link.active::after {
    @apply w-full;
}
.nav-link.active {
    @apply text-blue-700;
}
/* From Uiverse.io by gharsh11032000 */
/* .card {
  position: relative;
  width: 400px;
  height: 200px;
  background: white;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  perspective: 1000px;
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.65);
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card svg {
    width: 100px;
    height: 100px;
    fill: #0099ff;
    transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
}

.card__content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: mediumturquoise;
    height: 100%;
    padding: 50px;
    box-sizing: border-box;
    transform: rotateX(-90deg);
    transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover .card__content {
  transform: rotateX(0deg);
}

.card__title {
  margin: 0;
  font-size: 24px;
  color: #0099ff;
  font-weight: 700;
}

.card:hover svg {
  scale: 0;
}

.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #777;
  line-height: 1.4;
} */
/* From Uiverse.io by kamehame-ha */
 /* .cards {
  display: flex;
  flex-direction: column;
  gap: 15px;
} */

.cards .card-pro {
  cursor: pointer;
  transition: 400ms;
}


 .cards .card-pro:hover {
  transform: scale(1.1, 1.1);;
}

.cards:hover > .card-pro:not(:hover) {
  filter: blur(2px);
  transform: scale(0.9, 0.9);
}
/* From Uiverse.io by vinodjangid07 */
.Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background: linear-gradient(45deg, #1e40af, #3b82f6);
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}
nav{
    margin-bottom: 10rem;
}
.sign svg {
  width: 17px;
}
.shadow-lg {
  z-index: 9999; /* Add this */
}

.sign svg path {
  fill: white;
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px ,2px);
}
.button-show {
  line-height: 1;
  text-decoration: none;
  display: inline-flex;
  border: none;
  cursor: pointer;
  align-items: center;
  gap: 0.75rem;
  background-color: var(--clr);
  color: #fff;
  border-radius: 10rem;
  font-weight: 600;
  padding: 0.75rem 1.5rem;
  padding-left: 20px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  transition: background-color 0.3s;
}

.button__icon-wrapper {
  flex-shrink: 0;
  width: 25px;
  height: 25px;
  position: relative;
  color: var(--clr);
  background-color: #fff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  overflow: hidden;
}

.button-show:hover {
  background-color: #000;
}

.button-show:hover .button__icon-wrapper {
  color: #000;
}

.button__icon-svg--copy {
  position: absolute;
  transform: translate(-150%, 150%);
}

.button-show:hover .button__icon-svg:first-child {
  transition: transform 0.3s ease-in-out;
  transform: translate(150%, -150%);
}

.button-show:hover .button__icon-svg--copy {
  transition: transform 0.3s ease-in-out 0.1s;
  transform: translate(0);
}
/* From Uiverse.io by ZAKARIAE48CHELLE */
.input-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  position: relative;
}

.input {
  border-style: none;
  height: 50px;
  width: 50px;
  padding: 10px;
  outline: none;
  border-radius: 50%;
  transition: 0.5s ease-in-out;
  background-color: #1557c0;
  box-shadow: 0px 0px 3px #1557c0;
  padding-right: 40px;
  color: #0099ff;
}

.input::placeholder,
.input {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
  font-size: 17px;
}

.input::placeholder {
  color: #8f8f8f;
}

.icon {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 0px;
  cursor: pointer;
  width: 50px;
  height: 50px;
  outline: none;
  border-style: none;
  border-radius: 50%;
  pointer-events: painted;
  background-color: transparent;
  transition: 0.2s linear;
}

.icon:focus ~ .input,
.input:focus {
  box-shadow: none;
  width: 250px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom: 3px solid #1557c0;
  transition: all 500ms cubic-bezier(0, 0.11, 0.35, 2);
}

</style>
<body class="font-sans antialiased">
    @props(['activeUsers'])
    <x-navbarauth />
    <x-hero :activeUsers="$activeUsers">

    </x-hero>
    <script src="../js/app.js"></script>
</body>
</html>
