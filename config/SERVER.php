<?php
//Parametros de conexion a la base de datos
const HOST = 'localhost';
const DB = 'rpg_pedia';
const USER = 'root';
const PASS = '';

//Parametro unico para conectarse a la base de datos
const SGBD = 'mysql:host ='.HOST.';dbname ='.DB;

//Parametros de encriptacion de passwords
const METHOD = 'AES-256-CBC';
const SECRET_KEY = '$RPG@VIDEOGAMES2024';
const SECRET_IV = '010945';