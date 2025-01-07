<?php include 'createTimeString.php';?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="validateForm.js" defer></script>
  <title>Wojciech's Guitars</title>
</head>
<body>
  <header>
    <div id="header-logo">
      <h1>I &#128147; GUITARS</h1>
      <p>a hobby website</p>
    </div>
    <nav>
      <a href="./index.html">HOME</a>
      <a data-current="true" href="./tools.php">TOOLS</a>
      <a href="./gallery/gallery.html">GALLERY</a>
      <a href="./about-me.html">ABOUT ME</a>
      <a href="./links.html">LINKS</a>
    </nav>
  </header>
  <div id="tools-wrapper">
    <form method="GET">
      <h2>SONG LENGTH CALCULATOR</h2>
      <br>
      <label for="input-bpm">BPM (beats per minute)</label>
      <input
        type="number"
        name="bpm"
        id="input-bpm"
        placeholder="120"
        value=<?php if(isset($_GET['bpm'])) { echo $_GET['bpm']; } else { echo 120; } ?>
        min=40
        max=300
        placeholder="40-300"
        require
      >
      <br>
      <label for="">time signature</label>
      <section id="time-signature">
        <input
          type="number"
          name="ts"
          value=<?php if(isset($_GET['ts'])) { echo $_GET['ts']; } else { echo 4; } ?>
          min=1
          max=12 
          require
        >
        <p>/ 4</p>
      </section>
      <br>
      <label for="bars">bars in song</label>
      <input
        type="number"
        name="bars"
        id="bars"
        value=<?php if(isset($_GET['bars'])) { echo $_GET['bars']; } else { echo 80; } ?>
        min=1
        max=100000
        require
      >
      <br>
      <input type="submit" value="calculate">
      <br>
      <?php
        if (isset($_GET['bpm']) && isset($_GET['ts']) && isset($_GET['bars'])) {
          $bpm = $_GET['bpm'];
          $timeSignature = $_GET['ts'];
          $bars = $_GET['bars'];

          $barsPerMinute = (float)$bpm / (float)$timeSignature;
          $fullTime = (float)$bars / $barsPerMinute;

          $minutes = floor($fullTime);
          $seconds = floor(($fullTime - $minutes) * 60);

          // function from external file
          $timeString = createTimeString($minutes, $seconds);
          echo "<h3>TOTAL LENGTH:</h3><h4>$timeString</h4>";
        }
      ?>
    </form>
  </div>
  <footer>
    <p>WEBSITE CREATED BY WOJCIECH GLID</p>
  </footer>
</body>
</html>