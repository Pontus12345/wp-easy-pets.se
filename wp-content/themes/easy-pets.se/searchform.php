<?php 
$querystring = esc_attr(apply_filters('the_search_query', get_search_query()));
$searchstring = "Search Store?";

if (empty($querystring)) { $querystring = $searchstring; }
?>

<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<div class="form-group icon-input has-feedback">
		<input style="display: none;" class="form-input" type="text" name="s" id="s" placeholder="<?php echo $querystring; ?>"
		onblur="if (this.value == '') { this.value = '<?php echo $searchstring; ?>'; }"
		onfocus="if (this.value == '<?php echo $searchstring; ?>') { this.value = ''; }" />
		<input type='button' class='fa form-submit' value="&#xf002;">
	</div>
</form>