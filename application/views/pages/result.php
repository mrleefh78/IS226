
<h2>Search User</h2>

<br>
<div>


<tr class="table-secondary">


 <tbody>

        <?php

        if(count($cari)>0)
        {
            foreach ($cari as $data) {

             echo "<b>First Name:\t</b>". $data->first_name."<br>"  ;
             echo "<b>Last Name:\t</b>". $data->last_name."<br>"  ;
             echo "<b>User Name:\t</b>".$data->user_name."<br>" ;
             echo "<b>Role:\t</b>".$data->account_type."<br>" ; 
             echo "<b>Email:\t</b>".$data->user_email ."<br>" ;

            //echo $data->first_name ." " .$data->last_name." ".$data->user_name." ".$data->account_type." ".$data->user_email;
          
           echo "<br />" ;
            } 
        }
        else
        {
            echo "User does not exist";
        } 

    ?>    </tr>

</tbody>

</div>