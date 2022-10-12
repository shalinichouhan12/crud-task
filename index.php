<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2 class="mb-5 mt-5 d-flex justify-content-center">Enter Student Details</h2>
        <form method="post" action="add_student.php">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student ID</label>
                        <input type="text" class="form-control" name="id" id="id" placeholder="Enter Student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="number" id="number"
                            placeholder="Enter Student Phone Number" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Student Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Student Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parents Number</label>
                        <input type="text" class="form-control" name="pnumber" id="pnumber"
                            placeholder="Enter Parents Number" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Student Address</label>
                    <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>


        <h4 class="mt-5">Student List</h4>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Parents Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connect.php";
                $unique = "select * from student_details";
                $u_result = mysqli_query($mysqli, $unique);
                $srno = 1;


                while ($row = mysqli_fetch_array($u_result)) { ?>
                <tr>
                    <th scope="row"><?php echo $srno++; ?></th>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['p_number']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><a href="student_update.php?S_ID=<?php echo $row['id']; ?>">Update</a><br><a href="student_delete.php?S_ID=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>