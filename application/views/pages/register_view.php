<h2><?php echo $supplier['supplier_id']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="exampleInputEmail1">Supplier Name</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Supplier Name" value = "<?php echo $supplier['supplier_name']; ?>">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Contact Person</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Person" value = "<?php echo $supplier['contact_person']; ?>">
      
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Address</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" ><?php echo $supplier['address']; ?></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Contact no</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact No" value = "<?php echo $supplier['contact_no']; ?>">
      
    </div>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value = "<?php echo $supplier['email']; ?>">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Website</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website" value = "<?php echo $supplier['website']; ?>">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>