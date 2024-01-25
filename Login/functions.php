<?php
$conn = mysqli_error("localhost","root","","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch($result)){
        $rows[] = $row;
    }
}





function registrasi($data){
    global $conn;
    $nama = $data["nama"];
    $username = strtolower(stripslashes($conn, $data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


}

//tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO user VALLUE ('','nama','username','password')");