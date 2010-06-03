
<?php

define( 'THEME_CLASS', 'MyTheme' );

class MyTheme extends Theme {

		public function add_template_vars()	{
		if( !$this->template_engine->assigned( 'pages' ) ) {
			$this->assign('pages', Posts::get( array( 
			'content_type' => 'page',
			'status' => Post::status('published'),
			'nolimit' => 1 ) ) );
		}
		
		// Comment form
		$this->add_template( 'formcontrol_text', dirname(__FILE__).'/forms/formcontrol_text.php', true);
		$this->add_template( 'formcontrol_textarea', dirname(__FILE__).'/forms/formcontrol_textarea.php', true);
		$this->add_template( 'formcontrol_submit', dirname(__FILE__).'/forms/formcontrol_submit.php', true);
		// Display author
		$this->assign( 'show_author' , true );
		parent::add_template_vars();
	}
	
		public function action_init_theme()	{
		// Apply Format::autop() to post content...
		Format::apply( 'autop', 'post_content_excerpt' );
		// Apply Format::tag_and_list() to post tags...
		Format::apply( 'tag_and_list', 'post_tags_out' );
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Remove the comment on the following line to limit post length on the home page to 1 paragraph or 100 characters
		// Format::apply_with_hook_params( 'more', 'post_content_out', _t('Read more'), 100, 1 );
	}
}

?>



