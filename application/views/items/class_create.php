<h2><?=$title?></h2>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php echo validation_errors(); ?>
<?php echo form_open('items/classcreate'); ?>
  <fieldset>
    <div class="form-group">
      <label for="classname">Item Class Name</label>
      <input type="text" class="form-control" id="classname" name="classname" aria-describedby="text" placeholder="Items Class Name">
      
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
<div class="col-md-2"></div>
