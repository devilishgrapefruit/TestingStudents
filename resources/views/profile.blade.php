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
    <form class = "settings" action="{{ route ('settings') }}" method="post">
        @csrf
        <h2 class="h_settings"><?php echo $dictionary->USER . "\n " . $_SESSION['name'] ?></h2>
        <h2 class="h_settings"><?php echo $dictionary->SETTINGS ?></h2>
        <div class = "setting">
            <?php echo $dictionary->THEME ?>: <br>
            <label>
                <input type="radio" name="theme"
                       <?php
                       if ($_SESSION['theme'] == THEME::$LIGHT) {
                           echo "checked";
                       }
                       ?>
                       value="light"
                >
                <?php echo $dictionary->LIGHT ?>
            </label>
            <label>
                <input type="radio" name="theme"
                       <?php
                       if ($_SESSION['theme'] == THEME::$DARK) {
                           echo "checked";
                       }
                       ?>
                       value="dark"
                >
                <?php echo $dictionary->DARK ?>
            </label>
        </div>

        <div class = "setting">
            <?php echo $dictionary->LANGUAGE ?>: <br>
            <label>
                <input type="radio" name="language"
                       <?php
                       if ($_SESSION['language'] == LANGUAGE::$RU) {
                           echo "checked";
                       }
                       ?>
                       value="ru"
                >
                <?php echo $dictionary->RUSSIAN ?>
            </label>
            <label>
                <input type="radio" name="language"
                       <?php
                       if ($_SESSION['language'] == LANGUAGE::$EN) {
                           echo "checked";
                       }
                       ?>
                       value="en"
                >
                <?php echo $dictionary->ENGLISH ?>
            </label>
        </div>

        <div class = "setting">
            <label>
                <?php echo $dictionary->NAME ?>:
                <input class="input_name" type="text" name="name" >
            </label>
        </div>
        <div class = "setting">
            <button class = "button_setting" type="submit"> <?php $dictionary->UPDATE ?> </button>
        </div>
    </form>
    </div>
@endsection


