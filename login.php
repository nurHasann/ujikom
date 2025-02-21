<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>LOGIN</title>
</head>
<body>
<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="controllers/user.php?aksi=login" method="post">
                        <input class="flip-card__input" name="Username" placeholder="Username">
                        <input class="flip-card__input" name="Password" placeholder="Password" type="password">
                        <button type="submit" name="login"  class="flip-card__btn">Let`s go!</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" action="controllers/user.php?aksi=register" method="post">
                        <input class="flip-card__input" name="Username" placeholder="Username" type="text">
                        <input class="flip-card__input" name="NamaLengkap" placeholder="Nama Lengkap" type="text">
                        <input class="flip-card__input" name="Password" placeholder="Password" type="password">
                        <input class="flip-card__input" name="Role" type="hidden" value="pegguna">
                        <button type="submit" name="register" class="flip-card__btn">Confirm!</button>
                     </form>

                  </div>
               </div>
            </label>
        </div>   
   </div>
</body>
</html> -->
<?php
session_start();
if (isset($_SESSION['success_message'])) {
    echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
    unset($_SESSION['success_message']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="assets/css/login.css">
  
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="controllers/user.php?aksi=register" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input  name="Username" placeholder="Username" type="text" required="">
					<input  name="NamaLengkap" placeholder="Nama Lengkap" type="text" required="">
             <input name="Password" placeholder="Password" type="password" required="">
					<input  name="Role" type="hidden" value="Pengguna" >
					<button  type="submit" name="register" >Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="controllers/user.php?aksi=login" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input name="Username" placeholder="Username">
					<input name="Password" placeholder="Password" type="password" required="">
					<button type="submit" name="login" >Login</button>
				</form>
			</div>
	</div>
</body>
</html>