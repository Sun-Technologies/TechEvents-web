<?php

function add_event($reqObj, $conn) {
  $query = " INSERT INTO event_list (event_title, event_type, event_time, event_date, short_address, short_name, image_url, full_address, full_description , register , website, issingleday, end_time, end_date) 
            VALUES (:event_title, :event_type, :event_time, :event_date, :short_address, :short_name, :image_url, :full_address, :full_description , :register , :website, :issingleday, :end_time, :end_date ) ";
  
  $reqObj->end_date  = $reqObj->issingleday === 1 ?  $reqObj->event_date : $reqObj->event_date ; 

  $binding = array(
      'event_title'         => $reqObj->event_title,
      'event_type'          => $reqObj->event_type,
      'event_time'          => $reqObj->event_time,
      'event_date'          => $reqObj->event_date,
      'short_address'       => $reqObj->short_address,
      'short_name'          => $reqObj->short_name,
      'image_url'           => $reqObj->image_url,
      'full_address'        => $reqObj->full_address,
      'full_description'    => $reqObj->full_description,
      'register'            => $reqObj->register,
      'website'             => $reqObj->website,
      'issingleday'         => $reqObj->issingleday,
      'end_time'            => $reqObj->end_time,
      'end_date'            => $reqObj->end_date
    );
  $results = insert_query_execute( $query, $conn , $binding );
  header('location:index-admin.php');
}
function event_list($conn) {
  $query = "SELECT * FROM event_list where end_date >= NOW() order by event_date limit 8 ";
  $results = query( $query, $conn , null );
  return $results;
}
function fetch_event_details_db($conn, $event_id) {
  $query = "SELECT * FROM event_list WHERE event_id = :event_id  ";
  $binding = array( 
    'event_id' => $event_id
  );

  $results = query( $query, $conn , $binding );
  return $results;
}

function setSelectOptions($val_list , $selected_val ){
  foreach ($val_list as $key => $value) {
    $sel = ( strval($selected_val) === strval($key) ) ? "selected" : "";
    echo "<option value=$key  ".$sel." >" .$value."</option>";
  }
}

function edit_event_details_db($conn, $event_id, $reqObj) {

  $query = "UPDATE event_list SET event_title=:event_title, event_type=:event_type, event_time=:event_time, event_date=:event_date,"
      . "short_address=:short_address, short_name=:short_name, image_url=:image_url, full_address=:full_address, register=:register , "
      . "website=:website, issingleday=:issingleday, end_time=:end_time, end_date=:end_date where event_id=:event_id";


  $reqObj->end_date  = $reqObj->issingleday == 1 ?  $reqObj->event_date : $reqObj->end_date ; 

  $binding = array(
    'event_id'            => $event_id,
    'event_title'         => $reqObj->event_title,
    'event_type'          => $reqObj->event_type,
    'event_time'          => $reqObj->event_time, 
    'event_date'          => $reqObj->event_date,
    'short_address'       => $reqObj->short_address,
    'short_name'          => $reqObj->short_name,
    'image_url'           => $reqObj->image_url,
    'full_address'        => $reqObj->full_address,
    'register'            => $reqObj->register,
    'website'             => $reqObj->website,
    'issingleday'         => $reqObj->issingleday,
    'end_time'            => $reqObj->end_time,
    'end_date'            => $reqObj->end_date   
  );

  $results = update_query_execute ( $query , $conn , $binding );
  header('location:index-admin.php');
}


function getformattedTime($timestr){
  $tokens = explode(":",$timestr);
  return date("h:iA", mktime($tokens[0], $tokens[1], $tokens[2], 7, 1, 2000));
}

function gettumbnailimg($image_url_str) {
   $tokens = explode(".", $image_url_str);
   return $tokens[0]. '_t.'. $tokens[1];
   // return $image_url_str; 
}

?>