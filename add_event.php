<?php 
include 'header.php';
?>
<div class="container" style="padding-top: 4%;">
<h1 style="text-align: center;" class="event-heading">Add An Event</h1>
<form class="col-md-10" id="form-style" method="POST" action="call_add_event.php">
    <label>Event Title</label>
    <input type="text" class="form-control" name="event_title" placeholder="Event Title" required>
    <label>Event Type</label>
    <select name="event_type" class="form-control" required>
    <option value="">Select AnyOne</option>
    <option value="hackthons">Hackthons</option>
    <option value="test">test</option>
    <option value="test">test</option>
    </select>
    <label>Time</label>
    <input type="time" class="form-control" name="event_time" placeholder="Add Time" required>
    <label>Date</label>
    <input type="date" class="form-control" name="event_date" placeholder="Add Date" required>
    <label>Short Address</label>
    <input type="text" class="form-control" name="short_address" placeholder="Short Address" required>
    <label>Short Name</label>
    <input type="text" class="form-control" name="short_name" placeholder="Short Name" required>
    <label>Image URL</label>
    <input type="text" class="form-control" name="image_url" placeholder="Image URL" required>
    <label>Full Address</label>
    <input type="text" class="form-control" name="full_address" placeholder="Full Address" required>
    <label>Full Description</label>
    <textarea rows="20" name="full_description" placeholder="Full Description"></textarea>
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