<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../../templates/header-parcours.html';
?>

<!DOCTYPE html>
<html lang="en">
<link href="../../css/styles.css" rel="stylesheet" />
    <head>
        <title>Defensive Security Intro</title>
    </head>
    <body>
        <main>
            <div class="container">
                <h1><?php echo pathinfo(__FILE__, PATHINFO_FILENAME)?></h1>
                <p>Introduction aux concepts de la sécurité défensive.</p>
            </div>
        </main>
    </body>
</html>

<?php
include '../../templates/footer.html';
?>