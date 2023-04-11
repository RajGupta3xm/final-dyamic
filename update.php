<?php
    include 'connection.php';
    include 'headerandsidebar.php';
    if (isset($_POST['send']))
    {
        $name = $_POST['name'];
        
        // echo $name;
        // die();
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $id = $_GET['id'];

        $q =" UPDATE `complaincentre` SET `id`= $id,`name`='$name',`email`='$email',`phone`='$phone',`subject`='$subject',`message`='$message' WHERE id =$id ";
        mysqli_query($con, $q);

        header('location:display.php');
    }
?>

<div class="container">
	<div class="row">
		<form action="#" method="post" class="smart-green">
    <h1>Update Complain Centre
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
        
       
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
        
    </label>
    
    <label>
        <span>Your Phone:</span>
        <input id="phone" type="text" name="phone" placeholder="Valid Phone Number" />
        
    </label>
    
    <label>
        <span>Subject :</span><input id="subject" type="text" name="subject" placeholder="Your Full Subject" />
        
    </label>  
    
    <label>
        <span>message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
        
    </label>
        
    <label>
        <span> </span>
        <button type="submit" name="send" class="button" value="Send">Send</button>
    </label>
        </form>
    </div>
</div>
<?php
    include 'footer.php';
?>