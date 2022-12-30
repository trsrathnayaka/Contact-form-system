<html>
<head>
    <title>Contact us form </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
table, th, td {
  border: 0px solid black;
   border-collapse: collapse;
}

th, td {
  padding: 80px;
}

</style>


</head>
<body>


    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
           



    <div class="container">
        <br><br>
        <center><h1><b>Contact Us Form</b></h1></center><br>
        <table>
  <tr>
    <th>
    
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="fname"><b>Firstname</b></label>
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First Name" required>
            </div>
            <div class="form-group">
                <label for="lname"><b>Lastname</b></label>
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Your Last Name" required>
            </div>
            <div class="form-group">
                <label for="phone"><b>Phone</b></label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone Number" required>
            </div>
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" required>
            </div>
            <div class="form-group">
                <label for="message"><b>Message</b></label>
                <textarea type="text" name="message" id="message" class="form-control" placeholder="Enter Your Message" rows="4" cols="50" required></textarea>
            </div>
            <br><br>
            <center>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">cancel</button>
    </div>
</center>
        </form>
    </th>
    <th><h1><center><b>Get in touch with us!</b></center></h1><br><br><br><p><center><b>Email us:- ranu@gmail.com</p></b></center><br><br><br><p><center><b>Customercare Hotline:- 011-5673567</b></center></p><br><br><br>
        <p><center><b>Address:- No:45/E,Gampaha,Sri Lanka.</b></center></p><br><br><br><br>
        </th>

  </tr>
 
</table>
    </div>
     </ul>
    </div >

</body>

</html>