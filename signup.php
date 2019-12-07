<?php
?>
<html>
  <head>
		<style> 
   body {
	  background-color: black;
  }

h1{
 padding: 3em;
 text-align: center;
 font-size:5em;
 font-family: 'Rock Salt', cursive;
 font-weight: 200;
  border-radius: 5px;
  padding: 4px;
  background-color: white;
  border:10px solid crimson;
  margin-right: 33%;
 }

form{
  color: white;
  font-family: areil;
  font-size: 2em;
  text-align: center;
  padding: 20px;
}



input, textarea {
font-size: 1em;
text-align: center;
background-color:crimson;
border: 10px solid grey;
}

.home {
  width: 100%;
  font-size: 2em;
  background-color: lightgray;
  opacity: .5;
  border-radius: 5px;
  border:2px solid white;
  font-family: areil;
  right:0px;
  margin-top: 15px;
  padding-bottom: 5px;
   
}

.submit{
  background-color: white;
  padding: 10px 25px;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  color: black;
  border:3px solid white;
  font-family: areil;
  font-size: 1em;
  
}
.clear{
  background-color: white;
  padding: 10px 25px;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  margin: 4px 2px;
  cursor: pointer;
  color: black;
  border:3px solid white;
  font-family: areil;
  font-size: 1em;
}

.submit:hover{
  color:green;
}
.clear:hover{
  color:crimson;
}

				</style>
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700i,900i&display=swap" rel="stylesheet">
    </head>
    <body>
        
				<?php $title = "RESUME BUILDER"; ?> 
        <h1><?php echo $title; ?></h1>
        <form action="./resume.php" method="post">
            <div class="container">
        <label for="first">First Name:<?php echo ($_POST['name']); ?></label><br/>
            <input type="text" id="first" name="first">
                <br/>
        <label for="last">Last Name:</label><br/>
            <input type="text" id="last" name="last">
            </div>
						<div>
            <label for="dob">Date of Birth:</label><br/>
            <input type="date" id="dob" name="dob">
            </div>
						<div>
						<label for="url">Github URL</label><br/>
            <input type="url" id="url" name="url">
            </div>
            <div class="container">
            <label for="email">Email:</label><br/>
            <input type="email" id="email" name="email">
            </div>
            <div class="container">
            <label for="phone">Contact Number:</label><br/>
            <input type="tel" id="phone" name="phone">
            </div>
						<br/>
            <div class="container">
              <label for="prevemploy">Previous Employer:</label>
						<p>Please enter (name, address, position, dates employed, contact)</p>
              <textarea id="comments" rows="5"></textarea><br/>
							<br/>
              <div class="container">
              <label for="prevemploy">Previous Employer:</label></br>
							<p>Please enter (name, address, position, dates employed, contact)</p>
              <textarea id="comments" rows="5"></textarea><br/>
							<br/>
              <div class="container">
              <label for="prevemploy">Previous Employer:</label></br>
							<p>Please enter (name, address, position, dates employed, contact)</p>
              <textarea id="comments" rows="5"></textarea><br/>
							<br/>
						<div class="container">
              <label for="prevemploy">Previous Employer:</label></br>
							<p>Please enter (name, address, position, dates employed, contact)</p>
              <textarea id="comments" rows="5"></textarea><br/>
							<br/>
              <label for="prevemploy">Skills and/or Achievements:</label></br>
              <textarea id="comments" rows="5"></textarea><br/>
                  <button type="submit" class="submit">Submit</button>
              </div>
            </form>
            <footer>

        </footer>
        </div>
            </div>
                
        </body>
      

</html>


