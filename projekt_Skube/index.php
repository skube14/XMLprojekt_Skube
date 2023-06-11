<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Software List</title>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>AI Software List</h1>

  <div class="container">
    <?php
      // Ucitavanje XML datoteke
      $xml = simplexml_load_file('software_list.xml');

      // Prikazivanje podataka iz XML-a
      foreach ($xml->software as $software) {
        echo '<div class="software">';
        echo '<h2>' . $software->name . '</h2>';
        if (!empty($software->image)) {
          $imagePath = 'images/' . $software->image;
          echo '<img src="' . $imagePath . '" alt="' . $software->name . '">';
        }
        echo '<p>' . $software->description . '</p>';
        echo '<p>Language: ' . $software->language . '</p>';
        echo '<a href="' . $software->website . '" target="_blank">Website</a>';
        echo '</div>';
      }
    ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
