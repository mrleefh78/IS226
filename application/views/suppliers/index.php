<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addsuppliers" onclick="location.href='<?php echo base_url(); ?>suppliers/create';" >Add Supplier</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">Supplier ID</th>
      <th scope="col">Supplier Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact No</th>
      <th scope="col">Contact Person</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($suppliers as $supp) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>suppliers/edit/<?php echo ($supp['supplier_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('suppliers/delete/' .$supp['supplier_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $supp['supplier_id']; ?></td>
      <td><?php echo $supp['supplier_name']; ?></td>
      <td><?php echo $supp['address']; ?></td>
      <td><?php echo $supp['contact_no']; ?></td>
      <td><?php echo $supp['contact_person']; ?></td>
      <td><?php echo $supp['email']; ?></td>
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>






