<?php 
$pg_title = "Hackathons, Tech Conferences, Tech Workshops happning in Bangalore";
$description = "A Technology centric event discovery website, with the largest collection of technical events happening in Bengaluru. 
      Our aim is to help professionals as well as beginners sharing a common interest in latest technology, to know about the upcoming technical events, seminars, workshops, and meetups. 
      Start using this website to attend your favorite event in your area and enhance your technical knowledge.";
include'header.php'; 
include 'database.php';
include 'event_actions.php';
include 'event_type_array.php';

$conn = connect($config);
$page_size = 8 ;
$page = isset ( $_GET['page']  ) ?  $_GET['page']  : 1 ;
// $results = event_list($conn);
$results = [];
?>

 <div class="container" style="margin-top:100px;" id="panel-area">
  <?php 
    
    $p = $page_size * ( $page  - 1 );
   
    for ( $x = $p ; $x < $p + $page_size &&  $x < sizeof($results); $x++ ) {
    extract($results[$x]);  ?>
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-header-style">
        <h3 class="panel-title"><a href="event-details.php?event_id=<?php echo $event_id ?>"><?php echo $event_title; ?></a></h3>
      </div>
      <div class="panel-body">
        <div class="row" id="panel-border">
          <div class="col-md-3">
            <a href="event-details.php?event_id=<?php echo $event_id ?>" class="thumbnail">
              <img src="<?php echo gettumbnailimg($image_url);?>" alt="<?php echo $event_title; ?>"  >
            </a>
          </div>
          <div class="col-md-9">
            <div class="col-md-12"><span class="glyphicon glyphicon-time"></span> <?php echo getformattedTime($event_time); ?>
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
           </div> <!-- end of date time div -->
           <div class="col-md-12"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $short_address; ?></div>
           <div class="col-md-9" style="padding-top:20px"><?php echo $short_name; ?></div> 
           <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;" >
           <span style="padding:10px;background:#008000;opacity:0.7;color:#fff"><?php echo $event_type_array[$event_type]; ?>
           </div>
           <div class="col-md-12" style="margin-top:20px;margin-bottom:10px;" >
             <span class="readmore"><a href="event-details.php?event_id=<?php echo $event_id ?>">Read More...</a></span>
          </div>
          </div> 
        </div>
      </div> <!-- end of panel -->
    </div>
    <?php } ?>
    <nav>
      <ul class="pagination">
        <?php if ( $page == 1 ) {  ?> 
          <li class="disabled">
        <?php } else {  ?>
         <li>
          <?php } ?>
        <a href="/index.php"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
        <?php for ( $pgno = 1 ; $pgno < (sizeof($results)/$page_size) + 1 ; $pgno++ ) {  ?>
          <?php if($pgno == $page )  { ?>
             <li class="active"><a href="/index.php?page=<?php echo $pgno ?>"><?php echo $pgno ?><span class="sr-only">(current)</span></a></li>
          <?php } else{  ?>
              <li><a href="/index.php?page=<?php echo $pgno ?>"><?php echo $pgno ?></a></li>
          <?php } ?> 
          
        <?php } ?>
        <?php  if ( $x >= sizeof($results) ) {  ?> 
            <li class="disabled">
        <?php } else {  ?>
            <li>
          <?php } ?>
        <a href="/index.php?page=<?php echo round((sizeof($results)/$page_size) + 1 ); ?>"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
     </ul>
   </nav>
 </div>


<div id="whoweare"> 
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="img/bangalore-it-events-1x.png" class="img-responsive" alt="Bangalore IT events">
      </div>
      <div class="col-md-7" id="whowearetxt">
      <p>A Technology centric event discovery website, with the largest collection of technical events happening in Bengaluru. </p>
      <p>Our aim is to help professionals as well as beginners sharing a common interest in latest technology, to know about the upcoming technical events, seminars, workshops, and meet-ups. 
      Start using this website to attend your favourite event in your area and enhance your technical knowledge.</p>
      <p style="margin-top:20px;">
      Share us via...&nbsp; 
      <!-- Twitter -->
      <!-- <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a> -->
       <!-- Facebook -->
      <a href="https://www.facebook.com/sharer/sharer.php?u=http://itevents.co.in/" title="Share on Facebook" target="_blank" class="btn btn-facebook">Facebook</a>
      </p>
      </div>
    </div>
  </div>
</div>
<!-- main content end --> 



<?php include'footer.php'; ?>