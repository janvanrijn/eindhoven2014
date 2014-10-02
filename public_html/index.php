<?php require('header.php'); ?>
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
                <h1>Eindhoven 2014</h1>
                <p>This is the third workshop featuring OpenML, succeeding Leuven 2012 and Zurich 2013. Although the workshop has a hackathon nature, the first day will be dedicated to various scientific presentations, featuring OpenML.</p>
                <p><a class="btn btn-lg btn-primary" href="program.php" role="button">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/metaforum.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Registration</h1>
                <p>This gives you access to the scientific program, including a talk of Prof. Dr. Ross King, and the hackathon. Make sure to bring your own laptop with you. Registration is free, but registration is required</p>
                <p><a class="btn btn-lg btn-primary" href="<?php $pages['Register']; ?>" target="_blank" role="button">Register now</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="images/canals.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Hotels and directions</h1>
                <p>Eindhoven has an airport positioned close by and also Amsterdam Airport has a good transport network going to Eindhoven. The campus is located next to the train station.</p>
                <p><a class="btn btn-lg btn-primary" href="directions.php" role="button">Get directions</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
<?php require('footer.php'); ?>
