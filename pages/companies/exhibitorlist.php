<?php 
function natksort($array) 
{ 
    $original_keys_arr = array(); 
    $original_values_arr = array(); 
    $clean_keys_arr = array(); 

    $i = 0; 
    foreach ($array AS $key => $value) 
    { 
        $original_keys_arr[$i] = $key; 
        $original_values_arr[$i] = $value; 
        $clean_keys_arr[$i] = strtr($key, "ÄÖÜäöüÉÈÀËëéèàç", "AOUaouEEAEeeeac"); 
        $i++; 
    } 

    natcasesort($clean_keys_arr); 

    $result_arr = array(); 

    foreach ($clean_keys_arr AS $key => $value) 
    { 
        $original_key = $original_keys_arr[$key]; 
        $original_value = $original_values_arr[$key]; 
        $result_arr[$original_key] = $original_value; 
    } 

    return $result_arr; 
} 
?>

<?php
function populateSponsorTable($sponsorList){

	natksort($sponsorList);
	for($i=0; $i<sizeof($sponsorList)%3; $i++){
		array_push($sponsorList, 'null');
	}

	$count = 1;
	if($count%3==0){
		echo "<tr>";
	}
	foreach($sponsorList as $key => $value){
		if($value != 'null'){
			echo "<td><a href=".$value.">".$key."</a></td>";
		}else{
			echo "<td></td>";
		}
		if($count%3==0){
			echo "</tr>";
			echo "<tr>";
		}
		$count++;
	}
	if(($count-1)%3!=0){
		echo "</tr>";
	}
}

?>

<div class="column-top">
	<h1>2012 List of Exhibitors</h1>
	<p>With over 50 companies and 30 student exhibitors, this year's Techfair is the biggest yet!</p>
	<p>See the full schedule <a href="/events/">here</a>.</p>
</div>
<div class="column-left">
	<h2>Platinum Sponsor</h2>
	<div class="sponsor-logos">
	    <a href="http://www.facebook.com/"><img title="Facebook" alt="Facebook" src="/img/logos/facebook_larger.png" /></a>
	    <p><a href="/events/hackathon/">Hackathon Sponsor</a></p>
	</div>
	<h2>Gold Sponsors</h2>
	<div class="sponsor-logos full-width">
		<div class="column-left-half">
	   	 	<a href="http://www.dropbox.com/"><img title="Dropbox" alt="Dropbox" src="/img/logos/0Dropbox.png" /></a><br />
		    <a href="http://www.microsoft.com/"><img title="Microsoft" alt="Microsoft" src="/img/logos/0Microsoft.png" /></a> <a style="display:block; margin-top:-15px; font-size: 11px; text-decoration: none;" href="/events/afterparty">Afterparty Sponsor</a>
	    	 <a href="http://www.oracle.com/"><img title="Oracle" alt="Oracle" src="/img/logos/0Oracle.png" /></a><br />
		</div>
		<div class="column-right-half">
	 	    <a href="http://www.palantir.com/"><img title="Palantir" alt="Palantir" src="/img/logos/0Palantir.png" /></a><br />
		     <a href="http://www.slb.com/"><img title="Schlumberger" alt="Schlumberger" src="/img/logos/0Schlumberger.png" /></a><br />
		     <a href="http://www.sequoiacap.com/"><img title="Sequoia" alt="Sequoia" src="/img/logos/0Sequoia.png" /></a><br />
		</div>
		<div class="column-bottom"></div>
	</div>
	<h2>Silver Sponsors</h2>
	<table class="sponsor-table">
		<?php
			//Add Silver sponsors & their websites to this list. They DON'T have to be in alphabetical order; the function will sort them.
			$silver = array(
				'10gen (mongoDB)'					=> 'http://www.10gen.com/',
				'Adobe' 							=> 'http://www.adobe.com/',
				'Bazaar Voice' 						=> 'http://www.bazaarvoice.com/',
				'Corning' 							=> 'http://www.corning.com/',
				'Solidworks' 						=> 'http://www.solidworks.com/',
				'General Electric' 					=> 'http://ge.com/',
				'GrubHub' 							=> 'http://www.grubhub.com/',
				'MathWorks' 						=> 'http://www.mathworks.com/',
				'Merck' 							=> 'http://www.merck.com/',
				'Mozilla'							=> 'http://mozilla.com/',
				'Oblong' 							=> 'http://oblong.com/',
				'Sony (SCEA)' 						=> 'http://us.playstation.com/',
				'Thomson Reuters' 					=> 'http://thomsonreuters.com/',
				'Twitter' 							=> 'http://twitter.com/' 
			);
			
			populateSponsorTable($silver);
			
		?>
	</table>
	<h2>Bronze Sponsors</h2>
	<table class="sponsor-table">
		<?php
			//Add Bronze sponsors & their websites to this list. They DON'T have to be in alphabetical order; the function will sort them.
			$bronze = array(
				'3LM' 								=> 'http://www.3lm.com/',
				'Addepar' 								=> 'http://www.addepar.com/',
				'AisleBuyer' 						=> 'http://www.aislebuyer.com/',
				'Akamai'							=> 'http://www.akamai.com/',
				'Akiban Technologies' 				=> 'http://www.akiban.com/',
				'AT&T' 								=> 'http://www.att.com/',
				'Autodesk' 							=> 'http://usa.autodesk.com/',
				'Bose' 								=> 'http://www.bose.com/',
				'CEO in a Box' 						=> 'http://www.beerdropper.com/',
				'Citrix Online' 					=> 'http://www.citrix.com/',
				'Crittercism' 						=> 'http://www.crittercism.com/',
				'Cypress Semiconductors' 						=> 'http://www.cypress.com/',
				'eBay' 								=> 'http://www.ebay.com/',
				'Fitbit' 								=> 'http://www.fitbit.com/',
				'Fusion-io' 						=> 'http://www.fusionio.com/',
				'Google' 							=> 'http://www.google.com/',
				'Kiva Systems'						=> 'http://www.kivasystems.com/',
				'Knome'								=> 'http://www.knome.com/',
				'Lincoln Lab' 						=> 'http://www.ll.mit.edu/',
				'Lockheed Martin' 						=> 'http://www.lockheedmartin.com',
				'Sandia National Labs' 						=> 'http://www.sandia.gov',
				'Maxim Integrated Products' 		=> 'http://www.maxim-ic.com/',
				'MDS Lavastorm Analytics' 			=> 'http://www.martindawessystems.com/',
				'Motion Math' 			=> 'http://www.motionmathgames.com/',
				'Medtronic' 						=> 'http://www.medtronic.com/',
				'Philips' 							=> 'http://www.usa.philips.com/',
				'Quixey' 							=> 'http://www.quixey.com/',
				'Smule' 							=> 'http://www.smule.com/',
				'Square' 							=> 'http://www.squareup.com/',
				'Synaptics' 						=> 'http://www.synaptics.com/',
				'TI' 								=> 'http://www.ti.com/',
				'Under Armour' 						=> 'http://www.underarmour.com/',
				'VMWare' 							=> 'http://www.vmware.com/',
				'Zanbato' 							=> 'http://www.zanbatogroup.com/'
			);
			
			populateSponsorTable($bronze);
		?>
  </table>
</div>
<div class="column-right">
  <h2>MIT Labs</h2>
  <ul>
    <li>Hatsopoulos Microfluids Labratory</li>
      <div class="mit-description">
        <p class="mit-name">Katy Gero '13</p>
        A worm-like robot that uses differential air pressures for movement<br>
      </div>
    <li>Swÿp - MIT Media Lab</li>
      <div class="mit-description">
        <p class="mit-name">Alexander List '15, Natan Linder (Media Lab Fluid Interfaces Group), Ethan Sherbondy '14 </p>
        Transfer any file from any app to any app on any device with a Swÿp <br>
        <a href="http://swyp.us">http://swyp.us</a>
         </div>
    <li>Understanding Natural Language Commands Given to Robots - MIT CSAIL</li>
      <div class="mit-description">
        <p class="mit-name">Stefanie Tellex, Ph.D, Thomas Kollar, Ph.D, Prof. Seth Teller, Prof. Nicholas Roy </p> 
        Enabling a person to give a robot command as if they were talking to another person. <br>
        <a href="http://projects.csail.mit.edu/spatial/Main_Page">Project site</div>
  </ul>
  <h2>MIT Student Groups</h2>
  <ul>
    <li>Icarus Labs </li>
      <div class="mit-description">
        <p class="mit-name">Anna Fung '11, Damon Henry '10, Adam Mohamed '10, Eric Timmons '10, Jason Wallace '10, Max Brand '11, Anjaney Kottapalli '11, Justine Li '10, Kim Jackson '10, Jeff Simpson, Karen Sun '10</p> 
        NEED DESCRIPTION
        <br><a href="http://www.icaruslabs.org/	">http://www.icaruslabs.org</a></div>
    <li><a href="http://miters.mit.edu/">MITERS</a></li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
    <li>MIT Hobby Shop</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
    <li>MIT Rocket Team</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
    <li><a href="http://solar-cars.scripts.mit.edu/">MIT Solar Electric Vehicle Team</a></li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
  </ul>
	<h2>MIT Individual Projects</h2>
	<ul>
		<li>Angry Birdbot (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>DDR Tetris (Techfair Funding Recipient)	</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>DIY Vending Machine (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Electric Instruments	(Project Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
  	<li>Hydrophotonophone (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Musical Fabrics	</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Science Launch! (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Servo Subwoofer (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Stark Industries</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Takachar - (Project Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
		<li>Wimshurst Machine (Techfair Funding Recipient)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	</ul>
	<h2>MIT Startups</h2>
	<ul>
	  <li>Bustle (Part of Startlabs C2C)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>ForgePond</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>HelmetHub (2.009)    </li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>Metrify (Part of Startlabs C2C)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>Ministry of Supply, Inc.</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>MUSE Analytical (Part of Startlabs C2C)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>Phil (Part of Startlabs C2C, 2.009)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>Supermechanical </li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	  <li>The Thingdom (Part of Startlabs C2C)</li>
      <div class="mit-description">
        <p class="mit-name"> </p> </div>
	</ul>
</div>
<div class="column-bottom"></div>
