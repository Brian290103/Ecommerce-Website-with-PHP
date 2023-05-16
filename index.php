<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vehicles</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <nav>
      <h1 class="brand"><a href="#" class="links">Vehicles.</a></h1>
      <ul class="nav" id="nav">
        <li><a href="#" class="links">Home</a></li>
        <li><a href="about.php" class="links">About</a></li>
        <li><a href="services.php" class="links">Services</a></li>

      </ul>
      <span class="menuDrawer" onClick="drawMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
      </span>

    </nav>
  </header>
  <main>
    <div class="carossel">
      <div class="carossel-container">
        <div class="carossel-item">
          <img src="images/carossel1.jpg" class="carossel-img" alt="An image of a printer" />
        </div>
        <div class="carossel-item">
          <img src="images/carossel2.jpg" class="carossel-img" alt="An image of a printer" />
        </div>
        <div class="carossel-item">
          <img src="images/carossel3.jpg" class="carossel-img" alt="An image of a printer" />
        </div>
      </div>
      <span class="carossel-prev" id="carossel-prev" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
          <!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z" />
        </svg>
      </span>
      <span class="carossel-next" id="carossel-next" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
          <!--! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
        </svg></span>
    </div>
    <div class="description">
      <h4>We sell, hire and buy cars at affordable prices</h4>
    </div>
    <div class="container">
      <div class="left">
        <h1>Contact us for any queries</h1>
        <form action="db/submit.php" method="POST">
          <table>
            <tbody>
              <tr>
                <th><label for="fname">First Name:</label></th>
                <td><input type="text" name="fname" id="fname" required /></td>
              </tr>
              <tr>
                <th><label for="lname">Last Name:</label></th>
                <td><input type="text" name="lname" id="lname" required /></td>
              </tr>
              <tr>
                <th><label for="email">Email:</label></th>
                <td><input type="email" name="email" id="email" required /></td>
              </tr>
              <tr>
                <th><label for="message">Message:</label></th>
                <td>
                  <textarea type="text" id="email" name="message" required rows="5"> </textarea>
                </td>
              </tr>
              <tr>
                <th></th>
                <td>
                  <div class="buttons">
                    <button type="submit" name="send">Submit</button>
                    <button type="reset">Reset</button>
                  </div>
                </td>
              </tr>

              <?php
              if (isset($_SESSION["message"])) { ?>
              <tr>
                <th colspan="2">
                  <div class="session"><?= $_SESSION["message"] ?></div>
                </th>
              </tr>
              <?php
                unset($_SESSION["message"]);
              }

              ?>

            </tbody>
          </table>
        </form>
      </div>
      <div class="right">
        <div class="my-video">
          <video id="video" preload="auto" controls>
            <source src="video/trailer.mp4" />
          </video>
        </div>
        <div class="my-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2321.5196178283372!2d34.84515191276144!3d0.12819462763454267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178012a47b54eda1%3A0x3079c9b05d702ae6!2sKaimosi%20Friends%20University!5e0!3m2!1sen!2ske!4v1684141970798!5m2!1sen!2ske"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="right">
      <ul>
        <li><a href="#" class="links">Home</a></li>
        <li><a href="about.php" class="links">About</a></li>
        <li><a href="services.php" class="links">Services</a></li>
      </ul>
    </div>
    <div class="left">
      <h3>&copy; Electronics 2023</h3>
    </div>
  </footer>

  <script>
  function drawMenu() {
    // alert("Hello")
    const drawer = document.getElementById('nav');
    drawer.classList.toggle('open');
  }
  </script>
  <script src="js/script.js"></script>
</body>

</html>