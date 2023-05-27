<main class="col-md-9 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Accounts Detail </h1>
    </div>



<?php 
 
 $user = 'root';
 $password = '';
   
 $database = 'form';
   
 
 $servername='localhost';
 $success = mysqli_connect("localhost", $user, $password, "dbproject");
     
     $query = 'SELECT * FROM form';
     if ($is_query_run = mysqli_query($success, $query))

     { ?>
         <table class="table table-bordered">
        <thead>
            <tr>
                <th width="50px">ID</th>
                <th width="50px">Email</th>
                <th width="50px">First Name</th>
				<th width="50px">Last Name</th>
                <th width="50px">Nick Name</th>
                <th width="50px">Country</th>
                <th width="50px">Gender</th>
                <th width="50px">Marital Status</th>
				<th width="50px">Profession</th>
                <th width="50px">Education</th>




            </tr>
            </thead>
            <tbody>

            <?php
         while ($query_executed = mysqli_fetch_assoc ($is_query_run))
         {
            ?>
                <tr>
            
                    <td><?php 
                    echo $query_executed['id'];
                    ?></td>

                    <td><?php 
                    echo $query_executed['email'];

                    ?></td>
					
					<td><?php 
                    echo $query_executed['firstname'];

                    ?></td>
					
					<td><?php 
                    echo $query_executed['lastname'];

                    ?></td>
					
					<td><?php 
                    echo $query_executed['nickname'];

                    ?></td>
					
					<td><?php 
                    echo $query_executed['country'];

                    ?></td>
					
					<td><?php 
                    echo $query_executed['gender'];

                    ?></td>
					<td><?php 
                    echo $query_executed['martialStatus'];

                    ?></td>
					<td><?php 
                    echo $query_executed['profession'];

                    ?></td>
					<td><?php 
                    echo $query_executed['education'];

                    ?></td>

                    <td>
                    <a class="btn btn-sm btn-outline-danger" >delete </a>

                    
                    <a class="btn btn-sm btn-outline-primary" >edit </a>


                    </td>
                    


                </tr>

             <?php
         }
         
     }
   
   ?>
    
            
                
    </tbody>
    </table>

</main>
