<?php

    require 'db_connect.php';

    $status = $_POST['status'];
    $id = $_POST['id'];

    $sql = mysqli_query($link, 
    "UPDATE task SET status = '".$status."' WHERE id_task = '".$id."'");
 
    if ($link->affected_rows > 0) {
        // Запрос прошел успешно, возвращаем HTTP-код 200
        mysqli_close($link);
        http_response_code(200);
    } else {
        // Запрос не прошел, возвращаем HTTP-код 500
        mysqli_close($link);
        http_response_code(500);    
    }
  
?>