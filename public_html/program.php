<?php require('header.php'); ?>

<div class="submenu">
  <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#scientific" role="tab" data-toggle="tab">Scientific Program</a></li>
    <li><a href="#hackathon" role="tab" data-toggle="tab">Hackathon</a></li>
  </ul>
</div>

<div class="tab-content">
  <div class="tab-pane active" id="scientific">
    <h2>Monday, October 20th 2014</h2>
    <p>The scientific program will be held in the Traverse Building, van Trierzaal. Please see the <a href="directions.php">directions page</a> how to get there. </p>
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
          <div class="col-md-3"><p class="keynote">Prof. Dr. Ross King (keynote)</p></div>
          <div class="col-md-7"><p class="keynote"><a data-toggle="modal" data-target="#king">Meta-Learning on QSAR data</a></p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">14:00 - 14:45</div>
          <div class="col-md-3">Dr. Joaquin Vanschoren</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#vanschoren">OpenML: Networked science in machine learning</a></p></div>
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
          <div class="col-md-3">Prof. Dr. Luis Torgo</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#torgo">Estimating the Performance of Predictive Models in R</a></p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
      <div class="row">
          <div class="col-md-2">15:40 - 16:20</div>
          <div class="col-md-3">Dr. Bernd Bischl</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#bischl">MLR and OpenML</a></p></div>
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
          <div class="col-md-3">Jan van Rijn</div>
          <div class="col-md-7"><p><a data-toggle="modal" data-target="#rijn">Meta Learning on Data Streams: A case study</a></p></div>
      </div>
      <div class="row">
        <div class="col-md-12"><hr/></div>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="hackathon">
    <div class="small-pagefill"><img src="images/metaforum2.jpg" /></div>
    <div>
      <h2>Tuesday - Friday</h2>
      <p>OpenML is all about <a target="_blank" href="http://dl.acm.org/citation.cfm?id=2641198">Networked Machine Learning</a>, it offers researchers a new way of organizing results and building upon each others work. The workshop is organized in a hackathon fashion, meaning that participants are encouraged to bring their laptops, and work together on various aspects that they need for their research. With the complete OpenML team available in Eindhoven, features that require server side programming can be created on the fly. As OpenML is an open source project, everyone who is interested is welcome to join.</p>
    
      <p>Some projects that will be addressed during the Hackathon are: Various R packages, the OpenML Java Connector, Meta-QSAR extensions and the RapidMiner plugin. </p>
      <p>The hackathon will be held in the MetaForum Building. Please see the <a href="directions.php">directions page</a> how to get there. </p>
    </div>
  </div>
</div>


<div id="king" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Meta-Learning on QSAR data</h4>
        <p class="speaker">Prof. Dr. Ross King</p>
      </div>
      <div class="modal-body">
        <p>To be announced. Prof. Dr. Ross D. King is a Professor of Machine Intelligence in the School of Computer Science at the University of Manchester working at the Manchester Institute of Biotechnology and Machine Learning and Optimisation (MLO) group. One of his most notable lines of work is the Robot Scientist, a robot automatically doing experiments. Today he will talk on Machine Learning in drug discovery. </p>
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
        <p class="speaker">Prof. Dr. Luis Torgo</p>
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
        <h4 class="modal-title">MLR and OpenML</h4>
        <p class="speaker">Dr. Bernd Bischl</p>
      </div>
      <div class="modal-body">
        <p class="abstract">To be announced. Some topics that will be covered: How does mlr work, how does the openml R package work? Where do we stand, what is the
plan for the next steps and how can these be combined. Finally, what is survival analysis, why do we want to have that in OpenML.</p>
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
        <p class="speaker">Dr. Joaquin Vanschoren</p>
      </div>
      <div class="modal-body">
        <p class="abstract">Today, the ubiquity of the internet is allowing new, more scalable forms of scientific collaboration. Such 'networked science' uses online tools to share and organize data on a global scale so that scientists are able to build directly on each other's data and techniques, reuse them in unforeseen ways, map and mine all data to search for patterns, and scale up collaborations to tackle much harder problems.</p>

          <p>We introduce OpenML.org, a place where machine learning researchers can easily share data, tools and experiments to do better studies in less time. It helps machine learning researchers win time by making it easy to reuse prior work, and by automating experimentation as much as possible. Moreover, it helps researchers gain more credit for their work by making it more visible and easily reusable in other studies. </p>

          <p>OpenML links to data available anywhere online and is integrated in popular data mining platforms such as Weka, R, MOA and RapidMiner. This means that anyone can easily import data into these tools, pick any algorithm or workflow to run, and automatically share all obtained results online. It also offers APIs for easy integration in other tools.</p>

          <p>Finally, OpenML helps scientists and students to explore different machine learning techniques and find out which are most useful in their work, and it facilitates multidisciplinary collaborations in which scientists actively work with the community to analyze scientific data online. </p>
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
<?php require('footer.php'); ?>
