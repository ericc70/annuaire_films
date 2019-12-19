<?php // require(head.php); ?>

<h1>Listes des films</h1>

<?php
foreach ($films as $film) :?>
<h2><?php echo $film['title']; ?></h2>
<div><?php echo $film['synopsis']; ?> </div>


<?php endforeach ;?>