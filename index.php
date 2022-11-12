<?php

include 'includes/header.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>
<div class="container">
  <?php include 'includes/alert.php'; ?>
  <table>
    <tr>
      <th style="text-align: center;">Titre</th>
      <th style="text-align: center;">Description</th>
      <th style="text-align: center;">Action</th>
    </tr>
    <?php $database->DisplayAllNotes(); ?>
  </table>
</div>

</body>

</html>