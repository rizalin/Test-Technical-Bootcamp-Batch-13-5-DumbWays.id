<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Perpustakaan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <?php require_once 'process.php'; ?>

        <?php
        $mysqli = new mysqli('localhost', 'root', 'louchi25', 'perpustakaan') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT*from books") or die($mysqli->error);
//        pre_r($result);
        ?>

        <div class="justify-content-center">
            <div class="container">
                <h1>Category</h1>
                <div class="card-deck">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="card">
                            <img src="..." class="card-img-top"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                <p class="card-text">Stock : <?php echo $row['stok'] ?></p>
                                <a href="#" class="btn btn-primary">Tambahkan</a>
                            </div>


                        </div>
                    <?php endwhile; ?>



                </div>
            </div>
        </div>
        <?php

        function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        ?>

        <div class="row justify-content-center">
            <form action="process.php" method="post">
                <div class="form-group">
                    <label>Buku</label>
                    <input type="text" class="form-control" name="books" value="Masukan nama buku">
                </div>

                <button type="submit" name="save" class="btn btn-primary">Save</button>
            </form>
        </div>
    </body>

</html>