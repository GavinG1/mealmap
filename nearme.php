<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> MealMap </title>
	<!--- Font awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<!--- Scroll reveal CDN ---->
	<script src="https://unpkg.com/scrollreveal"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="./main.css"></link>
</head>
<body>
	<header>
		<div class="container">
			<nav class="nav">	
				<div class="menu-toggle">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
                </div>
                <a href="index.html" class="logo1"><img src="logo.png" alt=""> </a>
                <ul class="nav-list">
                	<li class="nav-item">
                		<a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                		<a href="browse.html" class="nav-link">Browse</a>
                    </li>
                    <li class="nav-item">
                		<a href="nearme.html" class="nav-link active">Near Me</a>
                    </li>
                    <li class="nav-item">
                		<a href="res.html" class="nav-link">My Reservations</a>
                    </li>
                </ul>
		    </nav>
			
	    </div>
		
		<br>
		<br>
		
		<h1>
		<div id="mapheading">       Restaurants Nearby        </div>
		</h1>
	</header>
    <!---Header ends--->
	
	<section class="hero" id="hero">
      <div class="container">
	  </div>
	 
	  <div id="map"></div>
      
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(53.3497645, -6.2602732),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
      </div>
  </section>
  
  
  
  <div id="map"></div>
  
  
  <!--- google api key --->
  
  <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVjO_k4XcKwp451zcjGhABq7fOB4MiLmY&callback=initMap">
    </script>
	
	

  <footer>
        <div class="container">
           <div class="back-to-top">
               <a href="#hero"><i class="fas fa-chevron-up"></i></a>
           </div>
           <div class="footer-content">
               <div class="footer-content-about animate-top">
                <h4>About MealMap</h4>
                   <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                   <p>  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
               </div>
               <div class="footer-content-divider animate-bottom">
                   <div class="social-media">
                       <h4>Follow Along</h4>
                          <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                             </li>
                             <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                             </li>
                          </ul>
                      </div>
                      <div class="newsletter-container">
                        <h4>Newsletter</h4>
                        <form action="" class="newsletter-form">
                            <input type="text" class="newsletter-input" placeholder="Your email address ...">

                            <button class="newsletter-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                      </form>
                  </div>
              </div>
          </div>
    </footer>
    <!--- footer ends --->
 <script src="main.js"></script>
</body>
</html>
