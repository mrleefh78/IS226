
<h2>List of Items</h2>
<br>
<div>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Request ID</th>
       <th scope="col">Item</th>
      <th scope="col">Quantity</th>     
      <th scope="col">Unit of Measurement</th> 
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($requestitems as $req) : ?>
  <tr class="table-secondary">
 
      <td><?php echo $req['id']; ?></td>
      <td><?php echo $req['req_id']; ?></td>
       <td><?php echo $req['item_name']; ?></td>
        <td><?php echo $req['quantity']; ?></td>        
      <td><?php echo $req['uom']; ?></td>
              
    </tr>
    <?php endforeach; ?>
   
  </tbody>
</table> 
</div>