<?php
include "dashboard.php";
?>

	<?php 
    include_once '../controller/tickcutController.php';
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<link rel="stylesheet" type="text/css" href="tables.css">
    	<title></title>
    </head>
    <body>
    	<div class="titulli">
    		<a href="">Biletat</a>
    	</div>
    	
    
    </body>
    </html>
    <table>
             <tr>
             	<th>CLIENT</th>
                 <th>NAME</th>
                 <th>STADIUM</th>
                 <th>TIMEE</th>
                 <th>PRICE</th>
                 <th>BANK</th>
                 <th><img src="">IMAGE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/tickcutRepository.php';

             $tickcutRepository = new TickcutRepository();

             $tickcuts = $tickcutRepository->getAllTickcuts();

             foreach($tickcuts as $tickcut){
                echo 
                "
                <tr>
               		 <td>$tickcut[nameu] </td>
                     <td>$tickcut[name] </td>
                     <td>$tickcut[stadium] </td>
                     <td>$tickcut[timee] </td>
                     <td>$tickcut[price] </td>
                     <td>$tickcut[bank] </td>
                     <td><img src='../Img/$tickcut[image]' width='100px' height='100px' </td>
                     <td><a href='editcut.php?id=$tickcut[id]' style='color:lightseagreen'>Edit</a> </td>
                     <td><a href='deletetick.php?id=$tickcut[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>