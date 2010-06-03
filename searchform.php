<?php Plugins::act( 'theme_searchform_before' ); ?>
<form method="get" id="searchform" action="<?php URL::out('display_search'); ?>">
<div><label for="s">Search</label>
<input type="text" id="s" name="criteria" value="<?php if ( isset( $criteria ) ) { echo htmlentities($criteria, ENT_COMPAT, 'UTF-8'); } ?>"></div>
<div><button><?php _e('Go!'); ?></button></div>
</form>
<?php Plugins::act( 'theme_searchform_after' ); ?>