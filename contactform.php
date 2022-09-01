<?php
if(isset($_POST['submit'])){
   $firstname=$_POST['FIRSTNAME'];
   $useremail=$_POST['email'];
   $message=$_POST['message'];
   

   $mailto= "divyammishra0918@gmail.com";
   $headers= "From: ".$useremail;
   $txt = "You have a message from ".$firstname. "\n".$message;
   mail($mailto, $firstname, $txt, $headers);
   header(Location("thank.html"));




}








?>