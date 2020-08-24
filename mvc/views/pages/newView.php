<h3>Danh sách sinh viên</h3>
<?php
    while($row = mysqli_fetch_array($data['ds'])) { ?>
        <h4><?php echo $row['hoten']. " - " .$row["namsinh"]?></h4>
<?php } ?>