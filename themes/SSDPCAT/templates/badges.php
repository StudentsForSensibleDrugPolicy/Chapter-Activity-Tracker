<?php if ($cb_count_trimmed5 > 74){?>

<img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/news.png" width="75px" title="" />
<?php } ?>

<img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/megaphone.png" width="75px" title="" />

<img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/volume.png" width="75px" title="" />

<img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/bookshelf.png" width="75px" title="" />


<p>+ yarn at 1,000 points</p>


<?php
if ($cb_count_trimmed5 > 74) { ?>
	<a><img id="myBtn2" src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/megaphone.png" width="75px" title="" /></a>

<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="text-align:center;">
    
    <h2>Chapter Builder</h2>
    <img src="http://ssdp.actioncat.xyz/themes/bartik/images/badges/megaphone.png" width="75px" title="" />
    <p>Way to spread the word, rockstar! You've built yourself a chapter!</p>
    <p><a id="tweet-educator" href="https://twitter.com/share" class="twitter-share-button" data-text="<?php print drupal_get_title(); ?> @SSDP earned the Chapter Builder badge!" data-via="ssdpcat">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<span class="close">x</span>
  </div>
  
  
</div>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal2');

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php }?>

