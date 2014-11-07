<?php 
include'header.php'; 
include 'database.php';
include 'event_actions.php';
include 'event_type_array.php';
$conn = connect($config);
$results = event_list($conn);
?>

 <div class="container" style="margin-top:80px;">
  <?php foreach ($results as $list) {
    extract($list); ?>
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-header-style">
        <h3 class="panel-title"><a href="event_details.php?event_id=<?php echo $event_id ?>"><?php echo $event_title; ?></a></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3">
            <a href="event_details.php?event_id=<?php echo $event_id ?>" class="thumbnail">
              <img src="<?php echo $image_url;?>" alt="<?php echo $event_title; ?>"  >
            </a>
          </div>
          <div class="col-md-9">
          <?php if(!empty($end_date)) { ?>
           <div class="col-md-12"><span class="glyphicon glyphicon-time"></span> <?php echo $event_time; ?>&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-calendar"></span> <?php echo $event_date; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <?php isset($end_time) ? $end_time : '';  if($end_time)  echo "- &nbsp;&nbsp;&nbsp; <span class='glyphicon glyphicon-time'></span> ". $end_time; ?>&nbsp;&nbsp;&nbsp; <?php echo "&nbsp;&nbsp;&nbsp; <span class='glyphicon glyphicon-calendar'></span> ". $end_date; ?></div>
           <?php } else { ?>
           <div class="col-md-12"><span class="glyphicon glyphicon-time"></span> <?php echo $event_time; ?>&nbsp;&nbsp;&nbsp; <?php isset($end_time) ? $end_time : '';  if($end_time)  echo "- &nbsp;&nbsp;&nbsp; <span class='glyphicon glyphicon-time'></span> ". $end_time; ?>&nbsp;&nbsp;&nbsp; <?php isset($event_date) ? $event_date : '';  if($event_date)  echo "&nbsp;&nbsp;&nbsp; <span class='glyphicon glyphicon-calendar'></span> ". $event_date; ?></div>
           <?php } ?>
           <div class="col-md-12"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $short_address; ?></div>
           <div class="col-md-9" style="padding-top:20px"><?php echo $short_name; ?></div> 
           <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;" >
           <span style="padding:10px;background:#008000;opacity:0.7;color:#fff"><?php echo $event_type_array[$event_type]; ?>
           </div>
           <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;" >
             <span class="readmore"><a href="event_details.php?event_id=<?php echo $event_id ?>">Read More...</a></span>
          </div>
          </div> 
        </div>
      </div> <!-- end of panel -->
    </div>
    <?php } ?>
 </div>
<!-- main content end --> 
<?php include'footer.php'; ?>