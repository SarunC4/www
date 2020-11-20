<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      body {
        background-color: #332D60;
      }
    </style>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'sarun.mysql.database.azure.com', 'sarunc4@sarun', 'c6h12o6Kim***', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-dark table-striped table-hover" width="600" border="1">
  <tr>
    <th width="25%"> <div align="center">Name </div></th>
    <th width="35%"> <div align="center">Comment </div></th>
    <th width="25%"> <div align="center">Link </div></th>
    <th width="15%"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><div class="text-center"><a href="edit.php?edit_id=<?php echo $Result["ID"]; ?>" class="btn btn-info">EDIT<i class="far fa-edit"></i></a><a href="delete.php?delete_id=<?php echo $Result['ID']; ?>" class="btn btn-danger">REMOVE<i class="far fa-trash-alt"></i></a></div></td>
  </tr>
<?php
}
?>
</table>
<div class="text-center"><a href="form.html" class="btn btn-success">ADD +</a></div>
<?php
mysqli_close($conn);
?>
</body>
</html>
