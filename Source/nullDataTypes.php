<?php
$name = "Aliif";

$name = null;

echo var_dump(is_null($name));//cek apakah variabel null kalau gak ada var nya undefined

$name2 = "Arief";
unset($name2); //unset value dan variable hilang

//echo var_dump(is_null($name2)); kode ini error undefied var

$contoh = "ini contoh";
$contoh = null;

echo var_dump(isset($contoh)); //is set untuk cek apakah variabel ada dan memiliki nilai