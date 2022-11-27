<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="stylee.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  </head>
  <body style=>

  <header>
    <nav>
     
      <div class="menu">
        <a href="#" style="font-size: 20px">HOME</a>
        <a href="about.html" target="_blank">ABOUT</a>
        <a href="feedback.html" target="_blank">FEEDBACK</a>
        <a href="contact.html" target="_blank">CONTACT</a>
        <a href="logout.html">LOGOUT</a>
      </div>
    </nav>

    <main>
      <section>
        <h1>WELCOME TO</h1>
        <h1>
          <span class="change_content"> </span>
          <span style="margin-top: -10px"></span>
        </h1>
        <p style="margin-bottom:0">"Search made easy"</p>
        <div class="input">
          <form action="inputForm.php" method="POST">
            <input type="text" id="sub" name="subject" placeholder="Enter Subject" />
            <input
              type="submit"
              value="SUBMIT"
              id="btnone"
              style="font-size: medium; font-weight: bold"
            />
          <br>  
      <br>
			<?php 
            if(isset($_GET['msg'])):
            echo $_GET['msg'];
            echo "
            <a href='reqNav.php' style='color:#00b894; font-weight:bold; font-size:35px ;text-decoration:underline white'>request navigation</a>";
            // header("refresh:5;url=homePage.php");
            endif;
            ?>
          </form>
        </div>
      </section>
    </main>
  </header>
</html>
