<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.home-attr')
  <title>Najwas | Home</title>
  <style>
    body {
      color: #fff;}
  </style>
</head>
<body>
  <div id="timestamp" class="position-absolute bottom-0 start-50 translate-middle-x"></div>
  <header id="header">
    <div class="container">
      <h1 style="color:white"class="typewriter" id="greeting"><a href="http://old.unsri.ac.id/?act=detil_mahasiswa&mhs=09031182126002-9-10004&akt=2021">
         </a></h1>
      <h2 class="py-3">I'm Najwa Salsabila, an active Sriwijaya University's<br> <span><a style="text-decoration: none; color:#fff;" href="https://si.ilkom.unsri.ac.id/">Information Systems</a></span> student from Regular B</h2>

      <nav id="navbar" class="navbar navbar-mobile">
        <ul>
          <li><a class="nav-link active" href="/">Home</a></li>
          <li><a class="nav-link" href="/about">About</a></li>
          <li><a class="nav-link" href="/portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="/contact">Contact</a></li>
        </ul>
      </nav>

      <div class="social-links">
        <a target="_blank" href="https://twitter.com/nanaalogy" class="twitter"><i class="bi bi-twitter"></i></a>
        <a target="_blank" href="https://facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
        <a target="_blank" href="https://instagram.com/njwaash" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="https://www.linkedin.com/in/najwa-salsabila-34001a237/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <a class="cv-button" href="/cv">Show CV</a>
    </div>
  </header>

    <script>
      function updateTime() {
        var d = new Date();
        var timestamp = d.toLocaleString();
        document.getElementById("timestamp").innerHTML = timestamp;
      }
      setInterval(updateTime, 1000);
    </script>
  
  <script>
		window.onload = function() {
			var d = new Date();
			var hours = d.getHours();
			var greeting;

			if (hours >= 4 && hours < 11) {
				greeting = "Good Morning, have a nice day!";
			} else if (hours >= 11 && hours < 18) {
				greeting = "Hi, Good Afternoon!";
			} else {
				greeting = "Hi, Good Evening!";
			}

			document.getElementById("greeting").innerHTML = greeting;
		}
	</script>
  
</body>
</html>