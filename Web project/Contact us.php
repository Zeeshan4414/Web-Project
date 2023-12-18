<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="icon" href="APPLE LOGO.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #d2d8b9;
        }
        
        .collapse{
            
            margin-left: 17%;
        }
        .collapse ul li{
            margin-left: 10px;
        }
        #navbarSupportedContent ul li a:hover{
         padding-bottom: 2px;
          border-bottom: 2px solid gainsboro;
          border-top: 1px solid gainsboro;
          border-radius: 10%;
          color:#687fb1;
        }
        .navbar .container-fluid form button:hover{
          background-color: rgb(129, 117, 117);
          color: rgb(158, 145, 128);
        }


        .contact-section {
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            background:linear-gradient( 45deg, burlywood, rgb(182, 174, 174));
            margin: 150px 50px;
            
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        

        .contact-info,
        .contact-form {
            flex: 1;
        }

        .contact-info div {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-info div i {
            margin-right: 10px;
            color: #333;
        }

        .contact-form h2 {
            color: #333;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
        }

        .text-box,
        textarea {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .send-btn {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
.logo a img{
  transition: transform 0.5s ease ;
}  
.logo a img:hover{
  transform: scale(1.5);
}

     @media (max-width: 1024px) {
    .contact-section {
      
        flex-direction: column;
        align-items: center;
        margin: 150px 20px;
    }
    .contact-info,
    .contact-form {
        width: 100%;
    }
}

@media (max-width: 767px) {
    .contact-section {
        margin: 150px 10px;
    }

    .contact-info,
    .contact-form {
        width: 80%;
        
    }

    .contact-info div {
        flex-direction: column;
        align-items: flex-start;
    }
}
@media (max-width: 1000px) {
          form .me-2{
            margin-left: 32px;
          }
        }

    </style>
</head>

<body>


      <?php include('user_navbar.php'); ?>


   
    <div class="contact-section">
        <div class="contact-info">
            <div><b>Main HeadQuater:</b></div>
            <div><i class="fas fa-map-marker-alt"></i>USA, NewJersey1 Infinite Loop, Cupertino, California.</div>
            <div><i class="fas fa-phone"></i>+090 078601</div>
            <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
            <div><i class="fas fa-clock"></i><b>Branch 1:</b><br> 20 Providence Place
                Providence, RI 02903<br>
                Cell NO: (401) 533-9400</div>
            <div><i class="fas fa-clock"></i><b>Branch 2:</b><br> 1229 Wisconsin Avenue NW
                Washington, DC 20007 <br>
                Cell NO: (202) 572-1460
                </div>
            <div><i class="fas fa-clock"></i><b>For Complain Email us at:</b> CustomerSupport@gmail.com</div>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Send">
            </form>
        </div>
    </div>
    <!--contact section end-->
    <?php include ('footer.php'); ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
