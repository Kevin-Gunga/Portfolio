<?php include 'connection.php'; ?>
<a href="index.php">HOME</a>
<table border="1px" cellpadding="20" cellspacing="0">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
        
    </tr>
    <?php
    $query="SELECT * FROM users";
    $data = mysqli_query ($con,$query);
    $result=mysqli_num_rows($data);
    if ($result) {
        
        while ($row=mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $row ['fname'] ;?></td>
                <td><?php echo $row ['email'] ;?></td>
                <td><?php echo $row ['msg'] ;?></td>
            </tr>
            <?php
        }
    }else{
        ?>
        <tr>No Record Found</tr>
        <?php
    }
    ?>
</table>


