<?php

// claim info
$sql = "SELECT * FROM surf_history ORDER BY date DESC LIMIT 20";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
?>

<table  class="table table-striped table-hover" id="temhis">
    <thead>
        <tr class="h5">
          <th><?php echo ucfirst($idName);?></th>
          <th><?php echo ucfirst($emailName);?></th>
          <th><?php echo ucfirst($amountName);?></th>
          <th><?php echo ucfirst($dateName);?></th>
      </tr>
    </thead>
    <tbody>
        <?php


    // output data of each row
        while($row = $result->fetch_assoc()) {
     
            echo '<tr>';
            echo '<td class="fw-bold text-primary"><a href="surf_history?t=user&token='.urlencode($row["uname"]).'" target="_blank">#'.$row["id"].'</a></td>';
            echo '<td class="fw-bold text-primary"><a href="users_info?token='.urlencode($row["uname"]).'" target="_blank">'.$row["uname"].'</a></td>';
            echo '<td>'.$row["amount"].'</td>';
            echo '<td>'.$row["date"].'</td>';
            echo '</tr>';
    }
    echo '</tbody>';
    echo '</table> ';
} else {
    echo '<div class="alert alert-warning ">';
    echo '<strong>'.ucfirst($noRecordsFoundName).'!</strong>';
    echo '</div>';
}?>

    <script src="ctrl/surf/surf/surf_info/data/js/latest_transaction.js"></script>