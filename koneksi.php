<?php 

$koneksi = mysqli_connect("localhost", "root", "", "hotel");
session_start();

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = []
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function register($post){
    global $koneksi;
    $username = $post["username"];
    $email = $post["email"];
    $password = $post["password"];
    $level = $post["level"];
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$email', '$password', '$level')");
    if(mysqli_affected_rows($koneksi)){
        echo "
            <script>
                alert('Data Telah Berhasil di Simpan, Silahkan Login!')
                document.location.href = 'index.php';
            </script>
        ";
    }
}

function login($post){
    global $koneksi;
    
}

?>