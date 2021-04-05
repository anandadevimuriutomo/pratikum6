<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi database MySQL</h1> 
        <?php
        $con = mysqli_connect("localhost","root","","mydb"); //membuat variabel yang menampung  hasil koneksi kepada database

        //mengecek koneksi 
        if(mysqli_connect_error()){ //membuat kondisi jika koneksi error
            echo "Failed to connect to MySQL:" . mysqli_connect_error(); //jika koneksi ke mysql error maka akan menampilkan teks 
            ;
            exit(); //program selesai 
        }
?>
</body>
</html> 