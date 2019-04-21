<h2><?php echo $request['po']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="supplier_name">ID</label>
      <input type="text" class="form-control" id="release_id" aria-describedby="text" placeholder="Request ID" value = "<?php echo $request['req_id']; ?>">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Date</label>
      <input type="text" class="form-control" id="req_id" aria-describedby="text" placeholder="Date" value = "<?php echo $request['req_date']; ?>">
      
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" rows="3" ><?php echo $request['address']; ?></textarea>
    </div>

    <div class="form-group">
      <label for="contact_no">Contact no</label>
      <input type="text" class="form-control" id="contact_no" aria-describedby="text" placeholder="Contact No" value = "<?php echo $request['contact_no']; ?>">
      
    </div>
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $request['email']; ?>">
      
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" aria-describedby="text" placeholder="Website" value = "<?php echo $request['website']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>