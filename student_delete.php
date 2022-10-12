<?php
include 'connect.php';

if(isset($_GET['S_ID'])){
             $id = $_GET['S_ID'];

       $query = "DELETE FROM student_details WHERE id=$id";
       $record = mysqli_query($mysqli, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Successfully / Student Details Deleted..");
window.location = "index.php";
</script>
<?php
   
       }
      }
?>