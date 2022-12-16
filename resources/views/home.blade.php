@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('title')
    <?php echo $dictionary->MAIN; ?>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Успешный вход
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
