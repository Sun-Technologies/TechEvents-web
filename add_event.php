<?php
    include 'database.php';
    include 'event_type_array.php';
    include 'event_actions.php';
    $event_id = isset( $_GET['event_id'] ) ? $_GET['event_id'] : 0 ; 
    $conn = connect($config);
    if(isset($_POST['submit'])) {

        $reqObj                     = new StdClass;
        $reqObj->event_title        = $_POST['event_title'];
        $reqObj->event_type         = $_POST['event_type'];
        $reqObj->event_time         = $_POST['event_time'];
        $reqObj->event_date         = $_POST['event_date'];
        $reqObj->short_address      = $_POST['short_address'];
        $reqObj->short_name         = $_POST['short_name'];
        $reqObj->image_url          = $_POST['image_url'];
        $reqObj->full_address       = $_POST['full_address'];
        $reqObj->full_description   = $_POST['full_description'];
        $reqObj->website            = $_POST['website'];
        $reqObj->register           = $_POST['websitereg'];
        if($event_id) {
            $results = edit_event_details_db($conn, $event_id, $reqObj);
            if($results) {
                extract($results[0]);
            }
        } else {
            add_event( $reqObj , $conn);
        }
    }else {
        if($event_id) {
            $results = fetch_event_details_db($conn, $event_id);
            if($results) {
                extract($results[0]);
            }
        }
    }
?>
<?php include 'header.php'; ?>
<div class="container" style="padding-top: 4%;">
<h1 style="text-align: center;" class="event-heading">Add An Event</h1>
<form class="col-md-10" id="form-style" method="POST" action="">
    <label>Event Title</label>
    <input type="text" class="form-control" name="event_title" placeholder="Event Title" value="<?php echo isset($event_title) ? $event_title : ''; ?>" required>
    <label>Event Type</label>
    <select name="event_type" class="form-control" required>
        <option value="">Select AnyOne</option>
        <?php setSelectOptions($event_type_array  , isset($event_type) ? $event_type : '') ?>
    </select>
    <label>Time</label>
    <input type="time" class="form-control" name="event_time" placeholder="Add Time" value="<?php echo isset($event_time) ? $event_time : ''; ?>" required>
    <label>Date</label>
    <input type="date" class="form-control" name="event_date" placeholder="Add Date" value="<?php echo isset($event_date) ? $event_date : ''; ?>" required>
    <label>Short Address</label>
    <input type="text" class="form-control" name="short_address" placeholder="Short Address" value="<?php echo isset($short_address) ? $short_address : ''; ?>" required>
    <label>Short Name</label>
    <input type="text" class="form-control" name="short_name" placeholder="Short Name" value="<?php echo isset($short_name) ? $short_name : ''; ?>" required>
    <label>Image URL</label>
    <input type="text" class="form-control" name="image_url" placeholder="Image URL" value="<?php echo isset($image_url) ? $image_url : ''; ?>" required>
    <label>Website</label>
    <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo isset($website) ? $website : ''; ?>" required>
     <label>Register</label>
    <input type="text" class="form-control" name="websitereg" placeholder="Registration URL" value="<?php echo isset($websitereg) ? $websitereg : ''; ?>" required>
    <label>Full Address</label>
    <input type="text" class="form-control" name="full_address" placeholder="Full Address" value="<?php echo isset($full_address) ? $full_address : ''; ?>" required>
    <label>Full Description</label>
    <textarea rows="20" name="full_description" placeholder="Full Description" value="<?php echo isset($full_description) ? $full_description : ''; ?>"></textarea>
 	<input type="submit" name="submit" id="go-button" value="Submit">
</form>
</div>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<?php include'footer.php'; ?>