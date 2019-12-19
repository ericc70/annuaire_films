<h2>Les genres de film</h2>

<?php
foreach ($realisateurs as $realisateur) :?>
<p><?php echo $realisateur['firstname'] .' ' .$realisateur['lastname']; ?></p>


<?php endforeach ;?>