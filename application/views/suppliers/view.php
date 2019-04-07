<h2><?php echo $supplier['supplier_id']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="supplier_name">Supplier Name</label>
      <input type="text" class="form-control" id="supplier_name" aria-describedby="text" placeholder="Supplier Name" value = "<?php echo $supplier['supplier_name']; ?>">
      
    </div>
    <div class="form-group">
      <label for="contact_person">Contact Person</label>
      <input type="text" class="form-control" id="contact_person" aria-describedby="text" placeholder="Contact Person" value = "<?php echo $supplier['contact_person']; ?>">
      
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" rows="3" ><?php echo $supplier['address']; ?></textarea>
    </div>

    <div class="form-group">
      <label for="contact_no">Contact no</label>
      <input type="text" class="form-control" id="contact_no" aria-describedby="text" placeholder="Contact No" value = "<?php echo $supplier['contact_no']; ?>">
      
    </div>
   
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $supplier['email']; ?>">
      
    </div>
    <div class="form-group">
      <label for="website">Website</label>
      <input type="text" class="form-control" id="website" aria-describedby="text" placeholder="Website" value = "<?php echo $supplier['website']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>