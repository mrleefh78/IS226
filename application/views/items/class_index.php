<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#additemclass" onclick="location.href='<?php echo base_url(); ?>items/class_create';" >Add Item Class</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Item ID</th>
      <th scope="col">Item Name</th>     
      <th scope="col">Created by</th>
      <th scope="col">Created Date</th>
      <th scope="col">Updated by</th>
       <th scope="col">Updated Date</th>
     </tr>
  </thead>
  <tbody>
  <?php foreach($class as $c) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>items/edit_class/<?php echo ($c['item_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('items/delete_class/' .$c['item_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $c['item_id']; ?></td>
      <td><?php echo $c['item_name']; ?></td>
     
      <td><?php echo $c['created_by']; ?></td>
      <td><?php echo $c['created_date']; ?></td>
      <td><?php echo $c['updated_by']; ?></td>
      <td><?php echo $c['updated_date']; ?></td>
      
      
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






