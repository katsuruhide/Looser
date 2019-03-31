<style>
.issue{
    width: 100%;
    display:inline-block;

}
.issue img{
    margin:0 10px;

}
.issue .balloon1-left {
    position: relative;
    top:-50px;
    display: inline-flex;
    padding: 7px 10px;
    min-width: 120px;
    max-width: 50%;
    color: #555;
    font-size: 16px;
    background: #e0edff;
  }
  
.issue .balloon1-left:before {
    content: "";
    position: absolute;
    top: 50%;
    left: -20px;
    margin-top: -15px;
    border: 15px solid transparent;
    border-right: 15px solid #e0edff;
  }
  
.issue .balloon1-left p {
    margin:0;
    padding: 0;
    }
</style>
  
<?php

include('db.php');

$sql="
SELECT *
from task  
";

$stmt = $pdo->query($sql);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- 一覧 -->
<?php foreach($tasks as $task): ?>
  <div class="issue">
    <img src="./design/flamingo80x80.png">
    <div class="balloon1-left">
        <p><?php echo $task['content']; ?></p>
    </div>
  </div>
<?php endforeach; ?>
