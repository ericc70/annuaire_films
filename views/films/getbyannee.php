
<?php
if (!empty($films)){ 
?>
<div class="container-fluid my-5" id="director">
        <div class="container">
          <div class="row">
<?php
echo"   <h2>film de l'année ".$films[0]['date']."  </h2> </div> <div class='row'>  ";
$nb_li =0;
$nb_max =1;
//var_dump($films);
//  echo $films[0]['date'];
foreach ($films as $film) :
     if($nb_li == 0){
        ?>
           <div class="col-4">
                <ul class="border-left">
       <?php
       }
    ?>
                  <li class="mt-5"><a href="/films/getfilm/<?php echo $film['id']; ?>"><img src="/<?php echo $film['img'];?>" alt="<?php echo $film['alt_img'];?>" width="300" height="400"></a></li>
<?php 
                $nb_li++;  
               // echo $nb_li;
                if($nb_li == $nb_max)
                {
                    $nb_li=0;
                ?>
                </ul>
            </div>
             <?php
                }
                     ?>
<?php endforeach ;?>
</div>
</div>
</div>
<?php
}
else {echo "aucun resultat";}