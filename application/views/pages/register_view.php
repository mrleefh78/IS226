<h2><?=$title?></h2>


<div>
<table class="table table-hover">
 
    <tr><br>
       <form action="<?php echo base_url('pages/search')?>" action="GET">
      <div class="form-group">
                    <label for="search"><b>Search User</b></label>
                    <input type="text" class="form-control" id="cari" name="search" placeholder="Enter Firstname">
      </div>
 <input class="btn btn-primary" type="submit" value="Submit">
            </form>
     
    </tr>
   
   
  
</table> 
</div>