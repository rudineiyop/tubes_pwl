<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheerpen | *ﾟ+</title>
    <link rel="icon" href="{{ asset('/img/mainLogo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    
</head>
<body>

  <div class = "edit">
    <h1 data-shadow="CSS 3D Lettering">
      CHEERPEN by KELOMPOK 7
    </h1>
  </div>

  <br>

  <div class="container py-3 px-3">
  
    <div class="team-content">

      <div class="box">
        <div style="max-height:200px; max-width:300px; overflow:hidden;">
        <img src="{{ asset('img/fenaya.jpg') }}">
        </div>
        <h3>Fenaya Cecilly</h3>
        <h5>Front End Developer</h5>
        <div class="icons">
          <a href=""><i class="ri-mail-fill"></i></a>
          <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>

      <div class="box">
        <div style="max-height:200px; max-width:300px; overflow:hidden;">
        <img src="{{ asset('img/aulia.jpg') }}">
        </div>
        <h3>Rizqi Siti Aulia</h3>
        <h5>Front End Developer</h5>
        <div class="icons">
                    <a href=""><i class="ri-mail-fill"></i></a>
          <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>
  
      <div class="box">
        <div style="max-height:200px; max-width:300px; overflow:hidden;">
        <img src="{{ asset('img/ruth.jpg') }}">
        </div>
        <h3>Ruth Grace</h3>
        <h5>Back End Developer</h5>
        <div class="icons">
          <a href=""><i class="ri-mail-fill"></i></a>
          <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>
  
      <div class="box">
        <div style="max-height:200px; max-width:300px; overflow:hidden;">
        <img src="{{ asset('img/sintong.jpg') }}">
        </div>
        <h3>Sintong Sutanto</h3>
        <h5>Back End Developer</h5>
        <div class="icons">
          <a href=""><i class="ri-mail-fill"></i></a>
          <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>
  
           
      <div class="box">
        <div style="max-height:200px; max-width:300px; overflow:hidden;">
        <img src="{{ asset('img/diva.jpg') }}">
        </div>
        <h3>Diva Anggreini</h3>
        <h5>Front End Developer</h5>
        <div class="icons">
          <a href=""><i class="ri-mail-fill"></i></a>
          <a href="" target="_blank"><i class="ri-instagram-fill"></i></a>
        </div>
      </div>
    </div>

    <br>
    <br>


  <div style="justify-content: center; display : flex">
    <a href="/page/dashboard">
     <button class="custom-btn btn-3"><span>Kembali</span></button>
    </a>
  </div>
  <br>
  <br>

</div>

  <script>
    // This is "probably" IE9 compatible but will need some fallbacks for IE8
// - (event listeners, forEach loop)

// wait for the entire page to finish loading
window.addEventListener('load', function() {
	
	// setTimeout to simulate the delay from a real page load
	setTimeout(lazyLoad, 1000);
	
});

function lazyLoad() {
	var card_images = document.querySelectorAll('.card-image');
	
	// loop over each card image
	card_images.forEach(function(card_image) {
		var image_url = card_image.getAttribute('data-image-full');
		var content_image = card_image.querySelector('img');
		
		// change the src of the content image to load the new high res photo
		content_image.src = image_url;
		
		// listen for load event when the new photo is finished loading
		content_image.addEventListener('load', function() {
			// swap out the visible background image with the new fully downloaded photo
			card_image.style.backgroundImage = 'url(' + image_url + ')';
			// add a class to remove the blur filter to smoothly transition the image change
			card_image.className = card_image.className + ' is-loaded';
		});
		
	});
	
}


  </script>
</body>
</html>