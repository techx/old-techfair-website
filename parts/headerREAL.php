<?php
function make_header($sectionName,$subSectionName,$routes)
{
?>
    <div id="header">
        <div id="header-content">
            <div id="header-inner">
                <h1>
                    <a href="/"><span>MIT Techfair</span></a>
                    <div>
<?php/*
                        <h2>"Reg Day" Monday, January 31, 2011</h2><h2>10:00am - 3:30pm at Rockwell Cage</h2>
*/?>
						<h2>Time and Date</h2><h2>To be announced!</h2>
                    </div>
                </h1>
            <!--
                <div id="countdown">
                <div id="countdown-day" class="cd"><span id="cd-day">Lo</span><span class="cd-sub">days</span></div>
                <div id="countdown-hr" class="cd"><span id="cd-hr">ad</span><span class="cd-sub">hours</span></div>
                <div id="countdown-min" class="cd"><span id="cd-min">in</span><span class="cd-sub">mins</span></div>
                <div id="countdown-sec" class="cd"><span id="cd-sec">g</span><span class="cd-sub">secs</span></div>
                <div style="clear:both"></div>
                </div>
			-->
                <script>
                var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

                function countdown(yr,m,d){
                	theyear=yr;themonth=m;theday=d;
                	var today=new Date();
                	var todayy=today.getYear();
                	if (todayy < 1000)
                		todayy+=1900;
                	var todaym=today.getMonth();
                	var todayd=today.getDate();
                	var todayh=today.getHours();
                	var todaymin=today.getMinutes();
                	var todaysec=today.getSeconds();
                	var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
                	futurestring=montharray[m-1]+" "+d+", "+yr;
                	dd=Date.parse(futurestring)-Date.parse(todaystring);
                	dday=Math.floor(dd/(60*60*1000*24)*1);
                	dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
                	dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
                	dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
                	if(dday==0&&dhour==0&&dmin==0&&dsec==1){
                		document.getElementById('countdown').innerHTML='It\'s today! Check us out at Rockwell Cage!';
                		document.getElementById('countdown').style='background-color:#222;border-bottom:10px solid #aaa;';
                		return;
                	}
                	else{
                		document.getElementById('cd-day').innerHTML=dday;
                		document.getElementById('cd-hr').innerHTML=dhour;
                		document.getElementById('cd-min').innerHTML=dmin;
                		document.getElementById('cd-sec').innerHTML=dsec;
                		setTimeout("countdown(theyear,themonth,theday)",1000);
                	}
                }

                countdown(2011,1,31);
                </script>
            </div>
			
		</div>
	</div>
	<div id="nav" class="clearfix">
		<div id="navleft" class="navEl">
			<div id="navleft1"></div>
			<div id="navleft2"></div>
			<div id="navleft3"></div>
		</div>
		<div id="navbar" class="navEl" style="background-image:url(/img/banners/<?php echo rand(1,8)?>.png);">
			<ul>
			<?php
			$k = 0;
			foreach($routes as $key=>$section):?>
				<?php
				if($key!='home' && !isset($section['show'])):
					$printkey = $key.'/';
				?>
					<?php ($sectionName==$key) ? $class=' current' : $class='';?>
					<?php ($key=='think') ? $think=' think' : $think='';?>
					<li class="main<?php echo $class?><?php echo $think?>" id="s<?php echo $k?>">
						<?php if(!isset($section['external'])):?>
							<a href="/<?php echo $printkey?>"><?php echo $section['name']?></a>
						<?php else:?>
							<a href="<?php echo $section['external']?>"><span><?php echo $section['name']?></span></a>
						<?php endif;?>
						<?php if(isset($section[''])): //only folders have a key named '' for the main page?>
							<?php ($sectionName == $key) ? $class = 'shown' : $class = 'hidden'; ?>
							<ul class="<?php echo $class?>">
								<li><a href="/<?php echo $printkey?>"><?php echo $section['name']?></a></li>
								<?php foreach($section as $subkey=>$page): ?>
									<?php if(is_array($page) && $subkey != ''):?>
										<?php if(isset($page['content'])):?>
											<?php ($sectionName==$key && $subSectionName==$subkey) ? $class=' class="current"' : $class='';?>
											<li<?php echo $class?>><a href="/<?php echo $key?>/<?php echo $subkey ?>/"><?php echo $page['name']?></a></li>
										<?php else:?>
											<li><a href="<?php echo $page['external']?>"><?php echo $page['name']?></a></li>
										<?php endif;?>
									<?php endif;?>
								<?php endforeach;?>
							</ul>
						<?php endif;?>
					</li>
				<?php
				$k++;
				endif;?>
			<?php endforeach;?>
			</ul>
		</div>
	</div>
<?php
}
?>