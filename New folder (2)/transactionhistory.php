<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
        body {
            background: url('https://img.freepik.com/free-photo/top-view-finance-elements_23-2148080973.jpg?t=st=1721485061~exp=1721488661~hmac=de43805863ce68fca820fc869e75ed614a7d381f6f91f95bd6586d2b0356b9a0&w=1060') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }
        .container {
            background: rgba(255, 255, 255, 0.6); /* More transparency */
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table-responsive-sm {
            background: rgba(255, 255, 255, 0.7); /* More transparency */
            border-radius: 10px;
            padding: 20px;
        }
        footer {
            background: rgba(255, 255, 255, 0.6); /* More transparency */
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }
        button {
            transition: 1.5s;
        }
        button:hover {
            background-color: #616C6F;
            color: white;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">
    <h2 class="text-center pt-4" style="color: black;">Transaction History</h2>
    <br>
    <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
            <thead style="color: black;">
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'config.php';
                    $sql = "SELECT * FROM transaction";
                    $query = mysqli_query($conn, $sql);
                    while ($rows = mysqli_fetch_assoc($query)) {
                ?>
                <tr style="color: black;">
                    <td class="py-2"><?php echo $rows['sno']; ?></td>
                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="py-2"><?php echo $rows['balance']; ?></td>
                    <td class="py-2"><?php echo $rows['datetime']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="text-center mt-5 py-2">
    <p>&copy 2024. Made by <b>Jamnesh Maniya</b> <br> Jamnesh Maniya Foundation</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
