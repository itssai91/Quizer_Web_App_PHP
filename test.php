<?php
session_start();
require("database_Connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--No Index Meta Tag-->
  <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet" />

  <!--FavIcon-->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
  <link rel="manifest" href="/manifest.json" />
  <meta name="msapplication-TileColor" content="#000" />
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
  <meta name="theme-color" content="#8E0E00" />

  <!--Bootstrap Css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <title>Biologycraze Quizer Web App</title>
</head>

<body>

  <section class="container">
    <div class="card">
      <!--Card Start-->
      <form action="results.php" method="POST">
        <!--Questions Table While Loop-->
        <?php
        if (isset($_SESSION['is_login'])) {
          for ($i = 1; $i < 6; $i++) {
            $questions = "SELECT * FROM questions WHERE q_id = $i";
            $result = $connection->query($questions);
            while ($row = $result->fetch_assoc()) {
        ?>
              <div class="card-header bg-success text-white">
                <?php echo $i . '. ' . $row['questions']; ?>
              </div>

              <!--Answer Table While Loop-->
              <?php
              $answers = "SELECT * FROM answers WHERE ans_id = $i";
              $data = $connection->query($answers);
              while ($rows = $data->fetch_assoc()) {
              ?>
                <div class="card-body">
                  <input type="radio" name="options[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['a_id']; ?>">
                  <?php echo $rows['answer']; ?>
                </div>
        <?php
              }
            }
          }
        }
        ?>

        <input type="submit" name="submit" class="btn btn-success m-auto d-block" value="Submit">
      </form>
    </div>
    <!--Card End-->
  </section>

  <!--Jquery JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <!--Bootstrap Js-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>