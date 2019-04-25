<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send_Massage</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.min.css">
  </head>
  <body id="bodyPic">
       <div class="login-box">
         <h1 style="text-align:center;color:	rgb(217, 38, 38);">Send us a Message</h1>
         <form action="message.php" method="POST">
           <div class="container mx-4">
             <div class="row">
              <div class="col-md-10">
           <div class="form-group">
             <label for="exampleInputName">Name</label>
             <input name="name"type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter your Name">
          </div>

       <div class="form-group">
        <label for="exampleInputEmail">Email</label>
         <input name="email"type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your Email">
         <small id="emailHelp" class="form-text text-muted"><p class="text-white";>We'll never share your email with anyone else.</p></small>

         <div class="my-4">
            <label for="exampleInputInstitution">Institution/Company</label>
               <input name="Institution" type="Institution" class="form-control" id="exampleInputInstitution" aria-describedby="InstitutionHelp" placeholder="Enter your Institution/Company">
         </div>

        <div class="my-4">
           <label for="exampleFormControlTextarea1">Send your Message</label>
           <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <label for="exampleInputDivision">Division</label>
         <select name="division" class="form-control">
         <option>Dhaka</option>
         <option>Sylhet</option>
         <option>Chittagong</option>
         <option>Rangpur</option>
         <option>Mymensingh</option>
         <option>Rajshahi</option>
         <option>Rangpur</option>
         <option>Barishal</option>

         </select>
       </div>
         <button name="submit"type="submit" class="btn btn-primary">Submit</button>
         </div>
        </div>
      </div>
    </form>
    </div>


      <script src="../../js/jquery-3.3.1.min.js"></script>
      <script src="../../js/popper.min.js"></script>
      <script src="../../js/bootstrap.min.js"></script>
      <script src="../../js/all.min.js"></script>


  </body>
</html>
