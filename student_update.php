<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2 class="mb-5 mt-5 d-flex justify-content-center">Update Student Details</h2>
        <?php
        include "connect.php";
        $id = $_GET['S_ID'];

        $unique = "select * from student_details where id=$id";
        $u_result = mysqli_query($mysqli, $unique);
        $srno = 1;
        $row = mysqli_fetch_array($u_result) ?>

        <form method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                        <input type="text" class="form-control" value="<?php echo $row['student_id'] ?>" placeholder="Enter Student ID" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" value="<?php echo $row['number'] ?>" name="number" id="number" placeholder="Enter Student Phone Number" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                        <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name" id="name" placeholder="Enter Student Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parents Number</label>
                        <input type="text" class="form-control" value="<?php echo $row['p_number'] ?>" name="pnumber" id="pnumber" placeholder="Enter Parents Number" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Student Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3" required><?php echo $row['address'] ?></textarea>
                </div>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>



<?php
include "connect.php";
$id = $_GET['S_ID'];

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $number = $_POST['number'];
    $pnumber = $_POST['pnumber'];
    $address = $_POST['address'];


    $query = "UPDATE student_details
    SET name = '$name', number = $number, p_number= $pnumber, address= '$address'
    WHERE id= $id";

    $result = mysqli_query($mysqli, $query);

    if ($result) { ?>
        <script>
            alert("Successfully / Student Details Update");
            window.location = "index.php";
        </script>
    <?php } else {
    ?>
        <script>
            alert("Failed / Have Some Issue");
            window.location = "index.php";
        </script>
<?php
    }
}
?>