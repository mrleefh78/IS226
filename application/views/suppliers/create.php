<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "createform");
echo form_open('suppliers/create', $entries); ?>
  <fieldset>
    
  <div class="form-group">
      <label for="supplier_name">Supplier Name</label>
      <input type="text" class="form-control" id="supplier_name" name="supplier_name" aria-describedby="text" placeholder="Supplier Name">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Contact Person</label>
      <input type="text" class="form-control" id="contact_person" name="contact_person" aria-describedby="text" placeholder="Contact Person">
      
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" name="address"  rows="3"></textarea>
    </div>

    <div class="form-group">
      <label for="contact_no">Contact no</label>
      <input type="text" class="form-control" id="contact_no" name="contact_no" aria-describedby="text" placeholder="Contact No">
      
    </div>
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" name="website" aria-describedby="text" placeholder="Website">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
