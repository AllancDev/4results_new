<?php
    require "environment.php";

    if(ENVIRONMENT == 'prod') { // Caso a aplicação esteja em produção
    
        define('DB_HOST', 'mysql.digitalsmartbr.com.br'); // DB_HOST -> Endereço do banco de dados.
        define('DB_USER', 'digitalsmartbr'); // DB_USER -> Usuario do Banco de dados.
        define('DB_PASS', 'Selftech@'); // DB_PASS -> Senha do Usuario do Banco de dados.
        define('DB_NAME', 'db_4results'); // DB_NAME -> Nome do Banco de dados.
    
    } else { // Caso aplicação esteja em ambiente de desenvolvimento.
    
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'db_4results');
    
    }
    try {
        $Conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS ); // Conectar com banco PDO.
        $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Exibir erros.
        $Conn -> exec("set names utf8"); // Setando como utf8.
    } catch(PDOException $e) {
        echo $e -> getMessage(); // Caso haver um erro.
    }
?>

