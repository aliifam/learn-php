<?php

function input(string $message): string {
    
    echo "$message : ";

    $user_input = fgets(STDIN);

    return trim($user_input);
}