<?
session_start();

$link = mysqli_connect("localhost", "root", "", "dtp");
if (!$link) {
    die();
}

error_reporting(E_ALL);
ini_set("display_error", "on");