
<html>
<style>
  table{
    width: 900px;
    text-align: center;
    margin-top: 100px;
  }
  img{
    height: 130px;
    width: 130px;
  }
  table tr,th{
    border-collapse: collapse;
  }
  td{
    background-color: snow;
    padding: 35px;
    font-family: "Gill Sans", sans-serif;
    font-size: 20px;
  }
  body{
    background: url(../img/tiback.jpg);
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 20px;

  }
  a{
    text-decoration: none;
    font-weight: bold;
    color: yellow;
  }
  input{
    background: pink;
    cursor: none;
    padding: 20px;
    font-family: cursive;
    font-size: 15px;
    border: 2px solid crimson;
  }
  .fi{
    width: 100%;
    height: 40px;
    text-align: left;
    font-size: 20px;
    font-family: "Gill Sans", sans-serif;
    font-style:italic;      
  }
</style>
<head>
  <title></title>
</head>
<body>
  <div class="fi">
    <a href="home.html">< Go Home</a>
  </div>

  <table rules="rows">
             <tr  style="background: white">
                 <th>TICKET</th>
                 <th>MATCH</th>
                 <th>STADIUM</th>
                 <th>TIME</th>
                 <th>PRICE</th>
                 <th>CUT</th>
             </tr>
  <?php 
    include_once '../controller/ticketController.php';

    ?>
             <?php 
             include_once '../repository/ticketRepository.php';

             $ticketRepository = new TicketRepository();

             $tickets = $ticketRepository->getAllTickets();

             foreach($tickets as $ticket){
                echo 
                "

                
                <tr>
                   <td style='background:#101820FF'><img src='../Img/$ticket[image]' width='100px' height='100px';</td>
                     <td>$ticket[name] </td>
                     <td>$ticket[stadium] </td>
                     <td>$ticket[timee] </td>
                     <td>$ticket[price] </td>

                     <td style='background:#101820FF'><a href='payticket.php?id=$ticket[id]'>CUT</a> </td>
                     
                </tr>
                ";
             }

             ?>
             


</body>
</html>