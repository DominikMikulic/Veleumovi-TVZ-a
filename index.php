<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Veleumovi TVZ-a</title>
</head>

<body>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="home">
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <div class="center">
      <a class="navbar-brand" href="#">Veleumovi TVZ-a</a>
  </div>
    </div>
    <div>
      <div class="collapse navbar-collapse naviprolagodba" id="myNavbar">
        <ul class="nav navbar-nav navbar-center">
          <li><a href="#home"><span class="tst">Početna</span></a></li>
          <li><a href="clanovi.php"><span class="tst">O članovima</span></a></li>
          <li><a href="galerija.php"><span class="tst">Galerija</span></a></li>
          <li></li>
        </ul>
        <form class="form-inline search navbar-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid home">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 title">
				<h1>Upoznaj najbolji projektni tim TVZ-a </h1>
				<div class="description">
				<p>Web stranica o timu i članovima tima</p>
			</div>
            </div>
            <div class="col-12 col-lg-6">
				<div class="logo">
                    <img src="logo.png">
			    </div>
			</div>
		</div>
    </div>
</div>

<!--SREDINA-->

<div class="container-fluid abt">
    <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 spusti_sliku">
        <img src="testna.jpg">
        </div>
          <div class="col-12 col-lg-6 info">
           <h2>Projektni tim - Veleumovi TVZ-a</h2>
          <p class="spustip">Mi smo projektni tim Veleumovi TVZ-a. Počeli smo s djelovanjem 1.3.2021 godine u sklopu kolegija Projektno programiranje</p>
          <p class="spustip">Mladi i ambiciozni, željni učiti i napredovati. Svi članovi tima pohađaju Tehničko Veleučilište u Zagrebu. Tim se sastoji od 4 člana tima.</p>
          <p class="spustip">Zajedno timskim radom radimo na projektima, korisničkim zahtjevima, prototipima i na kraju kreiramo i konačno rješenje</p>
      </div>
    </div>
    </div>
    </div>

        <!--LINK NA O članovima-->

    <div class="container-fluid abt linkPozadina">
        <div class="container">
        <div class="row dolje">
          <div class="col-12 col-lg-12">
                <div id="naslov1">
                    <h3>Želiš upoznati naše članove?</h3>
                </div>
                <div id="tekst">
                    <p>Svako od nas je drugačiji, ali svi imamo iste ciljeve. Saznaj više o našim članovima pritiskom na sljedeći gumb</p>
                <div class="menub spusti_gumb">

                        <a href="clanovi.php">Članovi tima</a>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
<footer>

<div class="container-fluid footer dolje">
  <div class="container">
  <div class="row">
    <div class="col-12 odjava">
      <h2>VELEUMOVI TVZ-A</h2>
      <div class="line"></div>

  </div>
  <div class="row ende">
    <p>Copyright ©2021 <span class="crveno">Veleumovi TVZ-a.</span> All Rights Reserved.</p>
    <p>Website designed by Veleumovi TVZ-a</p>
  
  </div>
  <div class="row ikone">
        <div class="col-12">
    <h2><a href=""><i class="fab fa-facebook"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a></h2>
  </div>
  </div>
  </div>
</div>

</footer>

</body>

</html>