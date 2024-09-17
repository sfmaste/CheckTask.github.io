<? 
 
$connect = new mysqli('localhost', 'root', '', 'im'); 
$query=mysqli_query($connect, "SELECT * FROM `login`"); 
 
if (isset($_POST['fio']) != $_SESSION['fio'] ) { 
 
    $fio = $_POST["fio"]; 
    $nomer = $_POST["email"]; 
    $email = $_POST["psw"];
    
 
    $query=$connect->query("INSERT INTO login (`id`, `fio`, `email`, `psw`) 
    VALUES (NULL, '$fio', '$email', '$psw' )"); 
      header('Location:/'); 
     
     
    } 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="icon.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<body>  
<div class="image">
  <form action="cod.html">
    <div class="container" face="center"> 
      <h1>Вход</h1>  
      <input type="text" placeholder="ФИО Преподавателя" name="fio" required>
      <input type="text" placeholder="Почта" name="email" required>
      <input type="password" placeholder="Пароль" name="psw" required>
      <button type="submit" class="btn">Войти</button>
    </div>
  </form>
</div>
</form>
</body>
</html>