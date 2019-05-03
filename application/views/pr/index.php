<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addrequest" onclick="location.href='<?php echo base_url(); ?>pr/create';" >Create Request</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Request ID</th>
      <th scope="col">Date</th>
      <th scope="col">PR No</th>
       <th scope="col">Location</th>
      <th scope="col">Department</th>     
      <th scope="col">Request By</th> 
       <th scope="col">Status</th>
       
    
    </tr>
  </thead>
  <tbody>
  <?php foreach($pr as $req) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>pr/edit/<?php echo ($req['pr_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('pr/delete/' .$req['pr_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $req['pr_id']; ?></td>
      <td><?php echo $req['req_date']; ?></td>
      <td><?php echo $req['req_no']; ?></td>
       <td><?php echo $req['location']; ?></td>
        <td><?php echo $req['department']; ?></td>        
      <td><?php echo $req['req_by']; ?></td>
       <td><?php echo $req['status']; ?></td>
     
     
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






