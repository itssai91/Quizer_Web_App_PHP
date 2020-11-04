<?php
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

        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['options'])) {

                $count = count($_POST['options']);

                $result = 0;
                $i = 1;
                $selectedQuestions = $_POST['options'];

                $sql = "SELECT * FROM questions";
                $results = $connection->query($sql);

                while ($rows = mysqli_fetch_array($results)) {
        ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>
                                    <?php echo "Q" . $i; ?>
                                </th>
                                <th>
                                    <?php echo "Q" . $i . " Answer" ?>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $rows['questions']; ?></td>
                                    <?php
                                    $ansKey = "SELECT answer FROM answers WHERE a_id = $selectedQuestions[$i] ";
                                    $dataFetch = $connection->query($ansKey);
                                    while ($lines = mysqli_fetch_array($dataFetch)) {
                                    ?>
                                        <td><?php echo $lines['answer']; ?></td>
                                </tr>
                            <?php
                                    }
                            ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                    $answer = $rows['ans_key'] == $selectedQuestions[$i];

                    if ($answer) {

                        $result++;
                    }
                    $i++;
                }
                ?>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-success text-white">Your Score Card</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><?php echo "Out of 5 Questions You Have Selected " . $count . " Questions"; ?></th>
                                <th><?php echo "Your Total Score is " . $result; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
        <?php
            } else {
                echo "Please Select All the Options First";
            }
        }
        ?>



    </section>

    <!--Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!--Bootstrap Js-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>