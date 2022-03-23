<?php

foreach($students as $student): ?>

<h2><?= 
    $student->first_name().
    $student->last_name().
    $student->subject().
    $student->postal_code();



?></h2>

<form>
    <input type=button onclick=window.location.href='http://127.0.0.1/projet%20web/projet%20web/LinkedOut/test_MVC/views/viewAccueil.php'; value=Aller />
</form>
<?php endforeach; ?>