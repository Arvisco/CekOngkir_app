<?php
//data database
$servername = "localhost";
$database = "ongkir";
$username = "root";
$password = "";
// Create connection
$c = mysqli_connect($servername, $username, $password, $database);


function tampil($table)
{
    global $c;
    $result = mysqli_query($c, "SELECT * FROM $table");
    return $result;
}

function tambah($table, $value)
{
    global $c;
    $query = "INSERT INTO $table values $value";
    mysqli_query($c, $query);
    return mysqli_affected_rows($c);
}

function hapus($table, $id)
{
    global $c;
    mysqli_query($c, "DELETE FROM $table WHERE id=$id");
    return mysqli_affected_rows($c);
}

function cari($table, $query)
{
    global $c;
    $result = mysqli_query($c, "SELECT * FROM $table WHERE  $query");
    return $result;
}

function update($table, $query)
{
    global $c;
    $result = mysqli_query($c, "UPDATE $table SET $query");
    return mysqli_affected_rows($c);
}
