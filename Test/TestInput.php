<?php

require_once "../Helper/Input.php";

$name = input("Nama");
echo "Hello $name" . PHP_EOL;

$semester = input("Semester");
echo "$name Mahasiswa Semester $semester";