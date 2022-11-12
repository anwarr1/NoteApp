<?php
require_once 'includes/header.php';
session_start();
if (isset($_POST['submit'])) {
    $database->UpdateNote($_POST['nom'], $_POST['description'], $_GET['id']);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        form {
            border: 1px solid rgb(209, 209, 219);
            padding: 30px;
            border-radius: 10px;
            /* margin: 180px; */
            /* width: 60%; */
            /* max-width: 600px; */
        }
    </style>
</head>

<body>
    <div class="row md-2">
        <div class="col-md-6 mx-auto">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Note title </label>
                        <input name="nom" class="form-control" placeholder="Enter title" value=<?php echo
                            $database->DisplayNote($_GET['id'])->name ?> />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Note description</label>
                        <textarea name="description" class="form-control" placeholder="Decribe your note"><?php
                        echo $database->DisplayNote($_GET['id'])->description ?></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>