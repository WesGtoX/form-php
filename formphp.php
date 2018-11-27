<?php
    $users = @json_decode(file_get_contents('users.json'), true);

    if(!$users)
        $users = array();

    if(isset($_POST['user'])) {

        $users[] = $_POST['user'];

        $file = fopen('users.json', 'w');
        fwrite($file, json_encode($users));

        fclose($file);
    }
    
    header("Location: showformphp.php");
?>
