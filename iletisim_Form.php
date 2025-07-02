<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bilgileri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ikonlar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        
    </style>
</head>
<body>
<table>
        <tr>
            <td>ADI SOYADI:</td>
            <td><b><?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?></b></td>
        </tr>
        <tr>
            <td>CİNSİYET:</td>
            <td><b><?php echo isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : ''; ?></b></td>
        </tr>
        <tr>
            <td>E POSTA ADRESİ:</td>
            <td><b><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?></b></td>
        </tr>
        <tr>
            <td>KATEGORİ:</td>
            <td><b><?php echo isset($_POST['category']) ? htmlspecialchars($_POST['category']) : ''; ?></b></td>
        </tr>
        <tr>
            <td>MESAJ:</td>
            <td><b><?php echo isset($_POST['message']) ? nl2br(htmlspecialchars($_POST['message'])) : ''; ?></b></td>
        </tr>
        <tr>
            <p> <a href='iletisim.html'>&lt;GERİ DÖN&gt;</a></p>
            
        </tr>
    </table>

    
</body>
</html>