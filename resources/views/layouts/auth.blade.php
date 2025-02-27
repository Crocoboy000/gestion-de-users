<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'USERS.ON') }} - Authentication</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    @push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'figtree', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .left-panel {
            width: 45%;
            padding: 20px;
        }

        .right-panel {
            width: 80%;
            padding: 20px;
            background: #f8f9fa;
        }

        .navbar {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand, .navbar-title {
            color: #333;
            font-weight: 600;
        }

        .email-input {
            margin-bottom: 15px;
        }

        .email-input:focus {
            border-color: #2c3e50;
            box-shadow: 0 0 0 3px rgba(44,62,80,0.2);
        }

        .password-input {
            background-color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
        }

        .remember-btn {
            margin-top: 15px;
        }

        .forgot-password-btn {
            color: #666;
            text-decoration: none;
        }

        .auth-links {
            display: flex;
            gap: 20px;
        }

        .auth-link {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .auth-link:hover {
            color: #1a5f7c;
        }

        .social-login-btn {
            display: flex;
            gap: 20px;
        }
    </html>
