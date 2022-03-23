<?php

foreach($students as $student): ?>

<h2><?= 
    $student->first_name().
    $student->last_name().
    $student->subject().
    $student->postal_code();



?></h2>

<form action='accueil'>
    <input type='submit'>
</form>
<?php endforeach; ?>