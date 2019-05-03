<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addrequest" onclick="location.href='<?php echo base_url(); ?>ro/create';" >New Receive Order</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Receive ID</th>
      <th scope="col">Date</th>
       <th scope="col">PO Ref No</th>
      <th scope="col">Supplier</th>     
      <th scope="col">Receive By</th> 
      <th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($receives as $re) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>ro/edit/<?php echo ($re['receive_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('ro/delete/' .$re['receive_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $re['receive_id']; ?></td>
      <td><?php echo $re['receive_date']; ?></td>
       <td><?php echo $re['pr_ref']; ?></td>
        <td><?php echo $re['supplier_name']; ?></td>        
      <td><?php echo $re['receive_by']; ?></td>
       <td><?php echo $re['remarks']; ?></td>
     
     
     
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






