<?php
// Dump and die func
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// Dynamic Router with fancy name
function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}