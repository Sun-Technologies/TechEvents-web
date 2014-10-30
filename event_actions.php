<?php

function add_event($reqObj, $conn) {
  $query = " INSERT INTO event_list (event_title, event_type, event_time, event_date, short_address, short_name, image_url, full_address, full_description ) 
            VALUES (:event_title, :event_type, :event_time, :event_date, :short_address, :short_name, :image_url, :full_address, :full_description) ";
  
  $binding = array(
      'event_title'         => $reqObj->event_title,
      'event_type'          => $reqObj->event_type,
      'event_time'          => $reqObj->event_time,
      'event_date'          => $reqObj->event_date,
      'short_address'       => $reqObj->short_address,
      'short_name'          => $reqObj->short_name,
      'image_url'           => $reqObj->image_url,
      'full_address'        => $reqObj->full_address,
      'full_description'    => $reqObj->full_description
    );

  $results = insert_query_execute( $query, $conn , $binding );
  header('location:thanks_event.php');
}
function event_list($conn) {
  $query = "SELECT * FROM event_list";
  $results = query( $query, $conn , null );
  return $results;
}
function fetch_event_details_db($conn, $event_id) {
  $query = "SELECT * FROM event_list WHERE event_id = :event_id";
  $binding = array( 
    'event_id' => $event_id
  );

  $results = query( $query, $conn , $binding );
  return $results;
}
?>