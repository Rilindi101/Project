<?php
include "dashboard.php";
?>

	<?php 
    include_once '../controller/orderController.php';
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<link rel="stylesheet" type="text/css" href="tables.css">
    	<title></title>
    </head>
    <body>
    	<div class="titulli">
    		<a href="">Porosite</a>
    	</div>
    	
    
    </body>
    </html>
    <table>
             <tr>
             	<th>CLIENT</th>
                 <th>NAME</th>
                 <th>SIZE</th>
                 <th>PRICE</th>
                 <th>STREET</th>
                 <th>BANK</th>
                 <th><img src="">IMAGE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/porosiaRepository.php';

             $porosiaRepository = new PorosiaRepository();

             $porosite = $porosiaRepository->getAllPorosite();

             foreach($porosite as $porosia){
                echo 
                "
                <tr>
               		 <td>$porosia[nameu] </td>
                     <td>$porosia[name] </td>
                     <td>$porosia[size] </td>
                     <td>$porosia[price] </td>
                     <td>$porosia[street] </td>
                     <td>$porosia[bank] </td>
                     <td><img src='../Img/$porosia[image]' width='100px' height='100px' </td>
                     <td><a href='editporosia.php?id=$porosia[id]' style='color:lightseagreen'>Edit</a> </td>
                     <td><a href='deleteporosia.php?id=$porosia[id]' style='color:red'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>