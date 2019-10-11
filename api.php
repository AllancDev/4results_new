<?php 
    require "./contact/Conn.class.php";

    $stmt = $Conn->query("SELECT * FROM tb_blog ORDER BY id ");
    $user = $stmt->fetchAll();
    echo json_encode($user);

    


