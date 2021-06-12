<?php

session_start();

include "header.php";

?>

<section class="content mb-5">

    <div class="pt-3 mb-3">
        <h4> <span class="square">&#9632;</span> Sport </h4>
    </div>

    <?php
    $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Sport' LIMIT 3";
    $result = mysqli_query($dbc, $query);

    //kategorija
    $query_zabava = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Zabava' LIMIT 3";
    $result_zabava = mysqli_query($dbc, $query_zabava);

    ?>


    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo '
                    <div class="card col-sm-6 col-12 col-md-4 logo" style="width: 18rem;">
                            <img class="card-img-top" src="' . UPLPATH . $row['slika'] . '" alt="Card image cap">
                            <div class="card-body">
                                <a href="clanak.php?id= ' . $row['id'] . '">
                                    <h4 class="card-text text-center"> ' . $row['naslov'] . '</h4>
                                </a>                           
                            </div>
                    </div> 
                            ';
        }
        ?>




    </div>

</section>

<section class="content mb-5">

    <div class="pt-3 mb-3">
        <h4> <span class="square1">&#9632;</span> Zabava</h4>
    </div>

    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result_zabava)) {
            echo '
                        <div class="card col-sm-6 col-12 col-md-4 logo" style="width: 18rem;">
                            <img class="card-img-top" src="' . UPLPATH . $row['slika'] . '" alt="Card image cap">
                            <div class="card-body">
                                <a href="clanak.php?id= ' . $row['id'] . '">
                                <h4 class="card-text text-center"> ' . $row['naslov'] . '</h4>
                                </a>
                            </div>
                        </div>
                            ';
        }
        ?>

    </div>


</section>

<footer>

    <div class="d-flex justify-content-center">
        <p><span>&#169;</span> Petar Gruden, PWA projekt, Tehničko Veleučilište u Zagrebu, 2021</p>
    </div>

</footer>

</div>


</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>