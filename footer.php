</div>

<div id="footer">
<p><?php Options::out('title'); _e(' is powered by'); ?> <a href="http://www.habariproject.org/">Habari</a>.</p>
<p><a href="<?php URL::out( 'atom_feed', array( 'index' => '1' ) ); ?>"  rel="alternate" type="application/rss+xml"><?php _e('Atom Entries'); ?></a> <?php _e('and'); ?> <a href="<?php URL::out( 'atom_feed_comments' ); ?>" rel="alternate" type="application/rss+xml"><?php _e('Atom Comments'); ?></a></p>
<?php $theme->footer(); ?>
</div>
</body>
</html>