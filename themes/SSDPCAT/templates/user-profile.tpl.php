<link rel="stylesheet" type="text/css" href="https://cat.ssdp.org/themes/SSDPCAT/css/cat.css">

<div style="border-bottom:1px solid #000; width:100%; margin-bottom:30px;"></div>
<!-- Vertical, rounded -->

<div id="buckets" style="width:500px;">
<div class="container vertical rounded">

  <div class="progress-bar" style = "color:#000 !important">
 
    <div class="progress-track">
      <div style="position: absolute; bottom: 0; background: #FAA732; width: 120px; display: block; height:
<?php
$cat1 = views_get_view('point_count_per_category_cb_');
$cb_count = str_replace('Total SUM', '', $cat1->preview('default'));
$cb_count_trimmed = preg_replace('/\s+/','',$cb_count);
$cb_count_trimmed2 = str_replace('<divclass="view-content">Total SUM ', '', $cb_count_trimmed);
$cb_count_trimmed3 = str_replace('</div>', '', $cb_count_trimmed2);
$cb_count_trimmed4 = preg_replace("/<\/?div[^>]*\>/i", "", $cb_count_trimmed3); 
$cb_count_trimmed5 = str_replace('<ulclass="contextual-links"><liclass="views-ui-editfirstlast"><ahref="/admin/structure/views/view/point_count_per_category_cb_/edit/default?destination=user/54">Editview</a></li></ul>', '', $cb_count_trimmed4); 
$cb_percent = round(($cb_count_trimmed5 / 75)	* 100);									
if ($cb_count_trimmed5 > 75) {
	echo ('100');
} else if ($cb_count_trimmed5 < 1) {
echo ('0'); } else 
{ echo $cb_percent; }
			  ?>%"> </div>
               
     
       <p class="progress_label">Chapter Building</p>
       <p class="point_decl"><?php if ($cb_count_trimmed5 < 1) {
	echo ('0');
} else { echo $cb_count_trimmed5; }?> points</p>
    
     
 </div>
	</div>

  <div class="progress-bar" style = "color:#000 !important">
  
    <div class="progress-track">
          <div style="position: absolute; bottom: 0; background: #FAA732; width: 120px; display: block; height:<?php
$cat2 = views_get_view('point_count_per_category_pc_');

$pc_count = str_replace('Total SUM', '', $cat2->preview('default'));

$pc_count_t = preg_replace('/\s+/','',$pc_count);


$pc_count_t2 = str_replace('<divclass="view-content">Total SUM ', '', $pc_count_t);

$pc_count_t3 = str_replace('</div>', '', $pc_count_t2);


$pc_count_t4 = preg_replace("/<\/?div[^>]*\>/i", "", $pc_count_t3); 

$pc_count_t5 = str_replace('<ulclass="contextual-links"><liclass="views-ui-editfirstlast"><ahref="/admin/structure/views/view/point_count_per_category_pc_/edit/default?destination=user/54">Editview</a></li></ul>', '', $pc_count_t4); 
$pc_percent = round(($pc_count_t5 / 75)*100);		
											
if ($pc_count_t5 > 75) {
	echo ('100%'); } else
if ($pc_count_t5 < 1) {
	echo ('0%');
	} else { echo $pc_percent; echo ('%'); }
?>"></div>
       
      <p class="progress_label">Policy Change</p>
      <p class="point_decl"><?php if ($pc_count_t5 < 1) {
	echo ('0');
} else { echo $pc_count_t5; }?> points</p>
    </div> </div>
    

  <div class="progress-bar" style = "color:#000 !important">
  
    <div class="progress-track">
<div style="position: absolute; bottom: 0; background: #FAA732; width: 120px; display: block; height:<?php
$cat3 = views_get_view('point_count_per_category_te_');

$te_count = str_replace('Total SUM', '', $cat3->preview('default'));

$te_count2 = preg_replace('/\s+/','',$te_count);


$te_count3 = str_replace('<divclass="view-content">Total SUM ', '', $te_count2);

$te_count4 = str_replace('</div>', '', $te_count3);


$te_count5 = preg_replace("/<\/?div[^>]*\>/i", "", $te_count4); 

$te_count6 = str_replace('<ulclass="contextual-links"><liclass="views-ui-editfirstlast"><ahref="/admin/structure/views/view/point_count_per_category_te_/edit/default?destination=user/4">Editview</a></li></ul>', '', $te_count5); 
$te_percent = round(($te_count6/50)*100);
if ($te_count6 > 50) {
	echo ('100%'); } else
if ($te_count6 < 1) {
	echo ('0%');
	} else { echo $te_percent; echo ('%'); }
?>">
        </div>
      <p class="progress_label">Training and Education</p>
<p class="point_decl"><?php if ($te_count6 < 1) {
	echo ('0');
} else { echo $te_count6; }?> points</p>
    </div>
    
  </div>




</div></div>



<?php $total_points = $cb_count_trimmed5 + $pc_count_t5 + $te_count6;?>




<div id="point_count" class="rounded" style = "height:300px;">
<div class="points_earned"><?php echo $total_points;?></div>



<p style="margin-top:-23px;">spent: <?php
$spent_points = views_get_view('point_count_per_category_spending_');

$spent_clean = preg_replace("/<\/?div[^>]*\>/i", "", $spent_points->preview('default'));

if ($spent_clean != 0){
echo $spent_clean;
} else {  echo ('0');
}

?></p>

<?php 
$balance = $total_points - $spent_clean; ?>
<p style="padding-bottom:10px;"><strong>Current balance: <?php echo $balance;?></strong></p>


<?php if ($total_points >499) { ?>
<img class="shark" src="http://ssdp.actioncat.xyz/themes/bartik/images/shark.png" width="120px"/>
<?php } else { ?>
<img class="shark" style="opacity:0;" src="http://ssdp.actioncat.xyz/themes/bartik/images/shark.png" width="120px"/>
<?php } ?>


<p class="userstats" style = "margin-top:100px !important;">Total points</p>

</div>

	</div>

<h2>Badges</h2>
<p>As you earn points for your chapter, you'll unlock achievement badges which will show up here. There are 8 possible badges.</p>

<?php // if no badges exist, say so //?>

<?php // get LTE badge //
$lte = views_get_view('lte_badge_chapter_');
$lte2 = str_replace('Total SUM', '', $lte->preview('default'));
$lte3 = preg_replace("/<\/?div[^>]*\>/i", "", $lte2);
$lte4 = preg_replace('/\s+/','',$lte3);
?>

<?php // get Fundraiser badge //
$money = views_get_view('fundraiser_badge_chapter_');
$money2 = str_replace('Total SUM', '', $money->preview('default'));
$money3 = preg_replace("/<\/?div[^>]*\>/i", "", $money2);
$money4 = preg_replace('/\s+/','',$money3);
?>

<?php // get DARE badge //
$dare = views_get_view('dare_badge_chapter_');
$dare2 = str_replace('Total SUM', '', $dare->preview('default'));
$dare3 = preg_replace("/<\/?div[^>]*\>/i", "", $dare2);
$dare4 = preg_replace('/\s+/','',$dare3);
?>





<div class="remodal-bg">
  <a href="#chapterleader"><img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/globe.png" width="75px" title="" /></a>
  
<?php if ($cb_count_trimmed5 > 74) { ?>  
  <a href="#chapterbuilder"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/rocket.png" width="75px" title="" /></a>
<? } ?>

<?php if ($pc_count_t5 > 74) { ?>  
  <a href="#lobby"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/megaphone.png" width="75px" title="" /></a>
<? } ?>

<?php if ($te_count6 > 49) { ?>  
  <a href="#educator"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/bookshelf.png" width="75px" title="" /></a>
<? } ?>

<?php if ($money4 > 49) { ?>  
  <a href="#fundraiser"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/money.png" width="75px" title="" /></a>
<? } ?>


<?php if ($lte4 > 19) { ?>  
  <a href="#lte"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/news.png" width="75px" title="" /></a>
<? } ?>

<?php if ($dare4 > 29) { ?>  
  <a href="#dare"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/rainbow.png" width="75px" title="" /></a>
<? } ?>

<?php // get yarn badge //
 if ($total_points > 999) { ?>  
  <a href="#yarncat"><img  src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/yarncat.png" width="75px" title="" /></a>
<? } ?>


  
  
<!--
<div class="remodal" data-remodal-id="chapterleader" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2 id="modal1Title">Chapter Leader</h2>
    <p class="modal_deets">Earned by starting an SSDP chapter</p>
    <p id="modal1Desc">
    <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/globe.png" width="150px" title="" />
    <p>Today, your campus. Tomorrow, the world.</p>
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Chapter Leader badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </p>
  </div>
</div>


<div class="remodal" data-remodal-id="chapterbuilder" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>Chapter Builder</h2>
    <p class="modal_deets">Earned 75 Chapter Building points</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/rocket.png" width="150" title="" />
    <p>You've built yourself a hell of a chapter, rockstar. Keep that rocket moving!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Chapter Builder badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="lobby" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>Policy Maker</h2>
    <p class="modal_deets">Earned 75 Policy Change points</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/megaphone.png" width="150" title="" />
    <p>Way to spread the word and work the system! You're basically lobbyists now!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Chapter Builder badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="educator" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>Educator</h2>
    <p class="modal_deets">Earned 50 Training and Education points</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/bookshelf.png" width="150" title="" />
    <p>You're using your network to educate your campus and community. Keep up the great work!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Educator badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="fundraiser" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>Fundraiser</h2>
    <p class="modal_deets">Earned 50 fundriasing points (raised $500)</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/money.png" width="150" title="" />
    <p>Damn your chapter is rolling in it. You're champion fundraisers now!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Fundraiser badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="lte" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>Letter Writer</h2>
    <p class="modal_deets">Submitted two Letters to the Editor</p>
    <p id="modal1Desc">
     <img src="http://cat.actioncat.xyz/themes/bartik/images/badges/news.png" width="150" title="" />
    <p>You're informing the masses with your letters! Keep it up!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the LTE badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="dare" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>DARE Superstar</h2>
    <p class="modal_deets">Completed three SSDP DARE's</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/rainbow.png" width="150" title="" />
    <p>Great work so far making SSDP a more inclusive organization!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the DARE badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>


<div class="remodal" data-remodal-id="yarncat" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
   
  <div>
    <h2>CAT star</h2>
    <p class="modal_deets">Earned 1,000 points</p>
    <p id="modal1Desc">
     <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/yarncat.png" width="150" title="" />
    <p>Wowza! You've earned 1,000 points! Make sure to show the other chapters your new cat so they get super jealous!</p>
    
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the 1,000 points (and a cute cat)!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
</div>-->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="http://ssdp.actioncat.xyz/themes/bartik/modal/libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="http://ssdp.actioncat.xyz/themes/bartik/modal/src/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });

//  Usage:
//  $(function() {
//
//    // In this case the initialization function returns the already created instance
//    var inst = $('[data-remodal-id=modal]').remodal();
//
//    inst.open();
//    inst.close();
//    inst.getState();
//    inst.destroy();
//  });

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>





<script type="text/javascript">
$('.vertical .progress-fill span.percent').each(function(){
  var percent = $(this).html();
  var pTop = 100 - ( percent.slice(0, percent.length - 1) ) + "%";
  $(this).parent().css({
    'height' : percent,
    'top' : pTop
  });
});
</script>



