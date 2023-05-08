<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $usia = $_POST['usia'];
        $pesan = $_POST['pesan'];
        header("location:https://api.whatsapp.com/send/?phone=6281364455247&text=Hallo%20saya%20$name%20berusia%20$usia%20$pesan");
    }
    else{
        echo "
        <script>
            window.location=history.go(-1);
        </script>
        ";
    }
?>