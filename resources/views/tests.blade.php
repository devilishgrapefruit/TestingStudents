@php
require_once(app_path().'/includes/constants.php');
require_once(app_path().'/includes/login.php');
$dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('title')
<?php echo $dictionary->TESTS; ?>
@endsection
@section('content')
<div class = "pdfcontainer" >
<div class = "pdf" >
<h2 class="h_settings">PDF</h2>
    <form class = "pdfform" enctype="multipart/form-data" action="{{route('saveFile')}}" method="POST">
        @csrf
        <input type="hidden" name="MAX_FILE_SIZE" value="30000000000" />
        <div>
            <?php echo $dictionary->SEND_THIS_FILE ?>:
            <label for="uploadbtn" class="uploadButton">
            <?php echo $dictionary->UPLOAD_FILE ?>
            </label>
            <div class="list-pdf"></div>
            <input
                style="opacity: 0; z-index: -1;"
                type="file" name="userfile" id="uploadbtn"
                onchange='document.querySelector(".uploadButton + div").innerHTML = Array.from(this.files).map(f => f.name).join("<br />")'
            />
        </div>
        <input class = "button_setting" type="submit" value="<?php echo $dictionary->SEND_FILE ?>" />
    </form>
</div>
<div class = "pdf" >
    <h2 class="h_settings" ><?php echo $dictionary->UPLOADING_FILES ?></h2>
    <?php
    use Predis\Client;
    $redis = new Client([
        'scheme' => 'tcp',
        'host'   => 'redis',
        'port'   => 6379,
    ]);
    $filenames = $redis->keys('*');
        echo "<ul>";
        foreach ($filenames as $filename) {
            echo "<li><a href=\"http://localhost:27/{$filename}\">{$filename}</a></li>";
        }
        echo "</ul>";
    ?>

    </div>
    </div>
<h2 class="h_settings"><?php $dictionary->TESTS ?></h2>
<form class = "settings" action="{{ route ('addTest') }}" method="post">
    <p><?php $dictionary->TITLE ?>е: <input type="text" name="title" /></p>
    <p><?php $dictionary->DISCIPLINE ?>: <input type="text" name="discipline" /></p>
    <p><?php $dictionary->AUTHOR ?>: <input type="text" name="author" /></p>
    <p><input type="submit" /></p>
</form>
<div class="content-container">
    <ul class = "setting"> <?php echo $dictionary->TESTS ?>
        @foreach($tests as $test)
            <li class = "setting"> {{$test -> title}}; </li>
            <li class = "setting"> {{$test -> discipline}}>
            <li class = "setting"> {{$test -> author_id}}; </li>
        @endforeach
    </ul>
</div>
@endsection

