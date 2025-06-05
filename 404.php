<?php
http_response_code(404); // Setzt den HTTP-Statuscode korrekt
?>
<?php
$title = "404";
?>
<?php include "attributes/header.php"; ?>
<section class="errorPage">
    <h1>404</h1>
    <h2>Uh-oh!</h2>
    <p>Looks like you’ve wandered off the path. Maybe the page you're looking for moved, vanished into thin air, or never existed. 🤷‍♀️</p>
    <p>No worries - let’s get you back home where all the information you need lives!</p>
    <div class="error__button">
        <button><a class="button__linkTransparent" href="/">Home</a></button>
    </div>
</section>


<?php include "attributes/footer.php"; ?>