<?php
$db=pg_connect('host=localhost dbname=sekolah user=postgres password=NamikZ743');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
