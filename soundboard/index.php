<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="soundbutton.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <meta name="viewport" content="width=1080px, user-scalable=no" />

  <title>File Buttons Generator</title>
</head>
<body>
    <h1>SOUNDBOARD</h1>

    <audio id="audioPlayer">
        Your browser does not support the audio element.
    </audio>

    <div class="button-grid">
      <?php
      // Directory path to the "files" subfolder
      $folder_path = 'sounds';

      // Get a list of files in the folder
      $files = scandir($folder_path);

      // Loop through the files and generate buttons
      foreach ($files as $file) {
          // Exclude . and .. from the list
          if ($file !== '.' && $file !== '..') {
              // Create a button for each file
              echo '<button onclick="playAudio(\''. $folder_path . "/" . $file . '\')">\''. substr($file, 0, strrpos($file, ".")) . "" . '\'</button>';
              // echo '<button onclick="playAudio(\''. $folder_path . "/" . $file . '\')"><img src="images/Matt_alien_button.png"></img></button>';
              //print $folder_path . "/" . $file;

        }
      }
      ?>
    </div>
</body>
</html>
