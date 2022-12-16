@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('title')
    <?php echo $dictionary->PROFILE; ?>
@endsection
@section('content')
<h1>Управление пользователями</h1>

<h2>Пользователи</h2>
<form class = "settings" action="{{ route ('addUser') }}" method="post">
    @csrf
    <p><?php echo $dictionary->LOGIN; ?>: <input type="text" name="name" /></p>
    <p><?php echo $dictionary->PASSWORD;?>: <input type="password" name="password" /></p>
    <p><?php echo $dictionary->EMAIL;?>: <input type="text" name="email" /></p>
    <p><input type="submit" /></p>
</form>
<div class="content-container">
<ul class = "setting"> <?php echo $dictionary->USERS ?>
    @foreach($users as $user)
       <li class = "setting"> {{$user -> name}}; </li>
       <li class = "setting"> {{$user -> email}}; </li>
       <li class = "setting"> {{$user -> password}}; </li>
    @endforeach
    </ul>
</div>
@endsection



