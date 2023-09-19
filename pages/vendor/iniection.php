<?
function codeIniection($query)
{
    $query = urldecode($query);
    $query = strip_tags($query);
    $query = trim($query . "=");
    $query = strtr($query, "+&=/", '     ');
};