 <link rel="stylesheet" href="style/style.css">
 <?php

    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: login.html');
        exit();
    }
    if ($_SESSION['admin'] === true) {
        echo "<a href='admin.php'>Pagina di amministrazione</a>";
    }

    ?>
 <header>
     <h1> Pacchio Web Service </h1>
     <h2>Benvenuto <?php echo $_SESSION['email']; ?></h2>
     <p>Questa è la tua pagina personale</p>
     <?php

        ?>
 </header>
 <nav>
     <a href=" index.php">Home</a>
     <a href="login.html">Login</a>
     <a href="logout.php">Logout</a>
     <a href="servizzi.php">Servizzi</a>

 </nav>
 <aside>
     Servizzi:
     <ul>
         <li>Cloud(file password keepassXC)</li>
         <li>PiHole</li>
         <li>UpTimeKuma</li>
         <li>qeeqbox</li>
         <li>pfsense</li>
         <li>vpn</li>
     </ul>

 </aside>
 <article>
     <header>

     </header>
     <section>

 </article>
 <footer style="text-align: right;">
     <img src="img/pwsLogo.png" alt="PWS Logo" width="50px" height="50px">
 </footer>
