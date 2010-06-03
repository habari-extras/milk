<?php $theme->display ('header'); ?>

<div id="post-<?php echo $post->id; ?>">
<h2><?php echo $post->title_out; ?></h2>
<p class="post-date"><?php echo $post->pubdate->out('M j, Y @ h:ia'); ?></p>
<?php echo $post->content_out; ?>
<div class="post-meta">
<p><?php if ( $show_author ) { _e( 'Author: %s', array( $post->author->displayname ) ); } ?>
<?php if ( count( $post->tags ) > 0 ) { ?> &middot; Tags: <?php echo $post->tags_out; ?><?php } ?>
<?php if ( $loggedin ) { ?> &middot; <a href="<?php echo $post->editlink; ?>"><?php _e('Edit'); ?> "<?php echo $post->title_out; ?>"</a><?php } ?>
</p>
</div>
<div class="comments">
<?php $theme->display ( 'comments' ); ?>
</div>
</div>
<div class="clear"></div>

</div>
<?php $theme->display ( 'sidebar' ); ?>
<?php $theme->display ( 'footer' ); ?>
