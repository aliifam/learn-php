<?php

echo 'Nama : ';
echo 'Aliif Arief';

echo "\nNama : ";
echo "Aliif\t Arief\n";

echo <<<'NOWDOC'
ini adalah penulisan string dengan
style nowdoc yang kayak single quote
sehingga tidak bisa diparsing

NOWDOC;

echo <<<HEREDOC
ini adalah penulisan string dengan 
style heredoc yang kayak double quote
sehingga bisa diparsing
HEREDOC;