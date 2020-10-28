<?php include 'includes/header.php';?>



<h2 class="form">Contact ME</h2>


	 
   <main>
   
	<?php


        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "aaljanabi0821@gmail.com";  //place your/your client's email address here
        $toName = "ABDULLAH A ALJANABI"; //place your client's name here
        $website = "Abdulla";  //place NAME of your client's website

        echo loadContact('includes/simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>


</main>

<?php include 'includes/footer.php';?>