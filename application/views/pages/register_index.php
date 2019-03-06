<h2><?=$title?></h2>

<div><button type="button" class="btn btn-primary btn-sm" data-title="Add" data-toggle="modal" data-target="#addusers" onclick="location.href='<?php echo base_url(); ?>pages/create';" >Add User</button></div>    
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      <th></th>
      <th></th>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Account Type</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $u) : ?>
  <tr class="table-secondary">
 
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Edit" ><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>pages/edit/<?php echo ($u['user_id']); ?> ';"  ><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button></p></td>
    <?php echo form_open('pages/delete/' .$u['user_id']) ?>
    
    <td style="width: 50px;"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button></p></td>
    </form>
      <td><?php echo $u['user_id']; ?></td>
      <td><?php echo $u['user_name']; ?></td>
      <td><?php echo $u['first_name']; ?></td>
      <td><?php echo $u['last_name']; ?></td>
      <td><?php echo $u['account_type']; ?></td>
      <td><?php echo $u['user_email']; ?></td>
     
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>