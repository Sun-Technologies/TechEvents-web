<?php 
include'header.php'; 
include 'database.php';
include 'event_actions.php';
$conn = connect($config);
$results = event_list($conn);
?>

 <div class="container" style="margin-top:80px;">
  <?php foreach ($results as $list) {?>
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-header-style">
        <h3 class="panel-title"><a href="event_details.php"><?php echo $list[1]; ?></a></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-2">
            <a href="#" class="thumbnail">
            <img src=<?php echo $list[7];?> alt="..."  id="code-image">
            </a>
          </div>
          <div class="col-md-6">
           <div class="col-md-6" id="code-time"><span class="glyphicon glyphicon-time"></span> <?php echo $list[5]; ?><br>
           <span class="glyphicon glyphicon-calendar"></span> <?php echo $list[4]; ?></div>
           <div class="col-md-6" id="code-location"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $list[3]; ?></div>
           <div class="col-md-12" id="event-title"><?php echo $list[6]; ?></div>
          </div>
          <div class="col-md-3" id="readmore-style">
            <span class="readmore"><a href="event_details.php?event_id=<?php echo $list[0] ?>">Read More...</a></span>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
 </div>
    <!-- main content end --> 
<?php include'footer.php'; ?>