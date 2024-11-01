<?php
function registeradnfPage() {
	add_submenu_page( 'options-general.php', 'WP Admin Dashboard News Feed', 'ADNF Settings', 'manage_options', 'adnf-dashboard-feed', 'esoft_dashboard_feed' ); 
}
add_action('admin_menu', 'registeradnfPage');

function esoft_dashboard_feed() {
	
	echo '<div class="newsWrap">';
		echo '<h1>WP Admin Dashboard News Feed Configurations</h1>';
?>
   <div id="nhtLeft">  
    <form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
		        
		<div class="inside">
        <h3>Set your feed information</h3>
			<table class="form-table">
                <tr>
					<th><label for="adnf_feed_title">Feed Title</label></th>
					<td><input type="text" name="adnf_feed_title" value="<?php $adnf_feed_title = get_option('adnf_feed_title'); if(!empty($adnf_feed_title)) {echo $adnf_feed_title;} else {echo "E2Soft News & Tutorials";}?>"></td>
				</tr>
                <tr>
					<th><label for="adnf_feed_link">Feed URL or Link</label></th>
					<td><input type="text" name="adnf_feed_link" value="<?php $adnf_feed_link = get_option('adnf_feed_link'); if(!empty($adnf_feed_link)) {echo $adnf_feed_link;} else {echo "http://www.e2soft.com/blog/feed/";}?>"></td>
				</tr>
                <tr>
					<th><label for="adnf_show_count">Show Count</label></th>
					<td><select name="adnf_show_count" id="adnf_show_count">
            <option value="2" <?php if( get_option('adnf_show_count') == '2'){ echo 'selected="selected"'; } ?>>2</option>
            <option value="3" <?php if( get_option('adnf_show_count') == '3'){ echo 'selected="selected"'; } ?>>3</option>
            <option value="4" <?php if( get_option('adnf_show_count') == '4'){ echo 'selected="selected"'; } ?>>4</option>
            <option value="5" <?php if( get_option('adnf_show_count') == '5'){ echo 'selected="selected"'; } ?>>5</option>
        </select></td>
				</tr>
                <tr>
					<th><label for="adnf_show_summery">Show Summery</label></th>
					<td><select name="adnf_show_summery" id="adnf_show_summery">
            <option value="1" <?php if( get_option('adnf_show_summery') == '1'){ echo 'selected="selected"'; } ?>>Yes</option>
            <option value="0" <?php if( get_option('adnf_show_summery') == '0'){ echo 'selected="selected"'; } ?>>No</option>
        </select></td>
				</tr>
                
				<tr>
					<th><label for="adnf_show_author">Show Author</label></th>
					<td><select name="adnf_show_author" id="adnf_show_author">
            <option value="1" <?php if( get_option('adnf_show_author') == '1'){ echo 'selected="selected"'; } ?>>Yes</option>
            <option value="0" <?php if( get_option('adnf_show_author') == '0'){ echo 'selected="selected"'; } ?>>No</option>
        </select></td>
				</tr>
				<tr>
					<th><label for="adnf_show_date">Show Date</label></th>
					<td><select name="adnf_show_date" id="adnf_show_date">
            <option value="1" <?php if( get_option('adnf_show_date') == '1'){ echo 'selected="selected"'; } ?>>Yes</option>
            <option value="0" <?php if( get_option('adnf_show_date') == '0'){ echo 'selected="selected"'; } ?>>No</option>
        </select></td>
				</tr>
		</table>
	
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="adnf_feed_title, adnf_feed_link, adnf_show_count,  adnf_show_summery, adnf_show_author, adnf_show_date" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" class="button button-primary" /></p>
	</form>      
  </div>
  </div>
 
  
  <div id="nhtRight">
  
  <div class="nhtWidget">
    <div class="clrFix"></div>
    <h3>About the Author</h3>
	
    <div class="hiremewidget"><p>My name is <strong><a href="https://www.upwork.com/freelancers/~01bf79370d989b2033" target="_blank">S M Hasibul Islam</a></strong> and I am a <strong>Web Developer, Expert WordPress Developer</strong>. I am regularly available for interesting freelance projects. If you ever need my help, do not hesitate to get in touch <a href="https://www.upwork.com/freelancers/~01bf79370d989b2033" target="_blank">me</a>. Don't hesitate to <a href="http://www.e2soft.com/forum/" target="_blank">ask any question on our forum</a>.<br />
	  <strong>Skype:</strong> cse.hasib<br />
	  <strong>Email:</strong> cse.hasib@gmail.com<br />
	  <strong>Web:</strong> <a href="http://www.e2soft.com/"/>www.e2soft.com</a><br /></p>
    <div class="clrFix"></div>
	</div>
	
	
		<div class="hiremewidget">
		<!-- START Hire Me on oDesk Widget -->
		<script language="JavaScript">
		var odesk_widgets_width = 310;
		var odesk_widgets_height = 265;
		</script>
		<script src="https://www.odesk.com/widgets/providers/v1/large/~01bf79370d989b2033.js"></script>
		<!-- END Hire Me on oDesk Widget -->
		</div>
	<div class="clrFix"></div>	
  </div>
  
  <div class="nhtWidget">
	<?php
	 $urls_total = array("http://www.bdonlinebazar.com/","http://bdonlinebazar.com/product-category/clothing/","http://bdonlinebazar.com/product-category/electronics/","http://bdonlinebazar.com/product-category/watches/","http://bdonlinebazar.com/product-category/kids/");
	$random_urls = array_rand($urls_total);
	?>
	<iframe class="border_1" src="<?php echo $urls_total["$random_urls"]; ?>" width="320" height="300">
	</iframe>
	<div class="clrFix"></div>
	</div>
	
<div class="clrFix"></div>
<?php		
	echo '</div>';
}