<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resume Pro! | Build</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
<div id="header" class="container">
    <div id="logo">
        <h1><a href="#"><strong>Resume Pro!</strong></a></h1>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="index.html" accesskey="1" title="Homepage">Homepage</a></li>
            <li><a href="#" accesskey="2" title="About Us">About Us</a></li>
            <li class="current_page_item"><a href="#" accesskey="3" title="Build">Build</a></li>
            <li><a href="contact-us.html" accesskey="4" title="Contact Us">Contact Us</a></li>
        </ul>
    </nav>
</div></div>
<div id="page" class="container">
	<div id="banner">
    	<!--Insert a banner image here?-->
		<ul>
        	<li>
            	<div class="title">
				<h2>Resume Details</h2>
                </div>
            </li>
		</ul>
	</div>
    <div id="dets">
        <h2>Step 2: Input details...</h2>
        <form>
        	<input type="hidden" value="<?php echo "data passed between pages"; ?>">
            <h3>Biodata</h3>
            <p>
                <label for="address">Address:</label>
                <input type="text" name="address">
            </p>
        
            <p>
                <label for="phone">Phone number:</label>
                <input type="text" name="phone">
            </p>
        
            <p>
                <label for="email">Email address:</label>
                <input type="email" name="emailAddress">
            </p>
        
            <p>
                <label for="personal summary" class="lblAdj">Enter personal summary:</label>
                <textarea name="personalSummary"></textarea>
            </p>
            <h3> Employment History </h3>
            <p>
                <label>From</label> <input type="date" name="employmentFromDate"> to <input type="date" name="employmentToDate">
            </p>
            <p>
                <label for="work place">Work place:</label>
                <input type="text" name="workPlace">
            </p>
            <p>
                <label for="work description" class="lblAdj"> Work description:</label>
                <textarea name="workDescription:"></textarea>
            </p>
            <button id="moreWrk" class="more btn">Add 1 more</button>
        
            <h3> Education</h3>
            <p>    
                <label>From</label> <input type="date" name="educationFromDate"> to <input type="date" name="educationToDate">
            </p>
            <p>
                <label for="Degree type">Degree type:</label>
                <select>
                    <option>BSc</option>
                    <option>MSc</option>
                    <option>MBA</option>
                    <option>MTech</option>
                </select>
            </p>
            <p>
                <label for="Name of school">Name of school:</label>
                <input type="text" name="schoolName">
            </p>
            <button id="moreSchl" class="more btn"> Add 1 more </button>
        
            <h3> Skills </h3>
            <p>
                <label for="skill">Skill:</label>
                <input type="text" name="schoolName">
            </p>
            <p>
                <label for="Skill description" class="lblAdj"> Skill description: </label>
                <textarea name="skillDescription"></textarea>
            </p>
            <button id="moreSkill" class="more  btn"> Add 1 more </button>
        
            <h3> Referees </h3>
            <p>
                <label for="referee name"> Name: </label>
                <input type="text" name="refereeName">
            </p>
            <p>
                <label for="referee work place"> Work place: </label>
                <input type="text" name="workPlace">
            </p>    
            <p>
                <label for="referee email address"> Email address: </label>
                <input type="text" name="refereeEmail">
            </p>
            <p>
                <label for="referee phone number"> Phone number: </label>
                <input type="text" name="refereePhone ">
            </p>
            <button id="moreRef" class="more btn"> Add 1 more </button>
            <br>
            <button id="formBtn" class="btn">Done</button>
		</form>
    </div>
</div>
<footer id="copyright">
	<p>&copy; CSC 823 Students. All rights reserved. </p>
</footer>
</body>
</html>
