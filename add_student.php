<?php
include "connect.php";

if (isset($_POST['submit'])) {

    $unique = "select student_id from student_details";
    $u_result = mysqli_query($mysqli, $unique);
    $login = 0;


    while ($row = mysqli_fetch_array($u_result)) {

        if ($_POST['id'] == $row['student_id']) {
            $login++;
        }
    }


    if ($login == 0) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $number = $_POST['number'];
        $pnumber = $_POST['pnumber'];
        $address = $_POST['address'];


        $query = "insert into student_details (student_id, name, number, p_number, address) values ($id, '$name', $number, $pnumber, '$address')";

        $result = mysqli_query($mysqli, $query);

        if ($result) { ?>
            <script>
                alert("Successfully / Student Details Added Successfully");
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
    } else {
        ?>
        <script>
            alert("Successfully / Student ID is Already Exist");
            window.location = "index.php";
        </script>
<?php
    }
}


?>