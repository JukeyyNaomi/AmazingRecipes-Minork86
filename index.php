<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
		<title>Navigation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Asap+Condensed" rel="stylesheet" />
		<link type="text/css" href="main.css" rel="stylesheet" />
		<link type="text/css" href="layout.css" rel="stylesheet" />	
		<link rel="icon" href="images/tab-icon.png">
        <script src="main.js"></script>
		<script text="text/javascript">


        </script>

</head>
<body>
    <header class="grid-item header">
        <div class="headmenu" id="navbar">
          <a href="index.html"><h1>Hartverwarmende recepten</h1></a>
            <div class="menutoggle" id="navbar-right">
                <a href="#" onclick="return false;" >&#9776;</a>
            </div>
      </div>
      <nav id="menu" class="inactive">
          <ul>
              <li><a href="#banner" >Home</a></li>
              <li><a href="#" >Recepten</a></li>
              <li><a href="#" >Tips</a></li>
              <li><a href="#" >Over ons</a></li>
              <li><a href="#">Member</a></li> 		
          </ul>
      </nav>
    </header>

    <main style="margin-top:100px;">
        <div class="recipe">
            <h3><?php echo "This is a message from the backend" ?></h3>
            <?php #echo newPost(); ?>
        </div>    
        <div class="recipe">
            <h3>Chicken soup</h3>
            <p>Geplaatst door: Naomi<br/>Bereidingstijd: 60 minuten</p>
            <img class="feature" src="Images/Chicken-soup.jpg" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br/><a href="#">Bekijk recept</a>
        </div>
        <div class="recipe">
            <h3>Easy hot cacao</h3>
            <p>Geplaatst door: Naomi<br/>Bereidingstijd: 60 minuten</p>
            <img class="feature" src="Images/Hot-cacao.jpg" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br/><a href="#">Bekijk recept</a>
        </div>
        <div class="recipe">
            <h3>Glutenfree Lasagna</h3>
            <p>Geplaatst door: Naomi<br/>Bereidingstijd: 60 minuten</p>
            <img class="feature" src="Images/Lasagna-glutenfree.jpg" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br/><a href="#">Bekijk recept</a>
        </div>
        <div class="recipe">
            <h3>Pasta bolognaise</h3>
            <p>Geplaatst door: Naomi<br/>Bereidingstijd: 60 minuten</p>
            <img class="feature" src="Images/Pasta-tomato.jpg" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br/><a href="#">Bekijk recept</a>
        </div>
        <div class="recipe">
            <h3>Hot pot pie</h3>
            <p>Geplaatst door: Naomi<br/>Bereidingstijd: 60 minuten</p>
            <img class="feature" src="Images/pot-pie.jpg" width="100%">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <br/><a href="#">Bekijk recept</a>
        </div>
    </main>

    <aside>
        <div class="add_form">
            <h2>Recept toevoegen</h2>
            <img src="Images/exit.png" id="exit" class="exit">
            <form action="#" method="post">
                <br/><br/><br/><br/><br/>
                <label>Naam recept:</label>
                <input type="text" name="recipe"><br/>
                <label>Uw naam:</label>
                <input type="text" name="publisher"><br/>
                <label>Bereidingstijd:</label>
                <input type="text" name="time"><br/>
                <!-- Upload foto -->
                <label>Ingredienten:</label>
                <input type="text" name="ingredients"><br/>
                <label>Bereiding:</label>
                <input type="text" name="text"><br/>
                
                <input type="submit" name="submit" class="submit" value="submit">
            </form>
        </div>
    </aside>
    <extra>
        <div class="add_button">
            <img src="Images/plus.png">
        </div>
    </extra>

</body>