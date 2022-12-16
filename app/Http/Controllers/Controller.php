<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Predis\Client;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sessionStart(){
        session_start();
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => 'redis',
            'port'   => 6379,
        ]);

        $redis_data = json_decode($redis->get($_SERVER['PHP_AUTH_USER']));

        if (!$redis_data) {
            $default_data = [
                "language" => 'ru',
                "theme" => 'light',
                'name' => '',
            ];

            $default_data_redis = json_encode($default_data);

            $redis->set($_SERVER['PHP_AUTH_USER'], $default_data_redis);

            $redis_data = json_decode($default_data_redis);
        }

        $_SESSION['language'] = $redis_data->language;
        $_SESSION['theme'] = $redis_data->theme;
        $_SESSION['name'] = $redis_data->name;
    }
    public function setSettings(){
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => 'redis',
            'port'   => 6379,
        ]);
        $redis_data = json_decode($redis->get($_SERVER['PHP_AUTH_USER']));
        $saved_name = $_POST['name'] === "" ? $redis_data->name : $_POST['name'];
        $data_redis = json_encode([
            "language" => $_POST['language'],
            "theme" => $_POST['theme'],
            'name' => $saved_name
        ]);

        $redis->set($_SERVER['PHP_AUTH_USER'], $data_redis);

        $_SESSION['language'] = $_POST['language'];
        $_SESSION['theme'] = $_POST['theme'];
        $_SESSION['name'] = $saved_name;

        redirect()->route('profile');
    }


    public function saveFile(){
        require_once(app_path().'/includes/constants.php');
        require_once(app_path().'/includes/login.php');
        $dictionary = $dict[$_SESSION['language']];
        $redis = new Client([
            'scheme' => 'tcp',
            'host'   => 'redis',
            'port'   => 6379,
        ]);
        if (substr($_FILES['userfile']['name'], -4) == ".pdf"){
            $file_data_redis = json_encode($file_data);
            $redis->set($_FILES['userfile']['name'], file_get_contents($_FILES['userfile']['tmp_name']));
            redirect()->route('tests');
        }
        return $dictionary->PDF;
    }




}
