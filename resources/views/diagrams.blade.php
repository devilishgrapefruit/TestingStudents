@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('title')
    <?php echo $dictionary->DIAGRAMS; ?>
@endsection
@section('content')
<section>
    <div class="content-container">
            <img src="{{route('diagramRating')}}"/>
            <img src="{{route('diagramActivity')}}"/>
    </div>
</section>
    <div class="content-container-2">
            <img src="{{route('diagramStudents')}}"/>
    </div>
@endsection

