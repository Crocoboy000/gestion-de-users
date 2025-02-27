<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS.ON - Professional User Management</title>
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
.box-pro:hover{
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.40);
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
</style>
<body class="font-sans antialiased">
    @props(['onlineUsers'])
    <x-navbar clients="" admins="" friends="" />
    <x-hero :onlineUsers="$onlineUsers" />
    <x-footer />
    <script src="../js/app.js"></script>
</body>
</html>
