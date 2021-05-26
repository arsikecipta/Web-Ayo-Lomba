<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    
    body {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri;
        background: linear-gradient(to bottom, #ffffff 50%, #bae8e8 100%);
    }
    .navbar a {
        overflow: hidden;
        background-color:whitesmoke;       
    }
    .navbar a {
        float: left;
        font-size: 14;
        color: white;
        
    }
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:  #ffffff ;
    top: 0;
    width: 100%;
    }

li {
  color: white;
  display: block;
}

li a {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover{
  background-color:powderblue;
}

.modal-header, h5, .close{
    background-color: white;
    color:black !important;
    text-align: left;
    font-size: 15px;
  }
  .modal-footer {
    background-color: white;
    padding: 10px 30px;
  }

  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:white;
   color: black;
   text-align: center;
   padding: 0;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 320px;
  margin: auto;
  text-align: center;
  font-family: nue_gothic_round;
  border-radius: 5px;
}

.price {
  margin-left: 10px;
  text-align: left;
  color: black;
  font-size: 15px;
  
}

.card button {
  margin-bottom: 15px;
  border: none;
  outline: 0;
  padding: 5px;
  color: white;
  background-color: rgba(0, 140, 255, 0.925);
  text-align: center;
  cursor: pointer;
  width: 85%;
  font-size: 18px;
  border-radius: 3px;
}

.card button:hover {
  opacity: 0.7;
}

.card h4 {
  text-align: left;
  margin-left: 10px;
}

.modal-footer button {
  border: none;
  outline: 0;
  padding: 5px;
  color: white;
  background-color: rgba(0, 140, 255, 0.925);
  text-align: center;
  cursor: pointer;
  width: 20%;
  font-size: 12px;
  border-radius: 3px;
}
</style>


</head>
<title>Ayo Lomba</title>
<body>
<div>
  <nav>
  
    <ul>
    <img src="yoklomba.png" style="float: left; margin-left:30px;margin-top: 10px;" width="130px" weight="120px"> 
      <li style="float: right; margin-left: 15px; margin-top: 10px;"><button style="border: transparent;" type="button" class="btn btn-default btn-lg" id="myBtnRegist">Register</button></li>
      <li style="float: right; margin-left: 15px; margin-top: 10px;"><button style="border: transparent;" type="button" class="btn btn-default btn-lg" id="myBtnLogin">Login</button></li>
    </ul>
  </nav>
</div>
   

<div class="container">
    <div class="modal fade" id="myModalLogin" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header" style="padding:10px 30px;">

          <h5>Login</h5>
          
    </div>
    <div class="modal-body" style="padding:40px 50px;">
    
          <form action="login.php" method="POST" role="form">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="password" class="form-control" name= "pswd" id="pswd" placeholder="Enter password" required>
            </div>
            <div class="modal-footer">
                <button style="background-color: grey; color: white;" type="submit" data-dismiss="modal">Cancel</button>
                <button onclick = "document.getElementById('myBtnLogin') style="background-color: rgba(0, 140, 255, 0.925); color: white;" type="submit">Login</button>
              </div>
          </form>
        </div>
       
      </div>
    </div>
  </div> 
</div>
           
<script>
  $(document).ready(function(){
  $("#myBtnLogin").click(function(){
  $("#myModalLogin").modal();
        });
    });
</script>

<div class="container">
  <div class="modal fade" id="myModalRegist" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 30px;">
          <h5>Register</h5>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form action="register.php" method="POST" role="form">
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="phone">Mobile Phone</label>
              <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter username" required>
            </div>
            <div class="form-group">
              <label for="psw">Password</label>
              <input type="password" class="form-control" name="pswd" id="psw" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="cpsw">Confirm Password</label>
              <input type="password" class="form-control" name="cpswd" id="cpsw" placeholder="Confirm Password" required>
            </div>
            <div class="modal-footer">
                <button style="background-color: grey;"type="submit" data-dismiss="modal">Cancel</button>
                <button name = "register" style="background-color: rgba(0, 140, 255, 0.925);"type="submit">Register</button>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div> 
</div>
           
<script>
  $(document).ready(function(){
  $("#myBtnRegist").click(function(){
  $("#myModalRegist").modal();
    });
  });
</script>

<div style="margin-left: 200px; margin-right: 200px; border-radius: 5px; font-family: calibri; potition: fixed;">
  <h1 style="margin-left: 10px;">Hello Smart People!</h1>
  <p style="margin-left: 10px;">Selamat datang di web Ayo Lomba. Mari berburu lomba dan menangkan hadiahnya!</p> 
<img src = "imgg.png" style="margin-right:-100px;margin-top:-80px;height:450px; weight:600px;float:right;">
<img src = "bul.png"style="height:450px; weight:600px;margin-top:-350px;float:left;margin-left:-150px">
<img src = "lo.png"style="height:400px; weight:500px;margin-top:-90px;float:left;margin-left:30px">
</div>

  
<div class="container" >
  <div class="row" style="padding: 100px; margin-top: -70px;">
    
</div>
<<div class="jumbotron1 text-center" style="margin-bottom:0">
    <p>&copy;Ayo Lomba</p>
</body>          
</html>