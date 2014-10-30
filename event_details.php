<?php include'header.php'; 
include 'database.php';
include 'event_actions.php';
$event_id = $_GET['event_id'];
$conn = connect($config);
$results = fetch_event_details_db($conn, $event_id);
?>
<div class="container" style="padding-top: 5%;">
<?php foreach ($results as $list) { ?>
<div class="col-md-8">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active"><?php echo $list[1]; ?><!--Code for the Kingdom--></li>
</ol>
<h1 class="event-heading"><?php echo $list[1]; ?><!--CODE FOR THE KINGDOM--></h1>
  <div class="col-md-8" style="padding-bottom: 20px;">
    <span class="spacing"><span class="glyphicon glyphicon-time"></span><?php echo $list[5];?><!-- 19:00--> </span><span class="spacing"><span class="glyphicon glyphicon-calendar"></span><?php echo $list[4];?><!-- Fri, 31 Oct 2014--> </dpan>
  </div>
  <img src=<?php $list[7]; ?> alt="Code for the Kingdom" style="width: 100%; height: 250px;">
  <div class="col-md-12" style="margin-left: -3%;">
    <div class="event-heading">Event Description</div>
      <div class="col-md-12">
        <?php echo $list[9]; ?>
        <!--<p>About the performance:  Parikrama is a legendary rock band playing Classic Rock based music, fused with Indian instruments like the tabla and the violin, and has been around for  23 years. The band has done more than 3000 shows till date in India and across the world, including countries like USA, Russia, Canada, Vietnam, UK, Cambodia, Laod, Ethopia, Nigeria, Oman, UAE, Bhutan, Nepal , Singapore etc.</p>
        <p>Cast - Dinkar Jani <br>Direction - Dinkar Jani <br>Entry Passes : from Rs.1500 to Rs. 3000 <br>Book<br>Tickets <br>Venue info for Hard Rock Cafe 40 <br>Venue<br> Address <br>Hard Rock Cafe 40 <br>St Mark's Rd Bangalore <br>Get Directions to Venue</p>-->
      </div>
  </div>
</div>
<div class="col-md-4" style="padding-top: 3%;">
  <div class="col-md-12">
    <h1 class="event-heading">Event Location</h1>
    <address><?php echo $list[3]; ?></address>
  </div>
</div>
<?php } ?>
</div>
<?php include'footer.php'; ?>

