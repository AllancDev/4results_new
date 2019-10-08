<?php 
    if($_SERVER['REMOTE_ADDR'] == '::1') {
        define("ENVIRONMENT", 'development');
    } else {
        define("ENVIRONMENT", 'production');
    }