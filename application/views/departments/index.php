<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#adddepartments" onclick="location.href='<?php echo base_url(); ?>departments/create';" >Add Departments</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Department ID</th>
      <th scope="col">Department Name</th>
      <th scope="col">Created by</th>
      <th scope="col">Created Date</th>
      <th scope="col">Updated by</th>
       <th scope="col">Updated Date</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($departments as $dept) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>departments/edit/<?php echo ($dept['id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('departments/delete/' .$dept['id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $dept['id']; ?></td>
      <td><?php echo $dept['description']; ?></td>
      <td><?php echo $dept['created_by']; ?></td>
      <td><?php echo $dept['created_date']; ?></td>
      <td><?php echo $dept['updated_by']; ?></td>
      <td><?php echo $dept['updated_date']; ?></td>
    
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






