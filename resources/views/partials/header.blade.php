<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/scss/index.scss', 'resources/js/app.js'])

    <title>DeskDeal</title>
</head>
<body>

<nav>
    <div class="logo">
        <img class="logo-img" src="{{ asset('/images/logo.png') }}" alt="DeskDeal Logo">
        <h4><a href="{{ route('home') }}">DeskDeal</a></h4>
    </div>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('marketplace') }}">Marketplace</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
    <div class="user-menu">
        <p>login</p>
        <p>register</p>
    </div>
</nav>