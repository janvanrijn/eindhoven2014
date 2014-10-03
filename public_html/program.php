<?php require('header.php'); ?>
<div class="container">

<div class="submenu">
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#scientific" role="tab" data-toggle="tab">Scientific Program</a></li>
    <li><a href="#hackathon" role="tab" data-toggle="tab">Hackathon</a></li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane active" id="scientific">
    <h2>Monday, October 20th 2014</h2>
    <p><a href="directions.php">van Trier room, Traverse Building</a></p>
    <div class="container">
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">12:00-13:00</div>
          <div class="col-md-3">Walk in, coffee</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2"><p class="keynote">13:00 - 14:00</p></div>
          <div class="col-md-7"><p class="keynote">Keynote: <a data-toggle="modal" data-target="#king">Meta-Learning on QSAR data</a><br>
				Prof. Ross King</p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">14:00 - 14:45</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#vanschoren">OpenML: Networked science in machine learning</a><br>
				As. Prof. Joaquin Vanschoren</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">14:45 - 15:00</div>
          <div class="col-md-3">Coffee break</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">15:00 - 15:40</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#torgo">Estimating the Performance of Predictive Models in R</a><br>
				Prof. Luis Torgo</p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">15:40 - 16:20</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#bischl">MLR and OpenML</a><br>
				Dr. Bernd Bischl</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">16:20 - 16:35</div>
          <div class="col-md-3">Coffee break</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">16:35 - 17:00</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#rijn">Meta Learning on Data Streams: A case study</a><br>
				Jan van Rijn</div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="hackathon">
    <div class="row">
     <div class="col-sm-6 pull-right">
      <div class="small-pagefill"><img class="img-responsive" src="images/metaforum3.jpg" /></div> 
     </div>
     <div class="col-sm-6">
    <div>
      <h2>Tuesday 21st - Friday 24th of October</h2>
      <p><a href="directions.php">Room MF 6 & MF 13, Metaforum Building</a></p>
      <p>OpenML is all about <a target="_blank" href="http://arxiv.org/abs/1407.7722">Networked Machine Learning</a>. It offers researchers a new way of organizing results and building upon each other's work.</p>
      <p>The workshop is organized as a hackathon: bring your own laptop, play around with OpenML, and create something great to push your research forward. The complete OpenML team will be available to get you started, answer questions, or even implement new features on the fly. OpenML is an open source project, and everyone is welcome to join.</p>
    
      <p>Play around with the OpenML website, experiment with the Weka, MOA and Rapidminer integrations, and dive into the REST API, Java API, R API or Python API to integrate OpenML into your own tools and projects.</p>
 
      <p>More details on the Hackathon will follow soon.</p>
      </div>
      </div>
    </div>
  </div>
</div>


<div id="king" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Meta-Learning on QSAR data</h4>
        <p class="speaker">Prof. Ross King</p>
      </div>
      <div class="modal-body">
        <p>Abstract will follow soon.</p><p>Prof. Dr. Ross D. King is Professor of Machine Intelligence in the School of Computer Science at the University of Manchester. King's research interests are in the automation of science, drug design, AI, machine learning and synthetic biology. He is probably best known for the Robot Scientist.</p>
      </div>
    </div>
  </div>
</div>

<div id="torgo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Estimating the Performance of Predictive Models in R</h4>
        <p class="speaker">Prof. Luis Torgo</p>
      </div>
      <div class="modal-body">
        <p>This talk will start with a very brief introduction to R and the main concepts of this data analysis environment and programming language. We will then shift focus to predictive tasks and models obtained from data to solve these tasks. Finally, the main topic of the talk will be on how to solve the critical issue of estimating the predictive performance of alternative models to solve some task. This estimation process is key to answer the question of which model is the "best" for a problem we are facing. We will describe the facilities provided by the R package performanceEstimation to address this model selection problem and provide some illustrative case studies. We wrap up with the ongoing plans of interfacing this package to OpenML.</p>
      </div>
    </div>
  </div>
</div>

<div id="bischl" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">R and OpenML</h4>
        <p class="speaker">Dr. Bernd Bischl</p>
      </div>
      <div class="modal-body">
        <p class="abstract">R does not define a standardized interface for all its machine learning algorithms. Thus, you often need to write wrappers to call the different algorithms, implement 
infrastructure for resampling, hyperparameter optimization, feature selection, data pre- and post-processing, and statistical analysis. 'mlr' is an R package that provides this infrastructure so that you can focus on your experiments. Moreover, a second package, 'openml', does all the talking to OpenML to download data, run experiments and upload results, so that all your experiments are organized online. We explain how these packages work, what's next, and how it can be used in applications.</p>
      </div>
    </div>
  </div>
</div>

<div id="vanschoren" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">OpenML: Networked science in machine learning</h4>
        <p class="speaker">As. Prof. Joaquin Vanschoren</p>
      </div>
      <div class="modal-body">
        <p class="abstract">Today, the ubiquity of the internet is allowing new, more scalable forms of scientific collaboration. Such 'networked science' uses online tools to share and organize data on a global scale so that scientists are able to build directly on each other's data and techniques, reuse them in unforeseen ways, and mine all data to search for patterns.</p>

          <p>OpenML.org is a place where machine learning researchers can easily share and reuse data, tools and experiments. It helps machine learning researchers win time by automating experimentation as much as possible, and gain more credit for their work by making it more visible and easily reusable.</p>
          <p>Moreover, OpenML helps scientists and students to explore different machine learning techniques, find out which are most useful in their work, and collaborate with others to analyze scientific data online.</p>

      </div>
    </div>
  </div>
</div>

<div id="rijn" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Meta Learning on Data Streams: A case study</h4>
        <p class="speaker">Jan van Rijn</p>
      </div>
      <div class="modal-body">
        <p class="abstract">Modern society produces vast amounts of data coming, for instance, from sensor networks and various text sources on the internet. Various machine learning algorithms are able to capture general trends and make predictions for future observations with a reasonable success rate. The number of algorithms is large, and most of these work well on a varying range of data streams. However, there is not much knowledge yet about on which kinds of data certain algorithms perform well and when a certain algorithm should be preferred over another.</p>

      <p>In this talk I will address the question how to predict what algorithm will perform well on a given data stream. This problem is generally known as the algorithm selection problem. For each data stream, we measure the performance of various data stream classiffiers and we calculate measurable data characteristics, called
meta-features. Next, we build a model that predicts which algorithms will work well on a given data stream based on its characteristics. We show that having knowledge about which classiffer to apply on what data could greatly increase the performance of predictive tools in real world applications.</p>
      </div>
    </div>
  </div>
</div>
</div>
<?php require('footer.php'); ?>
