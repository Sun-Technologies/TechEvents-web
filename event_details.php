<?php include'header.php'; 
include 'database.php';
include 'event_actions.php';
$event_id = $_GET['event_id'];
$conn = connect($config);
$results = fetch_event_details_db($conn, $event_id);
?>
<div class="container" style="padding-top: 5%;">
<?php foreach ($results as $list) { 
    extract($list);  ?>

<div class="col-md-12">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><?php echo $event_title; ?><!--Code for the Kingdom--></li>
</ol>
<h1 class="event-heading"><?php echo $event_title; ?><!--CODE FOR THE KINGDOM--></h1>
  <div class="col-md-12" style="padding-bottom: 20px;">
    <span class="spacing"><span class="glyphicon glyphicon-time">
    </span><?php echo $event_time;?><!-- time--> </span>
    <span class="spacing"><span class="glyphicon glyphicon-calendar"></span>
    <?php echo $event_date;?><!-- date--> </dpan>
  </div>
  <div class="col-md-12" style="padding-bottom: 20px;">
  <span class="spacing"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $full_address; ?>
  </div>
  <div class="col-md-12" style="padding-bottom: 20px;">
  <span class="spacing">Website : <a href="<?php echo $website; ?>"><?php echo $website; ?></a>
  </div>
  <div class="col-md-12" style="padding-bottom: 20px;">
  <span class="spacing">Register : <a href="<?php echo $website; ?>"><?php echo $register; ?></a>
  </div>
  <img src="<?php echo $image_url ?>" alt="<?php echo $event_title; ?>" style="width: 100%; height: 250px;">
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

