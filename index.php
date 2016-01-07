<!doctype html>
<!-- making a change -->
<html class="no-js" lang="en">
  <?php include("incl/head.php"); ?>
  <body>
  	<div class="off-canvas-wrap">
  	  <div class="inner-wrap">  
        <?php include("incl/nav.php"); ?>
    	  <div class="fullPage">
      		<div class="section main-section one">
        		<div class="row">
        		  <div class="large-12 columns">
              	<div class="panel" id="orr">
        	        <h3>What's that logo? It's a hockey net. From above.</h3>
        	        <p>Who am I? A hockey player, experience designer, web developer, problem solver. What are your challenges?</p>
              	</div>
        		  </div>
        		</div>
        		<div class="row scroll">
        		  <div class="large-12 columns">
              	<div class="panel">
            		  <div id="well">
            		    <h3>Scroll or Swipe</h3>
            		  </div>
            		  <img src="images/arrow.png" alt="Down" />
              	</div>
        		  </div>      		
        		</div>
      		</div>
      		<div class="section main-section two">
            <div class="row arrow up">
              <div class="large-12 columns">
                <div class="panel">
                  <img src="images/arrow.png" alt="Up" />
                 </div>
              </div>
            </div>      		
            <div class="row">
              <div class="large-12 columns">
                <div class="panel" id="worked">
                  <h3><a href="ux.php">My Work/Portfolio</a></h3>
                  <p>See what I've done as an <a href="ux.php">experience designer</a>, <a href="dev.php">web developer</a> and <a href="producer.php">interactive producer</a>.</p>
                </div>
              </div>
            </div>
            <div class="row arrow down">
              <div class="large-12 columns">
                <div class="panel">
                <img src="images/arrow.png" alt="Down" />
                 </div>
              </div>
            </div>      		            
      		</div>
      		<div class="section main-section three">
            <div class="row arrow up">
              <div class="large-12 columns">
                <div class="panel">
                  <img src="images/arrow.png" alt="Up" />
                 </div>
              </div>
            </div>      		      		
            <div class="row">
              <div class="large-12 columns">
                <div class="panel" id="proof">    		
                  <h3><a href="tim-stevenson-resume.pdf">My Resume</a></h3>
        	        <p><a href="#" data-reveal-id="resumeModal" data-reveal>View</a> or <a href="tim-stevenson-resume.pdf">download</a> curriculum vitae</p>
        	      </div>
              </div>
            </div>
            <div class="row arrow down">
              <div class="large-12 columns">
                <div class="panel">
                  <img src="images/arrow.png" alt="Down" />
                 </div>
              </div>
            </div>      		
      		</div>
      		<div class="section main-section four">
            <div class="row arrow up">
              <div class="large-12 columns">
                <div class="panel">
                  <img src="images/arrow.png" alt="Up" />
                 </div>
              </div>
            </div>      		      		
            <div class="row">
              <div class="large-12 columns">
                <div class="panel" id="talk">    		    		
                  <h3>Got an opportunity?</h3>
        	        <p>Just want to chat? Don't be shy!</p>                
                  <ul>
                    <li><a href="tel:2077666419">(207)766-6419</a></li>
                    <li><a href="mailto:t.stevenson33@gmail.com">t.stevenson33@gmail.com</a></li>
                  </ul>
        	      </div>
        		  </div>
            </div>
      		</div>
    	  </div>   	
    		<a class="exit-off-canvas"></a>	    	
  	  </div><!--/inner-wrap-->
  	</div><!--/off-canvas-wrap-->
    <div id="resumeModal" class="reveal-modal" data-reveal>
        <img src="images/resume.png" alt="resume" />
      <a class="close-reveal-modal">&#215;</a>
    </div>

<!--
  	<ol class="joyride-list" data-joyride>
      <li data-id="orr" data-text="Next" data-options="tip_location: top">
          <p>Hello and welcome to the Joyride documentation page.</p>
        </li>
        <li data-id="worked" data-class="custom so-awesome" data-text="Next">
          <h4>Stop #1</h4>
          <p>You can control all the details for you tour stop. Any valid HTML will work inside of Joyride.</p>
        </li>
        <li data-id="proof" data-button="Next" data-options="tip_location:top;tip_animation:fade">
          <h4>Stop #2</h4>
          <p>Get the details right by styling Joyride with a custom stylesheet!</p>
        </li>
        <li data-button="talk">
          <h4>Stop #3</h4>
          <p>It works as a modal too!</p>
        </li>
  	</ol>
-->

    <?php include("incl/scripts.php"); ?>
    <script src="js/jquery.fullPage.js" type="text/javascript"></script>
  </body>
</html>
