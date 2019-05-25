<?php
include 'koneksi.php';
if(isset($_POST['tambah_programmer'])){
    $nama = $_POST['nama'];
    $query = mysqli_query($conn,"INSERT INTO users (name) VALUES ('$nama')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container bg-primary mt-5">
    <!-- Add Programmers name form -->
    <form action="" method="post" class="p-3 bg-light shadow rounded" style="width:90%;">
        <div class="form-group">
        <label for="nama">Tambah Baru:</label>
        <div class="form-row">
            <input type="text" name="nama" class="form-control" placeholder="tambah baru" />
            <button type="submit" name="tambah_programmer" class="btn btn-primary mt-2 btn-block">Submit</button>
        </div>
        </div>
    </form>
    <!-- End -->

    <!-- Looping List Programmer -->
    <?php 
    $query = mysqli_query($conn, "SELECT users.name, users.id FROM users");
    while($queryArray = mysqli_fetch_array($query)){
    ?>

    <div class="row mt-3 bg-light rounded shadow p-3" style="width:90%; margin-left:1px">
        <div class="col">
        <h2><?= $queryArray['name'] ?></h2>
        <p>
        <?php 
        $querySkill = mysqli_query($conn, "SELECT skills.name FROM skills INNER JOIN users ON users.id = skills.user_id WHERE skills.user_id = '$queryArray[id]'");
        while($querySkillArray = mysqli_fetch_array($querySkill)){
            echo $querySkillArray['name'].",";
        }
        ?>
        </p>
        </div>

        <div class="col">
        <form action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" name="tambah_skill<?= $queryArray['id'] ?>" placeholder="tambah baru <?= $queryArray['id'] ?>" />
            <button type="submit" name="form<?= $queryArray['id'] ?>" class="btn btn-success mt-2 btn-block">Submit</button>
            <?php
                if(isset($_POST["form".$queryArray['id']])){
                    $tambah_skill = $_POST['tambah_skill'.$queryArray['id']];
                    $queryAddSkill = mysqli_query($conn, "INSERT INTO skills (name,user_id) VALUES ('$tambah_skill','$queryArray[id]')");
                    if($queryAddSkill){
                        header("location: index.php");
                    }
                }
            ?>
        </div>
        </form>
        </div>
    </div>

    <?php } ?>
    <!-- End Looping List Programmer -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
