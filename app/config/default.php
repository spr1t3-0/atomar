<?php 

# Database connection profiles
const DB_Connections = [
    "PRODUCTION" => [
        "HOST" => "",
        "NAME" => "",
        "USERNAME" => "",
        "PASSWORD" => "",
    ], 
    "DEVELOPMENT" => [
        "HOST" => "",
        "NAME" => "",
        "USERNAME" => "",
        "PASSWORD" => ""
    ]
];

# Current environment
const ENVIRONMENT = "DEVELOPMENT";

# App Name
const APP_NAME = "atomar";

# App Root Directory
define('APP_ROOT', dirname(__FILE__, 2));

