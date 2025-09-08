<?php
$weather = "";
$error = "";

if ($_GET['city']) {
    $city = str_replace(' ', '', $_GET['city']);
    $url = "https://www.weather-forecast.com/locations/" . $city . "/forecasts/latest";

    $forecast = @file_get_contents($url);

    if ($forecast) {
        // Try to extract the forecast summary from the HTML
        $pattern = '/<span class="phrase">(.*?)<\/span>/';

        if (preg_match($pattern, $forecast, $matches)) {
            $weather = $matches[1];
        } else {
            $error = "Could not find weather information for that city.";
        }
    } else {
        $error = "That city could not be found.";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Weather App</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <style>
      html {
        background: url(pinksky.jpg) no-repeat center center fixed;
        background-size: cover;
        -webkit-background-size: cover;
      }

      body {
        background: none;
      }

      .container {
        text-align: center;
        max-width: 500px;
        margin-top: 100px;
      }

      #weather {
        margin-top: 20px;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>What's the Weather</h1>

      <form method="GET">
        <fieldset class="form-group">
          <label style="font-size: 14px;">Enter your city name</label>
          <input 
            type="text" 
            placeholder="e.g. London, Mexico" 
            name="city" 
            class="form-control" 
            value="<?php echo htmlspecialchars($_GET['city'] ?? ''); ?>">
        </fieldset>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>

      <div id="weather">
        <?php 
          if ($weather) {
              echo '<div class="alert alert-success" role="alert">' . $weather . '</div>';
          } elseif ($error) {
              echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
          }
        ?>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
