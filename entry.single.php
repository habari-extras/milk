<?php $theme->display ( 'header' ); ?>

<div class="post" id="post-<?php echo $post->id; ?>">
<h2><a href="<?php echo $post->permalink; ?>" rel="bookmark"><?php echo $post->title_out; ?></a></h2>
<p class="post-date"><?php echo $post->pubdate->out('M j, Y @ h:ia'); ?></p>
<?php echo $post->content_out; ?>
<div class="post-meta">
<p><?php if ( $show_author ) { _e( 'Author: %s', array( $post->author->displayname ) ); } ?> &middot; <a href="<?php echo $post->comment_feed_link; ?>" rel="alternate" type="application/rss+xml"><?php _e('Feed for this entry'); ?></a>
<?php if ( count( $post->tags ) > 0 ) { ?> &middot; Tags: <?php echo $post->tags_out; ?><?php } ?>
 &middot; <a href="<?php echo $post->permalink; ?>#commentlist"><?php echo $post->comments->approved->count; ?> <?php echo _n( 'Comment', 'Comments', $post->comments->approved->count ); ?></a><?php if ( $loggedin ) { ?> &middot; <a href="<?php echo $post->editlink; ?>"><?php _e('Edit'); ?> "<?php echo $post->title_out; ?>"</a><?php } ?></p>
</div>
<div class="comments"><?php $theme->display ( 'comments' ); ?></div>
</div>
<div class="clear"></div>
</div>

<?php $theme->display ( 'sidebar' ); ?>
<?php $theme->display ( 'footer' ); ?>
