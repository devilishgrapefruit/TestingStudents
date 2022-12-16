<?php
//if (!isset($_SERVER['PHP_AUTH_USER'])) {
//    header('WWW-Authenticate: Basic realm="My Realm"');
//    header('HTTP/1.0 401 Unauthorized');
//    echo 'Обновите страницу';
//    exit;
//}
//require_once("database.php");
//$database = new Database();
//$db = $database->getConnection();
//$stmt = $db->prepare("SELECT `password` FROM users WHERE `login`=?");
//$res = $stmt->bind_param('s', $_SERVER['PHP_AUTH_USER']);
//$stmt->execute();
//$result = $stmt->get_result();
//$user = $result->fetch_array(MYSQLI_ASSOC);
//
//if ($_SERVER['PHP_AUTH_PW'] !== $user['password']) {
//    header('WWW-Authenticate: Basic realm="My Realm"');
//    header('HTTP/1.0 401 Unauthorized');
//    exit;
//}
session_start();
    $redis = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => 'redis',
        'port'   => 6379,
    ]);
    if (Auth::user() !=NULL)
         $redis_data = json_decode($redis->get(Auth::user()->name));
    else
        $redis_data = null;
    if (!$redis_data) {
        $default_data = [
            "language" => 'ru',
            "theme" => 'light',
            'name' => '',
        ];

        $default_data_redis = json_encode($default_data);
        if( Auth::user() != NULL)
            $redis->set(Auth::user()->name, $default_data_redis);
        else
            $redis->set('guest', $default_data_redis);

        $redis_data = json_decode($default_data_redis);
    }

    $_SESSION['language'] = $redis_data->language;
    $_SESSION['theme'] = $redis_data->theme;
    $_SESSION['name'] = $redis_data->name;

?>
