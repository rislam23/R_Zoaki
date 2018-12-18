<?php 
        $query = "SELECT * FROM foundmiss where statu = 'approve'";
        $slect_all_query = mysqli_query($con,$query);
        $count = mysqli_num_rows($slect_all_query);

        $count = ceil($count/8);
        for ($i=1; $i <= $count; $i++) { 
          echo "<li class='page-item ml-1 text-dark'><a class='page-link' href='missfound.php?page={$i}'>{$i}</a></li>";
        }
        
?>