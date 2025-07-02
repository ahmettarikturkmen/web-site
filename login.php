<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş - Ahmet Tarık</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ikonlar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    

    <?php
    // Kullanıcı adı ve şifre kontrolü
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kullanıcı adı ve şifreyi kontrol et
        if ($username === "g221210087@sakarya.edu.tr" && $password === "g221210087") {
            echo "Hoşgeldiniz, g221210087!!";
            echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";


        } else {
            echo "Kullanıcı adı veya Şifre yanlış!!!";
            echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
            
        }
    }
    ?>

</body>

</html>