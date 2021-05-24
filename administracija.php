<?php

include "header.php";

?>

            <section class="mb-5">

                
                
                <?php
                $query = "SELECT * FROM vijesti";
                $result = mysqli_query($dbc, $query);
                while ($row = mysqli_fetch_array($result)) {

                    echo '<form class="mt-5 border-bottom border-dark " action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="naslov">Naslov:</label>
                        <input type="text" class="form-control" name="naslov" value='.$row['naslov'].'>
                    </div>

                    <div class="form-group">
                        <label for="kratko">Kratki sadržaj vijesti (do 50 znakova):</label>
                        <textarea class="form-control" rows="5" name="kratko" maxlength="50">'.$row['sazetak'].'</textarea>
                    </div>

                    <div class="form-group">
                        <label for="vijesti">Sadržaj vijesti:</label>
                        <textarea class="form-control" rows="5" name="vijesti">'.$row['tekst'].'</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Slika">Slika</label>
                        <input type="file" accept="image/jpg,image/gif,image/png" class="form-control-file" name="slika" value="'.$row['slika'].'"><br> <img src="' . UPLPATH .
                        $row['slika'] . '" width=100px>
                    </div>
                    

                    <div class="form-group">
                        <label for="kategorija">Kategorija:</label>
                        <select class="form-control" name="kategorija" value="'.$row['kategorija'].'">
                          <option value="Sport">Sport</option>
                          <option value="Zabava">Zabava</option>
                        </select>
                    </div>

                    <div class="form-check">';

                    if ($row['arhiva'] == 0) {
                        echo '<input type="checkbox" name="arhiva" id="arhiva"/>
                        Arhiviraj?';
                    } else {
                        echo '<input type="checkbox" name="arhiva" id="arhiva"
                    checked/> Arhiviraj?';
                    }
                    echo '
                    </div>

                    <div class="mt-3 mb-5">
                        <input type="hidden" name="id" class="" value="'.$row['id'].'">
                        <button type="reset" class="btn btn-danger" value="Poništi">Poništi</button>
                        <button value="Prihvati" id="posalji" type="submit" name="update" class="btn btn-primary">Izmjeni</button>
                        <button value="Izbriši"  type="submit" name="delete" class="btn btn-warning">Izbriši</button>
                    </div>                    
                </form> ';
                }

                ?>

                <?php
                
                if(isset($_POST['delete'])){
                    $id=$_POST['id'];
                    $query = "DELETE FROM vijesti WHERE id=$id ";
                    $result = mysqli_query($dbc, $query);
                   }
                   
                
                if(isset($_POST['update'])){
                    $slika = $_FILES['slika']['name'];
                    $naslov=$_POST['naslov'];
                    $kratko=$_POST['kratko'];
                    $vijesti=$_POST['vijesti'];
                    $kategorija=$_POST['kategorija'];
                    if(isset($_POST['arhiva'])){
                        $arhiva=1;
                    }else{
                        $arhiva=0;
                    }
                    $target_dir = 'img/'.$slika;
                    move_uploaded_file($_FILES["slika"]["tmp_name"], $target_dir);
                    $id=$_POST['id'];
                    $query = "UPDATE vijesti SET naslov='$naslov', sazetak='$kratko', tekst='$vijesti', slika='$slika', kategorija='$kategorija', arhiva='$arhiva' WHERE id=$id ";
                    $result = mysqli_query($dbc, $query);
                }
                
                ?>

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