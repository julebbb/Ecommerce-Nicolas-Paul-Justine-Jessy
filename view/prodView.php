<section>
    <div class="container">
      <div class="row">
        <div class="col-12  col-md-4 mx-auto prod produit">
          <?php
          //display information for each article//
            echo "<img class='Imgsheet size-img' src='../public/img/" . $rep[$_GET['index']]['picture'] . "' alt='photo sneakers'><br />";
            echo $rep[$_GET['index']]['name'] . "<br />";
            echo $rep[$_GET['index']]['price'] . "<br />";
            echo $rep[$_GET['index']]['disponibility'] . "<br />";
            echo $rep[$_GET['index']]['size'] . "<br />";
            echo $rep[$_GET['index']]['color'] . "<br />";
            echo $rep[$_GET['index']]['description'];
          ?>
          <!-- button add  -->
          <form class="" method="post" action="panier.php">
            <button id="button" name="go" type="submit"  value="send" class="mx-auto mt-5 col-6 btn btn-success">Ajouter au panier</button>
          </form>

       </div>
     </div>
    </div>
</section>
