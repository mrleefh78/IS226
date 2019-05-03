<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addrequest" onclick="location.href='<?php echo base_url(); ?>po/create';" >Create Purchase Order</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">PO ID</th>
      <th scope="col">PR Reference</th>
      <th scope="col">Date</th>
      <th scope="col">PO By</th> 
      <th scope="col">Status</th>
      <th scope="col">Supplier</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($po as $popr) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>po/edit/<?php echo ($popr['po_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('po/delete/' .$popr['po_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $popr['po_id']; ?></td>
      <td><?php echo $popr['pr_ref']; ?></td>
      <td><?php echo $popr['po_date']; ?></td>
      <td><?php echo $popr['po_by']; ?></td>
      <td><?php echo $popr['status']; ?></td>
       <td><?php echo $popr['supplier_name']; ?></td>
     
     
     
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






