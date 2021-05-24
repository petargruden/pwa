<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Procjet for PWA" content="Made for a project on TVZ" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" type="image/png" href="slike/fav.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov:wght@700&display=swap" rel="stylesheet">

    <title>PWA Project - clanak</title>

</head>

<body>

<?php
    
    include 'connect.php';

    if(isset($_POST['posalji'])){

        $slika = $_FILES['slika']['name'];
        $naslov=$_POST['naslov'];
        $kratko=$_POST['kratko'];
        $vijesti=$_POST['vijesti'];
        $kategorija=$_POST['kategorija'];
        $datum=date('d.m.Y.');
        if(isset($_POST['arhiva'])){
            $arhiva=1;
        }else{
            $arhiva=0;
        }
        //ne prikazuj ako je arhivirano
        if($arhiva == 1)
            header('Location: index.php');
        
        //premjesti fajl u dir "img"
        $target_dir = 'img/'.$slika;
        move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);

        // upload u bazu
        $query = "INSERT INTO vijesti (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$datum', '$naslov', '$kratko', '$vijesti', '$slika',
        '$kategorija', '$arhiva')";
        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    
       
        mysqli_close($dbc);
}    
?>

    <div class="container-fluid">


        <header class="clanak-naslov">

            <div class="container pt-3 mb-3">
                <h4> <span class="square">&#9632;</span>
                <?php
                    echo $kategorija;               
                ?> </h4>
            </div>

        </header>

        <div class="container">

            <div class="naslov-vijesti d-flex justify-content-center mt-5 mb-5">
                <h2><?php
                    echo $naslov;
                ?></h2>
            </div>

            <div class="kratki-opis text-center m-auto mb-5">
                <p><?php
                    echo $kratko;
                ?></p>
            </div>

            <div class="article-slika text-center pt-4 m-auto">
                <?php
                    echo '<img src="img/'.$slika.'".>';
                ?>
            </div>


            <article class="mt-5 ">

                
                <div class="tekst-vijesti m-auto">
                    <div class="vrijeme mb-4"><?php
                    echo $datum;
                    ?></div>
                    <p>
                       <?php
                        echo $vijesti;
                       ?>
                    </p> 
                </div>
                
            </article>
            

            

            <footer>

                <div class="d-flex justify-content-start mt-5">
                    <p ><span>&#169;</span> Petar Gruden, PWA projekt, Tehničko Veleučilište u Zagrebu, 2021</p>
                </div>


            </footer>

        </div>


    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>




</html>