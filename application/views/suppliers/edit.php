<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php $entries = array("name" => "updateform");
echo form_open('suppliers/update', $entries); ?>
  <fieldset>

  <input type="hidden" class="form-control" id="supplier_id" name="supplier_id" aria-describedby="text" placeholder="Supplier Name" value = "<?php echo $supplier['supplier_id']; ?>">
    
  <div class="form-group">
      <label for="supplier_name">Supplier Name</label>
      <input type="text" class="form-control" id="supplier_name" name="supplier_name" aria-describedby="text" placeholder="Supplier Name" value = "<?php echo $supplier['supplier_name']; ?>">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Contact Person</label>
      <input type="text" class="form-control" id="contact_person" name="contact_person" aria-describedby="text" placeholder="Contact Person" value = "<?php echo $supplier['contact_person']; ?>">
      
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" name="address"  rows="3"><?php echo $supplier['address']; ?></textarea>
    </div>

    <div class="form-group">
      <label for="contact_no">Contact no</label>
      <input type="text" class="form-control" id="contact_no" name="contact_no" aria-describedby="text" placeholder="Contact No" value = "<?php echo $supplier['contact_no']; ?>">
      
    </div>
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $supplier['email']; ?>">
      
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" name="website" aria-describedby="text" placeholder="Website" value = "<?php echo $supplier['website']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
