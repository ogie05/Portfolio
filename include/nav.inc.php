<?php
session_start();
?>

<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <div data-aos="flip-up" data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="2200">
    <a class="navbar-brand" href="index.php"><img src="icon/myprofilelogo.png"></a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="#nav-bar" style="text-decoration:none;">
          <button type="button" class="btn btn-outline-primary btn-lg">Home</button></a>
        </li>
        <li class="nav-item">
          <a href="#banner" style="text-decoration:none;">
            <button type="button" class="btn btn-outline-primary btn-lg">About</button></a>
        </li>
        <li class="nav-item">
          <a href="#project" style="text-decoration:none;">
          <button type="button" class="btn btn-outline-primary btn-lg">Project</button></a>
        </li>
        <li class="nav-item">
          <a href="#footer" style="text-decoration:none;">
          <button type="button" class="btn btn-outline-primary btn-lg">Contact</button></a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/ogie05" target="_blank" style="text-decoration:none;">
          <svg class="githubI" xmlns="http://www.w3.org/2000/svg" fill="black" width="50" height="50" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
          </a>
        </li>
        <!-- <?php
        if (isset($_SESSION["username"])) {
          echo "<li class='nav-item'>";
          echo "<a href='profile.php' style='text-decoration:none;'>";
          echo "<button type='button' class='btn btn-outline-primary btn-lg'>Profile</button></a></li>";

          echo "<li class='nav-item'>";
          echo "<a href='include/logout.inc.php' style='text-decoration:none;'>";
          echo "<button type='button' class='btn btn-outline-primary btn-lg'>Log out</button></a></li>";
        }else{
          echo "<li class='nav-item'>";
          echo "<a href='login.php' style='text-decoration:none;'>";
          echo "<button type='button' class='btn btn-outline-primary btn-lg'>Login</button></a></li>";
          
        }?>
         -->
      </ul>
    </div>
  </div>
</nav>
</section>