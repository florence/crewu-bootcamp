<!-- this will eventually be a php file... -->
<head>
  <!-- jqery -->
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
  <!-- possibly googlefont -->
  <link href="../css/frontpage.css" type="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

  <!-- this is the box around all the stuff in the header / shiny stuff at the top that doesnt change.-->
  <div class="container" id="head" >
    <div class="row">
      <?php include "header.html" ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="well" id="content_box" style="margin-top:30px; margin-bottom:30px;">
        <p class="lead" style="display:inline-block;"> What is CrewU? </p>
        <button class="btn small" id="hide" style="display: inline-block;"> hide </button>
        <div id ="contents">
          <!-- 
          ideally this should be in another html file and just <?php include 'ed' ?>
          The tagging should be the same however
          -->
          <blockquote>
            <p>Crew as a whole works on projects for CCIS and provides a place for CCIS
            students to get hands on experience working with lots of different
            technologies. The problem with this is that many students who join Crew have
            no prior experience working with any of these technologies. This is not in of
            itself a problem, however we do need to provide an efficient way to get new
            Crew members up to speed so that they can begin to participate in crew!</p>
          </blockquote>
          <p>Most learning is done by <em>self teaching</em> as most members will not have the
          experience to teach the topic, though they may be able to answer specific
          questions. Crew U is here to provide two things. One is a "bootcamp" to
          get crew members up to speed on  the technologies that we use across all of our
          projects. The second is essentially a FAQ with technologies that we use either
          in our infrastructure, or on our projects with links to good resources about
          those technologies as well as some basic information about them and what they
          are used for.</p>

          <p>This will hopefully provide an easier transition for new members into crew as
          well as providing some structure for our <em>crewgile</em> development cycle.</p>
        </div>
        <script>
          // script for unhiding/hiding the contents
          // if you want to be a real a-hole, set a cookie so that we know if its hidden or not, and make the page load that way.
          // or re-design the page so it does not suck
        </script> 
      </div>
    </div>
  </div>


  <!-- contains the boxes we have on screen -->
  <div class="container">
    <div class="row" id="box_container" style="margin:auto;">
      <!-- box -->
      <div class="span3" id="box1">
        <a href="basic_linux_template.php?page=1"><h2>Basics of Linux</h2></a>
        <!-- ideally there should be a splash page here -->
        <small>This is where to go if you are looking for an introduction to a Linux user experiance.</small>
      </div>

      <!-- box -->
      <div class="span3" id="box2">
        <a><h2>Advanced Linux Use</h2></a>
        <small>This is where to go if you are interested in beinging to manage your own Linux machine.</small>
      </div>

      <!-- box -->
      <div class="span3" id="box3">
        <a><h2>Linux Managment</h2></a>
        <small>This is where to go if you are interested in setting up, maintaining, or otherwise breaking; servers</small>
        <!-- 3 boxes (4?) for our "topics" go here -->
      </div>
    </div>
  </div>


  <!-- our footer -->
  <div class="container" id="foot">
      <!-- footer included by php -->
      <?php include "footer.html"?>
  </div>
</body>