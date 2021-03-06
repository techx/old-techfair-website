<script type="text/javascript">
	$.fn.preload = function() {
	    this.each(function(){
	        $('<img/>')[0].src = this;
	    });
	}

	$(['/img/exec/Josh.jpg','/img/exec/Julie.jpg','/img/exec/Richard.jpg','/img/exec/Annie.jpg','/img/exec/Ramya.jpg','/img/exec/EXEC-ALL_small.jpg','/img/exec/Virginia.jpg','/img/exec/Max.jpg','/img/exec/Devin.jpg','/img/exec/julie_OLD.jpg','/img/exec/david_OLD.jpg']).preload();
 </script>
 
<style type="text/css">

.exec-person {
  display: inline-block;
  position: relative;
}
.exec-person:hover .exec-name {
  opacity: 1;
}
.exec-person .exec-name {
  position: absolute;
  opacity: 0;
  left: 0;
  right: 0;
  bottom: -45px;
  padding: 5px;
  height: 40px;
  line-height: 20px;
  text-align: center;
  background: rgba(10,10,10,0.8);
  color: white;
  font-size: 12px;
  z-index: 200;
  -webkit-border-radius: 0px 0px 5px 5px;
  border-radius: 0px 0px 5px 5px;
  font-weight: 700;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
</style>
 
<h1>The Techfair Executive Team</h1>
<p>
  The executive team is elected every year by the <a href="/about/">Techfair committee members</a>. 
  <br>Team email: <a href="mailto:techfair-exec@mit.edu">techfair-exec@mit.edu</a>
  </p>
<h2>10 people, 1 awesome team.</h2> 
<div id='exec-photos'>
  <div class="group blank">
    <div class="exec-person">
      <div class="exec-name">Joshua Ma<br /> Managing Director</div>
      <img width="234" height="234" src="/img/exec/Josh.jpg" onmouseover="this.src='/img/exec/Josh_Silly.jpg'" onmouseout="this.src='/img/exec/Josh.jpg'" name="Josh" />
    </div>
    <div class="exec-person">
      <div class="exec-name">Julie Wang<br /> Associate Director</div>
      <img width="234" height="234" src="/img/exec/Julie.jpg" onmouseover="this.src='/img/exec/Julie_silly.jpg'" onmouseout="this.src='/img/exec/Julie.jpg'" name="Julie" />
    </div>
    <div class="exec-person">
      <div class="exec-name">Richard Ni<br /> Corporate Relations Director</div>
      <img width="234" height="234" src="/img/exec/Richard.jpg" onmouseover="this.src='/img/exec/Richard_Silly.jpg'" onmouseout="this.src='/img/exec/Richard.jpg'" name="Richard"/>
    </div>
    <div class="exec-person">
      <div class="exec-name">Annie Tang<br /> Marketing Director</div>
      <img width="234" height="234" src="/img/exec/Annie.jpg" onmouseover="this.src='/img/exec/Annie_Silly.jpg'" onmouseout="this.src='/img/exec/Annie.jpg'" name="Annie" />
    </div>
  </div>
  <br>

  <div class=" group blank">
    <div class="exec-person">
      <div class="exec-name">Ramya Swamy<br /> Student Relations Director</div>
      <img width="234" height="234" src="/img/exec/Ramya.jpg" onmouseover="this.src='/img/exec/Ramya_Silly.jpg'" onmouseout="this.src='/img/exec/Ramya.jpg'" name="Ramya"/>
    </div>
    <div class="exec-person">
      <img src="/img/exec/EXEC-ALL_small.jpg" name="Exec"/>
    </div>
    <div class="exec-person">
      <div class="exec-name">Virginia Chiu<br /> Logistics Director</div>
      <img width="234" height="234" src="/img/exec/Virginia.jpg" onmouseover="this.src='/img/exec/Virginia_Silly.jpg'" onmouseout="this.src='/img/exec/Virginia.jpg'" name="Virginia" />
    </div>
  </div>
  <br>

  <div class="group blank">
    <div class="exec-person">
      <div class="exec-name">Max Kolysh<br /> Dev Ops Director</div>
      <img width="234" height="234" src="/img/exec/Max.jpg" onmouseover="this.src='/img/exec/Max_Silly.jpg'" onmouseout="this.src='/img/exec/Max.jpg'" name="Max" />
    </div>
    <div class="exec-person">
      <div class="exec-name">Devin Zhang<br /> Finance Director</div>
      <img width="234" height="234" src="/img/exec/Devin.jpg" onmouseover="this.src='/img/exec/Devin_Silly.jpg'" onmouseout="this.src='/img/exec/Devin.jpg'" name="Devin" />
    </div>
    <div class="exec-person">
      <div class="exec-name">Anvisha Pai<br /> TechTalks Director</div>
      <img width="234" height="234" src="/img/exec/Anvisha.jpg" onmouseover="this.src='/img/exec/Anvisha_Silly.jpg'" onmouseout="this.src='/img/exec/Anvisha.jpg'" name="Anvisha" />
    </div>
    <div class="exec-person">
      <div class="exec-name">Emily Zhang<br /> Events Director</div>
      <img width="234" height="234" src="/img/exec/Emily.jpg" onmouseover="this.src='/img/exec/Emily_Silly.jpg'" onmouseout="this.src='/img/exec/Emily.jpg'" name="Emily"/>
    </div>
  </div>
</div>
<!-- Old 3x3 2011 Exec
<table padding=0 margin=15>
  <tr>
    <td><a href="#" id="tooltip0" title="David Luciano: Logistics Director, karate master"><img src="/img/exec/david.jpg" name="David"/></a>
    <td><a href="#" id="tooltip1" title="Jennifer Wang: Student Relations Director, nutella fanatic"><img src="/img/exec/jennifer.jpg" name="Jennifer"/></a>
    <td><a href="#" id="tooltip2" title="Jonathan Gootenberg: Corporate Relations Co-Director, unit overtaker"><img src="/img/exec/goot.jpg" name="Goot"/></a>
  </tr>
  <tr>
    <td><a href="#" id="tooltip3" title="Carolyn Zhang: Marketing Director, fashionista"><img src="/img/exec/carolyn.jpg" name="Carolyn" /></a>
    <td><a id="tooltip4" href="#" title="Susie Fu: Managing Director, mother hen"><img src="/img/exec/susie.jpg" name="Susie" /></a>
    <td><a id="tooltip5" href="#" title="Ravi Charan: Associate Director, math genius"><img src="/img/exec/ravi.jpg" name="Ravi" /></a>
  </tr>
  <tr>
    <td><a id="tooltip6" href="#" title="Joshua Ma: Corporate Relations Co-Director, superstarhacker"><img src="/img/exec/josh.jpg" name="Josh" /></a>
    <td><a id="tooltip7" href="#" title="Ranna Zhou: Internal Director, multitask extraordinare"><img src="/img/exec/ranna.jpg" name="Ranna" /></a>
    <td><a id="tooltip8" href="#" title="Sherry Wu: Finance Director, original apple fangirl"><img src="/img/exec/sherry.jpg" name="Sherry" /></a>
  </tr>
</table>
-->

<!--OLD EXEC

<h2>Emily Zhao</h2>
<img src="/img/exec/Emily0.jpg" name="Emily" onMouseOver="over(0)" onMouseOut="out(0)" />
<div class="team">
	<h3>Managing Director, Logistics Director</h3>
	<h4>Course 6+18</h4>
	<span>The alpha female of the pack, Emily Zhao's only documented weakness is being distracted by an enticing Facebook app. In her off hours, Emily enjoys managing her other 30,000 student groups.  She can warp time and space to her will.</span>
</div>
<div class="clear"></div>

<h2>Jeff Chen</h2>
<img src="/img/exec/Jeff0.jpg" name="Jeff" onMouseOver="over(1)" onMouseOut="out(1)" />
<div class="team">
	<h3>Associate Director, Corporate Relations Director, Human Relations Director</h3>
	<h4>Course 6+18</h4>
	<span>When not frantically dashing from Techfair meeting to Techfair meeting, Jeff enjoys taking Jiujitsu classes and skateboarding. Jeff likes to think he looks cool skateboarding to class in uniform, when in fact he just resembles a teenage ghost.</span>
</div>
<div class="clear"></div>

<h2>Kuan Cheng</h2>
<img src="/img/exec/Kuan0.jpg" name="Kuan" onMouseOver="over(2)" onMouseOut="out(2)" />
<div class="team">
	<h3>Corporate Relations Director</h3>
	<h4>Course 2</h4>
	<span>Kuan directs the Corporate Relations board with a mixture of motherly love and a Stalin-esque iron fist. Last summer, she interned at General Electric. No she did not meet Jack Donaghey. Her favorite hobby is talking.</span>
</div>
<div class="clear"></div>

<h2>Susie Fu</h2>
<img src="/img/exec/Susie0.jpg" name="Susie" onMouseOver="over(3)" onMouseOut="out(3)" />
<div class="team">
	<h3>Marketing Director, IT Director</h3>
	<h4>Course 6</h4>
	<span>A woman of many talents, Susie can instantly identify the pitch of a fire alarm, or cook a vegetarian meal worthy of a brontosaurus (She doesn't care that they don't exist). In her leisure time she runs a small startup, Susie's Veggie Diner. It is often on fire.</span>
</div>
<div class="clear"></div>

<h2>Cyril Lan</h2>
<img src="/img/exec/Cyril0.jpg" name="Cyril" onMouseOver="over(4)" onMouseOut="out(4)" />
<div class="team">
	<h3>Finance Director</h3>
	<h4>Course 6+15</h4>
	<span>Cyril, being the oldest in the group, naturally is in charge of the money, which he doles out in small envelopes labeled 'allowance'. Outside of Techfair, Cyril sings for the MIT acapella group Syncopasian. Fun fact: The name 'Syncopasian' comes from the fact that all of its members belong to the Navajo tribe.</span>
</div>
<div class="clear"></div>

<h2>Nick Dou</h2>
<img src="/img/exec/Nick0.jpg" name="Nick" onMouseOver="over(5)" onMouseOut="out(5)" />
<div class="team">
	<h3>THINK Director</h3>
	<h4>Course 2+6</h4>
	<span>Nick is the head honcho of the THINK operation, which is kind of like babysitting, if your kids are all geniuses. When not taking far more classes than humanly possible, Nick regularly upholds the astonishing feat of owning a fixed-gear bicycle without being smug about it.</span>
</div>
<div class="clear"></div>
-->
