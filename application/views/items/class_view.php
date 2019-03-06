<h2><?php echo $item['item_id']; ?></h2>


<div class="col-md-2"></div>
<div class="col-md-8">
<form>
  <fieldset>
    
  <div class="form-group">
      <label for="exampleInputEmail1">Item Class Name</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Supplier Name" value = "<?php echo $supplier['supplier_name']; ?>">
      
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>