<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addlocations" onclick="location.href='<?php echo base_url(); ?>locations/create';" >Add Locations</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Location ID</th>
      <th scope="col">Location Name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($locations as $loc) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>locations/edit/<?php echo ($loc['id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('locations/delete/' .$loc['id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $loc['id']; ?></td>
      <td><?php echo $loc['description']; ?></td>
    
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






