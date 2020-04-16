<div class="reviews-block">
<?php
include "connection.php";

$sql = "SELECT * FROM `review`";
$result = $mysqli->query($sql);

if ($result) {
    $row_cnt = $result->num_rows;
    $del = $row_cnt%2;
    $row_cnt -= $del;
    $row_cnt /= 2;
}

$counter = 0;
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $counter++;
?>
        <div class="reviews-block">
            <div class="reviews-one">
                <p><?php echo $row['name_au'];?></p>
                <p><?php echo $row['date_com'];?></p> 
                <div><?php echo $row['text_com'];?></div>
            </div>
        </div>

<?php
        if ($counter == $row_cnt) {
            echo '</div><div class="reviews-block">';
        }
    }
}
?>
</div>