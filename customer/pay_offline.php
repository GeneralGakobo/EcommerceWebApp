<?php

@session_start();

if(!isset($_SESSION["customer_email"])){

echo "<script>window.open('../checkout.php','_self');</script>";	

}

?>

<center><!-- center Starts -->

<h1> Pay OffLine Using Method  </h1>

<p class="text-muted" >

If you have any questions, please feel free to <a href="../contact.php" >contact us,</a> our customer service center is working for you 24/7.

</p>

</center><!-- center Ends -->

<hr>


<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th> Bank Account Details </th>

<th> Easy Paisa,Mobi Cash Details: </th>

<th> Western Union Details: </th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<tr>

<td> Bank Name:KCB Account No:03333333 Branch Code:0342 Branch Name:karatina	 </td>

<td> NIC#001234567 Mobile No:0712566931, Name:Gakobo David </td>

<td> Full Name:Gakobo David, Mobile No:0715566931, Name:Gakobo David, Country:Kenya, N.I.C No:001234567
</td>


</tr>

</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->