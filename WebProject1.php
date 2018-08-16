<!DOCTYPE html>
<html lang="en">
<head background="https://www.planwallpaper.com/static/images/001_Fish-Wallpaper-HD.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<?php include("Web_process.php");?> 
<!-- jQuery library -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>  <!--  for flip and panel section  -->
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown(5000);
    });
    $("#stop").click(function(){
        $("#panel").stop();
    });
});




</script>


  <style>
		body, html {
            height: 100%;
            margin: 0;
			background-color: #000000;
}
	  
	  .centered {
			text-transform: capitalize;
			font-style :italic;
			font-weight : bold;
			font-size: 300%;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
}
        #panel,#flip {
    padding: 5px;
    font-size: 18px;
    text-align: center;
    background-color: #000000;
    color: white;
    border: solid 1px #666;
    border-radius: 3px;
}
        #panel {
    padding: 50px;
    display: none;
}
.var{
	       background-image : url(http://bestanimations.com/Books/old-spell-book-candle-mood-witch-magic-animated-gif.gif);
		    height: 100%; 
			background-position: center;
			background-repeat: no-repeat;
			background-size: 100% 100%;
	  }

	 </style>
  
<html>
<head>
<title>Books World</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">  <!--  Navbar Creation  -->
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BOOK WISH</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#doodle">Home</a></li>
    </ul>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#basicMod" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>  <!--  MODAL creation -->
      <li><a href="#" data-toggle="modal" data-target="#basicModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="modal fade" id="basicModal" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login Form</h4>
            </div>
            <div class="modal-body">
				<div class="row">
                  <div class="col-xs-6">
                      <div class="well">
				<form method="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"" method = "POST" name="login_form" >										<!--  login form inside modal-->
				<label for="eid"><b>Username : </b></label>
              <p><input type="email" class="span3" name="eid" min="20" max="50" id="email" placeholder="Email" required="required"></p>
			  <span class="error"><?= $eid_error?></span>
			  <label for="passwd"><b>Password : </b></label>
              <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
              <p><button type="submit" class="btn btn-info">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
            </form>
			</div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss= "modal" >Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
              </div>
			  </div>
			  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">FREE</span></p>
                      <ol style="line-height: 2">
                          <li>See all your orders</li>
                          <li>Fast re-order</li>
                          <li>Save your favorites</li>
                          <li>Fast checkout</li>
                          <li> Get a gift <small>(only new customers)</small></li>
                      </ol>
                      <p><a href="/new-customer/" class="btn btn-info btn-block ">Yes please, register now!</a></p>
                  </div>
           </div>
       </div>
     </div>
	 </div>
	 </div>
	 
	 
<div class="modal fade" id="basicMod" role="dialog" aria-labelledby="basicMod" aria-hidden="true">						<!--  sign up form inside modal -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title" id="myModalLabel">Sign Up Form</h4>
            </div>
            <div class="modal-body">
				<div class="row">
                  <div class="col-xs-12">
                      <div class="well">
				<form method="POST" action="conn.php" name="login_form">
				   
				     <label for="nam"><b>Name : </b></label>
                     <p>
					 <input type="text" class="span3" name="name" min="10" max = "20" id="name" 
					 placeholder="Enter Your Name" pattern="[a-zA-Z]{1,}" oninvalid="setCustomValidity('Please Enter a Valid Name')" 
					 onchange="try{setCustomValidity('')}catch(e){}" required="required">
					 </p>
					 <span class="error"><?= $nam_error?></span>
			  
						<label for="mobno"><b>Mobile No. : </b></label>
						<p><input type="number" class="span3" name="phone" placeholder="Enter your Mobile No." required="required"></p>
						<span class="error"><?= $mobno_error?></span>
		
						<label for="eid"><b>Email : </b></label>
						<p><input type="email" class="span3" name="emailid" id="email" placeholder="Enter your email" required="required"></p>
						<span class="error"><?= $eid_error?></span>
					
					
						<label for="passwd"><b>Password : </b></label>
						<p><input type="password" class="span3" name="passwd" placeholder="Password" required="required"></p>
					
			  </br>
			  <h5><bold>We will send you a text to verify your phone.
             Message and Data rates may apply.</bold></h5>
              <p><button type="submit" class="btn btn-info" name="submitbtn">Sign in</button>
                <a href="#">Forgot Password?</a>
              </p>
			  
            </form>
			</div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss= "modal" >Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
              </div>
			  </div>
			  
           </div>
       </div>
     </div>
	 </div>
	 </div>


<div class = "var">
<div class ="centered" style="color:#ffffff;">“Fairy tales are more than true: not because they tell us that dragons exist, but because they tell us that dragons can be beaten.”</div>
  </div>
  <div id="doodle">
 <div id="flip">Click Here to Know About Us ! </div>
 <div id="panel"><mark>We are a non profit organization collecting, analyzing and visualizing different genres of books to advance the Global Goals of the Universe.</mark>
 </br>
 </br>
There are a number of good stores from where you can buy books online. 
Though, the pricing of the books varies from store to store.
 Your favorite online store might not be THE cheapest every time. 
 So depending on how much you're saving and if your book's availability, you might want to get a book from somewhere other than your preferred store. 
We help you do all this in just one click! 
</br>
Check out our best collections below !! 
 </div>
 </div>
 
 </br>
 </br>
 

<div class="container-fluid">																		<!-- IMAGE CAROUSAL creation -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel"  data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2" ></li>
	   <li data-target="#myCarousel" data-slide-to="3" ></li>
	    <li data-target="#myCarousel" data-slide-to="4" ></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="https://bookscomefirst.files.wordpress.com/2015/11/pimg_7988.jpg" alt="Los Angeles" style="width:100%; height:50%;">
        <div class="carousel-caption">
          <h3><bold>2 States</bold></h3>
          <p> Chetan Bhagat</p>
        </div>
      </div>

      <div class="item">
        <img src="https://cc-media-foxit.fichub.com/image/fox-it-mondofox/f6dba1d2-03a2-4a94-8790-414bd029b91e/harry-potter-cursed-child-film-maxw-654.jpg" alt="Chicago" style="width:100%;  height:50%;">
        <div class="carousel-caption">
          <h3><bold>Harry Potter and The Cursed Child</bold></h3>
          <p>J K Rowling</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://static.pulse.ng/img/incoming/origs3874371/1355567943-w644-h429/book-classic-couple-jane-austen-pride-and-prejudice-Favim.jpg" alt="New York" style="width:100%;  height:50%;">
        <div class="carousel-caption">
          <h3><bold>Pride And Prejudice</bold></h3>
          <p>Jane Austen</p>
        </div>
      </div>
	  
	  <div class="item">
        <img src="http://www.phlmetropolis.com/War%20%26%20Peace.jpg" alt="New York" style="width:100%;  height:50%;">
        <div class="carousel-caption">
          <h3><bold>War and Peace</bold></h3>
          <p>Leo Tolstoy</p>
        </div>
      </div>
	  
	   <div class="item">
        <img src="http://www.vetogate.com/upload/photo/gallery/155/3/399.jpg" alt="New York" style="width:100%;  height:50%;">
        <div class="carousel-caption">
          <h3><bold>Fifty Shades of Grey</bold></h3>
          <p>E L James</p>
        </div>
		</div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
