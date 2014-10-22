<?php 
require('includes/helpers.php'); 
echoHead();
?>

<!-- Add My Style Links Here -->
<!-- Exclude main.css from admin page -->

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:400,300%7CJulius+Sans+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="styles/admin.css" rel="stylesheet">

<?php echoScripts(); ?>
<!-- Add My Scripts Here -->
<script src="scripts/admin.js"></script>
</head>

<!-- Custom header for admin page -->
<body class="electric">
<header id="main-header">
<nav class="navbar navbar-default" role="navigation">


<ul class="nav navbar-nav navbar-right">
<li><a class="home" href="#"><i class="fa fa-home text-inherit"></i> Home</a></li>


<li class="dropdown themes">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="background-inherit demo-disk"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a data-class="apple" href="#"><span class="apple-instance demo-disk"></span> Apple</a></li>
<li><a class="active" data-class="electric" href="#"><span class="electric-instance demo-disk"></span> Electric</a></li>
<li><a data-class="lime" href="#"><span class="lime-instance demo-disk"></span> Lime</a></li>
<li><a data-class="oak" href="#"><span class="oak-instance demo-disk"></span> Oak</a></li>
</ul>
</li>
</ul>

<h2>MerchanCS - Administration</h2>
	
    

    
<!--<div class="input-group addItem">
<input class="form-control" type="text" placeholder="+ Add New Item">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Submit</button>
</span>
</div>-->
	

</nav>
</header>

<section id="editAside">
	
<nav>

<form name="addItemForm" action="" onsubmit="return validateForm()" method="">
<input type="text" name="newItemText" placeholder="+ Add New Item">
<input type="submit" name="newItemButton"  value="Submit">
</form>    
    <div class="CSSTableGenerator" >
                <table >
                    <tr>
                        <td>
                            <h2>Edit Current Merchandise</h2>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            
                            <li><a class="text" href="#">Edit/Delete</a></li>
                            <h2> Floppy disks </h2>
                            <p> Price: $X.XX </p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            
                            <li><a class="text" href="#">Edit/Delete</a></li>
                            <h2> Bananas </h2>
                            <p> Price: $X.XX </p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            
                            <li><a class="text" href="#">Edit/Delete</a></li>
                            <h2> Wooden Brick </h2>
                            <p> Price: $X.XX </p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td >
                            
                            <li><a class="text" href="#">Edit/Delete</a></li>
                            <h2> Sunscreen </h2>
                            <p> Price: $X.XX </p>
                        </td>
                        
                    </tr>
                </table>
            </div>
</nav>
</section>
</body>
</html>