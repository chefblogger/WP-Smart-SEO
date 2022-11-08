<div id="seomae-header">
<table class="tabelle">
    <tr>
        <td><h3>Google</h3></td>
    </tr>
    <tr>
        <td><label for="seomae_google_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label><div class="counter" id="counter_g1">0 available</div></td>
    </tr>
    <tr>
        <td><input id="seomae_google_title" onkeyup="javascript:zaehlen_g1()" class="inputfieldclass" type="text" name="seomae_google_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) ); ?>"></td>
    </tr>
    <tr>
        <td><label for="seomae_google_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label><div class="counter"  id="counter_g2">0 available</div></td>
    </tr>
    <tr>
        <td><input id="seomae_google_description" onkeyup="javascript:zaehlen_g2()" class="inputfieldclass" type="text" name="seomae_google_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_description', true ) ); ?>"></td>
    </tr>

</table>

<table class="tabelle">
    <tr>
        <td><h3>Facebook</h3></td>
    </tr>
    <tr>
    <td><label for="seomae_facebook_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label><div class="counter" id="counter_f1">0 available</div></td>
    </tr>
    <tr>
    <td><input id="seomae_facebook_title"  onkeyup="javascript:zaehlen_f1()" class="inputfieldclass" type="text" name="seomae_facebook_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_title', true ) ); ?>"></td>
    </tr>
    <tr>
    <td><label for="seomae_facebook_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label><div class="counter" id="counter_f2">0 available</div></td>
    </tr>
    <tr>
    <td><input id="seomae_facebook_description"  onkeyup="javascript:zaehlen_f2()" class="inputfieldclass" type="text" name="seomae_facebook_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_description', true ) ); ?>"></td>
    </tr>
    <tr>
    <td><label for="seomae_facebook_image" class="seo_metabox_labeltitel"><?php _e( 'Facebook Image URL', 'wp-smart-seo' ); ?></label></td>
    </tr>
    <tr>
    <td> <input id="seomae_facebook_image" class="inputfieldclass" type="text" name="seomae_facebook_image" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_image', true ) ); ?>"></td>
    </tr>

</table>

<table class="tabelle">
    <tr>
        <td><h3>Twitter</h3></td>
    </tr>
    <tr>
    <td><label for="seomae_twitter_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label><div class="counter" id="counter_t1">0 available</div></td>
    </tr>
    <tr>
    <td><input id="seomae_twitter_title" onkeyup="javascript:zaehlen_t1()" type="text" class="inputfieldclass" name="seomae_twitter_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_title', true ) ); ?>"></td>
    </tr>
    <tr>
    <td><label for="seomae_twitter_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label><div class="counter" id="counter_t2">0 available</div></td>
    </tr>
    <tr>
    <td><input id="seomae_twitter_description" onkeyup="javascript:zaehlen_t2()" type="text" class="inputfieldclass" name="seomae_twitter_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_description', true ) ); ?>"></td>
    </tr>
    <tr>
    <td><label for="seomae_twitter_image" class="seo_metabox_labeltitel"><?php _e( 'Twitter Image URL', 'wp-smart-seo' ); ?></label></td>
    </tr>
    <tr>
    <td><input id="seomae_twitter_image" type="text" class="inputfieldclass" name="seomae_twitter_image" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_image', true ) ); ?>"></td>
    </tr>

</table>


<?php 
/*
	
<h3 class="seo_metabox_googletwitterfacebook">Google</h3>
<div class="seomae_box">

    <p class="meta-options seomae_field">
        <label for="seomae_google_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label>
        <input id="seomae_google_title" type="text" name="seomae_google_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_title', true ) ); ?>">
    </p>
	<p class="meta-options seomae_field">
        <label for="seomae_google_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label>
        <input id="seomae_google_description" type="text" name="seomae_google_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_google_description', true ) ); ?>">
    </p>
	
</div>

	
<br>
	
<h3 class="seo_metabox_googletwitterfacebook">Facebook</h3>
<div class="seomae_box">

	
    <p class="meta-options seomae_field">
        <label for="seomae_facebook_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label>
        <input id="seomae_facebook_title" type="text" name="seomae_facebook_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_title', true ) ); ?>">
    </p>
	<p class="meta-options seomae_field">
        <label for="seomae_facebook_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label>
        <input id="seomae_facebook_description" type="text" name="seomae_facebook_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_description', true ) ); ?>">
    </p>
	<p class="meta-options seomae_field">
        <label for="seomae_facebook_image" class="seo_metabox_labeltitel"><?php _e( 'Facebook Image URL', 'wp-smart-seo' ); ?></label>
        <input id="seomae_facebook_image" type="text" name="seomae_facebook_image" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_facebook_image', true ) ); ?>">
    </p>

</div>
	
<br>
	
<h3 class="seo_metabox_googletwitterfacebook">Twitter</h3>
<div class="seomae_box">

	
    <p class="meta-options seomae_field">
        <label for="seomae_twitter_title" class="seo_metabox_labeltitel"><?php _e( 'Title', 'wp-smart-seo' ); ?></label>
        <input id="seomae_twitter_title" type="text" name="seomae_twitter_title" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_title', true ) ); ?>">
    </p>
	<p class="meta-options seomae_field">
        <label for="seomae_twitter_description" class="seo_metabox_labeltitel"><?php _e( 'Description', 'wp-smart-seo' ); ?></label>
        <input id="seomae_twitter_description" type="text" name="seomae_twitter_description" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_description', true ) ); ?>">
    </p>
	<p class="meta-options seomae_field">
        <label for="seomae_twitter_image" class="seo_metabox_labeltitel"><?php _e( 'Twitter Image URL', 'wp-smart-seo' ); ?></label>
        <input id="seomae_twitter_image" type="text" name="seomae_twitter_image" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'seomae_twitter_image', true ) ); ?>">
    </p>

</div>
*/
?>

<br>
	
<h3 class="seo_metabox_googletwitterfacebook"><?php _e( 'Indexing', 'wp-smart-seo' ); ?></h3>
<?php
$sele1 = '';
$sele2 = '';
$sele3 = '';
$sele4 = '';
$seomae_index_db = esc_attr( get_post_meta( get_the_ID(), 'seomae_index', true ) );	
//echo "gespeichert: $seomae_index_db";
	
if ($seomae_index_db == 'index, follow')
{$sele1 = 'selected';}
	
elseif ($seomae_index_db == 'noindex, follow')
{$sele2 = 'selected';} 
	
elseif ($seomae_index_db == 'noindex, nofollow')
{$sele3 = 'selected';} 

elseif ($seomae_index_db == 'index, nofollow')
{$sele4 = 'selected';} 

else {
$sele = '';	
}
?>
<div class="seomae_box">
	<select name="seomae_index">
	<option <?php echo $sele1; ?> value="index, follow">index, follow</option>
	<option <?php echo $sele2; ?> value="noindex, follow">noindex, follow</option>
	<option <?php echo $sele3; ?> value="noindex, nofollow">noindex, nofollow</option>
	<option <?php echo $sele4; ?> value="index, nofollow">index, nofollow</option>
	</select>
</div>
	
</div>


<script type="text/javascript">
function zaehlen_g1() {

var maxzeichen = 70;
var zeichen1 = document.getElementById('seomae_google_title').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_g1").style.color="red";
    else
        document.getElementById("counter_g1").style.color="green";

    document.getElementById("counter_g1").innerHTML = (maxzeichen - zeichen1)+ ' available';
}

function zaehlen_g2() {

var maxzeichen = 150;
var zeichen1 = document.getElementById('seomae_google_description').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_g2").style.color="red";
    else
        document.getElementById("counter_g2").style.color="green";

    document.getElementById("counter_g2").innerHTML = (maxzeichen - zeichen1)+ ' available';
}

function zaehlen_f1() {

var maxzeichen = 70;
var zeichen1 = document.getElementById('seomae_facebook_title').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_f1").style.color="red";
    else
        document.getElementById("counter_f1").style.color="green";

    document.getElementById("counter_f1").innerHTML = (maxzeichen - zeichen1)+ ' available';
}

function zaehlen_f2() {

var maxzeichen = 150;
var zeichen1 = document.getElementById('seomae_facebook_description').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_f2").style.color="red";
    else
        document.getElementById("counter_f2").style.color="green";

    document.getElementById("counter_f2").innerHTML = (maxzeichen - zeichen1)+ ' available';
}

function zaehlen_t1() {

var maxzeichen = 70;
var zeichen1 = document.getElementById('seomae_twitter_title').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_t1").style.color="red";
    else
        document.getElementById("counter_t1").style.color="green";

    document.getElementById("counter_t1").innerHTML = (maxzeichen - zeichen1)+ ' available';
}

function zaehlen_t2() {

var maxzeichen = 150;
var zeichen1 = document.getElementById('seomae_twitter_description').value.length;

    if(zeichen1 > maxzeichen)
        document.getElementById("counter_t2").style.color="red";
    else
        document.getElementById("counter_t2").style.color="green";

    document.getElementById("counter_t2").innerHTML = (maxzeichen - zeichen1)+ ' available';
}







</script>

<script type="text/javascript">
    /*
    function copy11()
    {
        var original = document.getElementById('seomae_google_title');
        var kopie = document.getElementById('seomae_facebook_title');  
        original.value = kopie.value;   
    }
    */

    var google_titel = document.getElementById('seomae_google_title');
    var fb_titel = document.getElementById('seomae_facebook_title');
    var tw_titel = document.getElementById('seomae_twitter_title');

    google_titel.addEventListener("input", () => {
        fb_titel.value = google_titel.value; 
        tw_titel.value = google_titel.value; 
    });



    var google_description = document.getElementById('seomae_google_description');
    var fb_description = document.getElementById('seomae_facebook_description');
    var tw_description = document.getElementById('seomae_twitter_description');

    google_description.addEventListener("input", () => {
        fb_description.value = google_description.value; 
        tw_description.value = google_description.value; 
    });
</script>