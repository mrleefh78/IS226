<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addrequest" onclick="location.href='<?php echo base_url(); ?>requests/create';" >Create Request</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Request ID</th>
      <th scope="col">Date</th>
       <th scope="col">Location</th>
      <th scope="col">Department</th>     
      <th scope="col">Request By</th> 
       <th scope="col">Status</th>
      <th scope="col">Approved By</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($pr as $req) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>requests/edit/<?php echo ($supp['req_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('pr/delete/' .$pr['req_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $pr['req_id']; ?></td>
      <td><?php echo $pr['req_date']; ?></td>
       <td><?php echo $pr['location']; ?></td>
        <td><?php echo $pr['department']; ?></td>        
      <td><?php echo $pr['req_by']; ?></td>
       <td><?php echo $pr['status']; ?></td>
       <td><?php echo $pr['authorize_by']; ?></td>
     
     
     
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






