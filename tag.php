<?php $theme->display ( 'header' ); ?>

<?php foreach ( $posts as $post ) { ?>

<div class="post" id="post-<?php echo $post->id; ?>">
<h2><a href="<?php echo $post->permalink; ?>"><?php echo $post->title_out; ?></a></h2>
<p class="post-date"><?php echo $post->pubdate->out('M j, Y @ h:ia'); ?></p>
<?php echo $post->content_out; ?>
<div class="post-meta">
<p><?php if ( $show_author ) { _e( 'Author: %s', array( $post->author->displayname ) ); } ?>
<?php if ( count( $post->tags ) > 0 ) { ?> &middot; Tags: <?php echo $post->tags_out; ?><?php } ?>
 &middot; <a href="<?php echo $post->permalink; ?>#comments"><?php echo $post->comments->approved->count; ?> <?php echo _n( 'Comment', 'Comments', $post->comments->approved->count ); ?></a><?php if ( $loggedin ) { ?> &middot; <a href="<?php echo $post->editlink; ?>"><?php _e('Edit'); ?> "<?php echo $post->title_out; ?>"</a><?php } ?></p>
</div>
</div>
<?php } ?>
<div class="clear"></div>

<div class="pagination"><span><?php $theme->prev_page_link(); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php $theme->next_page_link(); ?></span></div>

</div>

<?php $theme->display ( 'sidebar' ); ?>
<?php $theme->display ( 'footer' ); ?>
