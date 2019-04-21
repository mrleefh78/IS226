<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addrequest" onclick="location.href='<?php echo base_url(); ?>release/create';" >Create Request</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
       <th scope="col">Location</th>
      <th scope="col">Department</th>     
      <th scope="col">Request By</th> 
       <th scope="col">Status</th>
      <th scope="col">Approved By</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($release as $rel) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>release/edit/<?php echo ($rel['release_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('release/delete/' .$rel['req_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $rel['release_id']; ?></td>
      <td><?php echo $rel['req_date']; ?></td>
      <td><?php echo $rel['location']; ?></td>
        <td><?php echo $rel['department']; ?></td>       
      <td><?php echo $rel['req_by']; ?></td>
       <td><?php echo $rel['status']; ?></td>
       <td><?php echo $rel['authorize_by']; ?></td>
     
     
     
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






