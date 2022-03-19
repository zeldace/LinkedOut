<?php

foreach($students as $student): 
    echo 'oui';?>

<h2><?= $student->firstName();?></h2>
<?php endforeach; ?>