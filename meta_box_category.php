<?php
add_action('category_add_form_fields', 'category_metabox_add', 10, 1);
add_action('category_edit_form_fields', 'category_metabox_edit', 10, 1);	





/* edit file fürs neu anlegen von kategorien */
function category_metabox_add($tag) { 

$sele1b = '';
$sele2b = '';
$sele3b = '';
$sele4b = '';
    
?>
<hr class="dots">
<div class="form-field">
		<label for="category_google_title"><?php _e('Google Title', 'wp-smart-seo') ?></label>
		<input name="category_google_title" id="category_google_title" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Title Meta Tag for Google', 'wp-smart-seo'); ?></p>
		<br />
		<label for="category_google_description"><?php _e('Google Description', 'wp-smart-seo') ?></label>
		<input name="category_google_description" id="category_google_description" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Description Meta Tag for Google', 'wp-smart-seo'); ?></p>
	</div>
<hr class="dots">
	<div class="form-field">
		<label for="category_facebook_title"><?php _e('Facebook Title', 'wp-smart-seo') ?></label>
		<input name="category_facebook_title" id="category_facebook_title" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Title Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
		<br />
		<label for="category_facebook_description"><?php _e('Facebook Description', 'wp-smart-seo') ?></label>
		<input name="category_facebook_description" id="category_facebook_description" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Description Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
		<br />
		<label for="category_facebook_image"><?php _e('Facebook Image', 'wp-smart-seo') ?></label>
		<input name="category_facebook_image" id="category_facebook_image" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Image Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
	</div>
<hr class="dots">
	<div class="form-field">
		<label for="category_twitter_title"><?php _e('Twitter Title', 'wp-smart-seo') ?></label>
		<input name="category_twitter_title" id="category_twitter_title" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Title Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
		<br />
		<label for="category_twitter_description"><?php _e('Twitter Description', 'wp-smart-seo') ?></label>
		<input name="category_twitter_description" id="category_twitter_description" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Description Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
		<br />
		<label for="category_twitter_image"><?php _e('Twitter Image', 'wp-smart-seo') ?></label>
		<input name="category_twitter_image" id="category_twitter_image" type="text" value="" size="40" aria-required="true" />
		<p class="description"><?php _e('This is the Image Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
	</div>
<hr class="dots">
<div class="form-field">

	<select name="seomae_category_index">
	<option <?php echo $sele1b ?> value="index, follow">index, follow</option>
	<option <?php echo $sele2b ?> value="noindex, follow">noindex, follow</option>
	<option <?php echo $sele3b ?> value="noindex, nofollow">noindex, nofollow</option>
	<option <?php echo $sele4b ?> value="index, nofollow">index, nofollow</option>
	</select>
</div>

<script type="text/javascript">
    var google_titel = document.getElementById('category_google_title');
    var fb_titel = document.getElementById('category_facebook_title');
    var tw_titel = document.getElementById('category_twitter_title');

    google_titel.addEventListener("input", () => {
        fb_titel.value = google_titel.value; 
        tw_titel.value = google_titel.value; 
    });

	var google_descr = document.getElementById('category_google_description');
    var fb_descr = document.getElementById('category_facebook_description');
    var tw_descr = document.getElementById('category_twitter_description');

    google_descr.addEventListener("input", () => {
        fb_descr.value = google_descr.value; 
        tw_descr.value = google_descr.value; 
    });

</script>

<?php } 	
 
/* update file fürs updaten von bestehenden kategorien */
function category_metabox_edit($tag) { 

$sele1b = '';
$sele2b = '';
$sele3b = '';
$sele4b = '';
?>
	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_google_title"><?php _e('Google Title', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_google_title" id="category_google_title" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_google_title', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the Title Meta Tag for Google', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_google_description seomae_titel"><?php _e('Google Description', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_google_description" id="category_google_description" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_google_description', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the description Meta Tag for Google', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_facebook_title"><?php _e('Facebook Title', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_facebook_title" id="category_facebook_title" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_facebook_title', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the Title Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_facebook_description"><?php _e('Facebook Description', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_facebook_description" id="category_facebook_description" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_facebook_description', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the description Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_facebook_image"><?php _e('Facebook Image', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_facebook_image" id="category_facebook_image" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_facebook_image', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the Image Meta Tag for Facebook', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_twitter_title"><?php _e('Twitter Title', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_twitter_title" id="category_twitter_title" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_twitter_title', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the Title Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_twitter_description"><?php _e('Twitter Description', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_twitter_description" id="category_twitter_description" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_twitter_description', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the description Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_twitter_image"><?php _e('Twitter Image', 'wp-smart-seo'); ?></label>
		</th>
		<td>
			<input name="category_twitter_image" id="category_twitter_image" type="text" value="<?php echo get_term_meta($tag->term_id, 'category_twitter_image', true); ?>" size="40" aria-required="true" />
			<p class="description"><?php _e('This is the Image Meta Tag for Twitter', 'wp-smart-seo'); ?></p>
		</td>
	</tr>

	<tr class="form-field">
		<th scope="row" valign="top">
			<label for="category_twitter_image"><?php _e('Indexing', 'wp-smart-seo'); ?></label>
		</th>
		<td>
	<?php

$seomae_index2_db = get_term_meta($tag->term_id, 'seomae_category_index', true);
//echo $seomae_index_db;
	
if ($seomae_index2_db == 'index, follow')
{$sele1b = 'selected';}
	
elseif ($seomae_index2_db == 'noindex, follow')
{$sele2b = 'selected';} 
	
elseif ($seomae_index2_db == 'noindex, nofollow')
{$sele3b = 'selected';} 

elseif ($seomae_index2_db == 'index, nofollow')
{$sele4b = 'selected';} 

else {
$sele = '';	
}								
?>
<select name="seomae_category_index">
	<option <?php echo $sele1b ?> value="index, follow">index, follow</option>
	<option <?php echo $sele2b ?> value="noindex, follow">noindex, follow</option>
	<option <?php echo $sele3b ?> value="noindex, nofollow">noindex, nofollow</option>
	<option <?php echo $sele4b ?> value="index, nofollow">index, nofollow</option>
</select>
			
		</td>
	</tr>

	<script type="text/javascript">
    var google_titel = document.getElementById('category_google_title');
    var fb_titel = document.getElementById('category_facebook_title');
    var tw_titel = document.getElementById('category_twitter_title');

    google_titel.addEventListener("input", () => {
        fb_titel.value = google_titel.value; 
        tw_titel.value = google_titel.value; 
    });

	var google_descr = document.getElementById('category_google_description');
    var fb_descr = document.getElementById('category_facebook_description');
    var tw_descr = document.getElementById('category_twitter_description');

    google_descr.addEventListener("input", () => {
        fb_descr.value = google_descr.value; 
        tw_descr.value = google_descr.value; 
    });

</script>
<?php }	





add_action('created_category', 'save_category_metadata', 10, 1);	
add_action('edited_category', 'save_category_metadata', 10, 1);
 
function save_category_metadata($term_id)
{

    if (isset($_POST['category_google_title'])) 
		update_term_meta( $term_id, 'category_google_title', $_POST['category_google_title']); 
	
	if (isset($_POST['category_google_description'])) 
		update_term_meta( $term_id, 'category_google_description', $_POST['category_google_description']); 
	
    if (isset($_POST['category_facebook_title'])) 
		update_term_meta( $term_id, 'category_facebook_title', $_POST['category_facebook_title']); 
	
	if (isset($_POST['category_facebook_description'])) 
		update_term_meta( $term_id, 'category_facebook_description', $_POST['category_facebook_description']); 
	
	if (isset($_POST['category_facebook_image'])) 
		update_term_meta( $term_id, 'category_facebook_image', $_POST['category_facebook_image']); 
	
    if (isset($_POST['category_twitter_title'])) 
		update_term_meta( $term_id, 'category_twitter_title', $_POST['category_twitter_title']); 
	
	if (isset($_POST['category_twitter_description'])) 
		update_term_meta( $term_id, 'category_twitter_description', $_POST['category_twitter_description']); 
	
	if (isset($_POST['category_twitter_image'])) 
		update_term_meta( $term_id, 'category_twitter_image', $_POST['category_twitter_image']); 
	
	if (isset($_POST['seomae_category_index'])) 
		update_term_meta( $term_id, 'seomae_category_index', $_POST['seomae_category_index']); 
	
}

?>