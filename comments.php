<?php if ( $post->comments->moderated->count ) {
echo '<h3>Comments</h3>
<ol id="commentlist">';
foreach ( $post->comments->moderated as $comment ) {
// publish commenter url only if the url is != empty
if ( $comment->url_out == '' ) {
$comment_url = $comment->name_out;
}
else {
$comment_url = '<a href="' . $comment->url_out . '" rel="external">' . $comment->name_out . '</a>';
}
?>

<li id="comment-<?php echo $comment->id; ?>">
<p>[<a href="#comment-<?php echo $comment->id; ?>" rel="bookmark"><?php echo $post->slug; ?>#comment<?php echo $comment->id; ?></a>]</p>
<?php if ( $comment->status == Comment::STATUS_UNAPPROVED ) : ?><p><em><?php _e('In moderation'); ?></em></p><?php endif; ?>
<div class="comment"><?php echo $comment->content_out; ?></div>
<p class="comment-meta">by <cite><?php echo $comment_url; ?></cite> on <?php $comment->date->out( 'M j, Y @ h:ia' ); ?></p>
</li>
<?php } echo '</ol>' ?>
<?php } ?>

<?php if ( !$post->info->comments_disabled ) { ?>

<h3>Add a comment</h3>

<?php if ( Session::has_messages() ) {
	Session::messages_out();
}
	$post->comment_form()->out();
} ?>