<?php
$req = $bdd->query('SELECT id, name, price, picture FROM products ORDER BY id DESC LIMIT 4');
$rep = $req->fetchAll();
    echo '<section>
      <div class="container">
        <div class="row margin">';



          //display information for each article//
            foreach ($rep as $key => $value) {
            echo '<div class="mx-auto col-md-6 col-lg-2 d-flex flex-column text-center description-index border-FF4200 mx-2">
               <a href="prod.php?index=' . $key . '">
               <img class="Imgsheet size-img" src="../public/img/' . $value["picture"] . '" alt="photo sneakers"><br />
               ' . $value["name"] . '<br />
               ' . $value["price"] . '
               </a></div>';
            };


            $req->closeCursor();

    echo '
        </div>
      </div>
    </section>
  </div>';
