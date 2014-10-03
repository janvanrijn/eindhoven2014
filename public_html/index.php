<?php require('header.php'); ?>
<section class="block">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/eindhoven.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>OpenML @ Eindhoven</h1>
		<p>October 20-24, 2014</p>
                <p>OpenML aims to connect data, tools, and people online to do machine learning better, together.</p>
                <p>Learn all about networked machine learning from prominent speakers, meet a helpful community of researchers, and break out your laptop to get started in the Hackathon.</p>
                <p><a class="btn btn-lg btn-primary" href="program.php" role="button">Scientific program and Hackathon</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/metaforum.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Research different</h1>
                <p>OpenML is a place where scientists can freely share and reuse data, tools and experiments, and help other scientists (and students) to explore and use machine learning techniques in practice.</p>
		<p>Learn about interdisciplinary applications from Prof. Dr. Ross King, how OpenML is readily integrated in many machine learning tools, and how to get started.</p>
                <p><a class="btn btn-lg btn-primary" href="https://docs.google.com/forms/d/1eo8K_7ulkLjoCcKfkoCz-Xw1mj80lZISIBYISVoEHns/viewform?c=0&w=1" target="_blank" role="button">Register now</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/canals.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Hotels and directions</h1>
                <p>Eindhoven has its own airport, and is well connected to Amsterdam Airport as well. The venue is located on the TU/e campus, next to the main train station, and close to the old city center.</p>
                <p><a class="btn btn-lg btn-primary" href="directions.php" role="button">Get directions</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
</section>
<?php require('footer.php'); ?>
