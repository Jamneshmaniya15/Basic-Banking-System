<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      body {
        background: url('https://img.freepik.com/free-vector/global-virtual-currency-sign-techno-concept-background-design_1017-52482.jpg?t=st=1721484306~exp=1721487906~hmac=bc84af31e2c1c235c9ee5a7ce1b244bc336f02b52a9399f994188466d9262ac0&w=1060') no-repeat center center fixed;
        background-size: cover;
        color: #333;
      }

      button {
        transition: 1.5s;
      }
      
      button:hover {
        background-color: #616C6F;
        color: white;
      }
      
      .container {
        background: rgba(255, 255, 255, 0.5); /* Increased transparency */
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      
      .table {
        background: rgba(255, 255, 255, 0.6); /* Increased transparency */
        border-radius: 10px;
      }

      footer {
        background: rgba(255, 255, 255, 0.5); /* Increased transparency */
        padding: 10px;
        border-radius: 10px;
        margin-top: 20px;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2 class="text-center pt-4" style="color: black;">Transfer Money</h2>
    <br>
    <div class="row">
        <div class="col">
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color: black;">
                    <thead style="color: black;">
                        <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                        <tr style="color: black;">
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name'] ?></td>
                            <td class="py-2"><?php echo $rows['email'] ?></td>
                            <td class="py-2"><?php echo $rows['balance'] ?></td>
                            <td><a href="selecteduserdetail.php?id=<?php echo $rows['id']; ?>"><button type="button" class="btn" style="background-color: #A569BD;">Transact</button></a></td> 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>

<footer class="text-center mt-5 py-2">
    <p>&copy 2024. Made by <b>Jamnesh Maniya</b> <br> Jamnesh Maniya Foundation</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
