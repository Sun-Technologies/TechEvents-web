<?php 
include 'database.php';
include 'event_actions.php';
$event_id = $_GET['event_id'];
$conn = connect($config);
$results = fetch_event_details_db($conn, $event_id);
?>
<?php foreach ($results as $list) { 
    extract($list); 
    $pg_title = $event_title . ", Bangalore";
    $description = $short_name;
    $pg_img = 'http://itevents.co.in/' . $image_url;
?>
<?php include 'header.php'; ?>
<div class="container" style="margin-top:100px;">
<div class="col-md-12">
  <ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active"><?php echo $event_title; ?></li>
  </ol>
  <h1 class="event-heading"><?php echo $event_title; ?></h1>
  <div class="col-md-12" style="padding-bottom: 20px;">
    <span class="glyphicon glyphicon-time"></span> <?php echo getformattedTime($event_time);  ?>
    <?php 
      if( $issingleday  == 1 ){
        if( isset( $end_time ) ) {
         echo " to <span class='glyphicon glyphicon-time'></span> " . getformattedTime($end_time);  
        }
        echo '<span class="spacing"/><span class="glyphicon glyphicon-calendar">' .$event_date;  
      }else{
        echo '<span class="spacing"/><span class="glyphicon glyphicon-calendar">' .$event_date; 
           
          if( isset( $end_time ) &&  $end_time != '00:00:00') {
            echo " to <span class='glyphicon glyphicon-time'></span>" . getformattedTime($end_time); 
          } else{
            echo " to" ;
          }
          if( isset( $end_date ) ) {
           echo '<span class="spacing"/><span class="glyphicon glyphicon-calendar">' .$end_date; 
          }
      }
    ?>
  </div> <!-- date time div --> 
  <div class="col-md-12" style="padding-bottom: 20px;">
  <span class="glyphicon glyphicon-map-marker"></span> <?php echo $full_address; ?>
  </div>
  <div class="col-md-12" style="padding-bottom: 20px;">
  Website : <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a>
  </div>
  <div class="col-md-12" style="padding-bottom: 20px;">
  Register : <a href="<?php echo $register; ?>" target="_blank"><?php echo $register; ?></a>
  </div>
  <img src="<?php echo $image_url ?>" class="img-responsive" alt="<?php echo $event_title; ?>" >
  <div class="col-md-12" style="margin-left: -3%;">
    <span class="spacing"><div class="event-heading">Event Description</div>
      <div class="col-md-12">
        <?php echo $list[9]; ?>
       
      </div>
  </div>
</div>

<?php } ?>
</div>
<?php include'footer.php'; ?>

