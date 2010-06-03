<div class="row"><label for="<?php echo $field; ?>"><?php echo $caption; ?></label>
<input type="text" id="<?php echo $field; ?>" name="<?php echo $field; ?>" value="<?php echo htmlspecialchars( $value ); ?>">
<?php if ( $field == 'comment_email' ) { ?><span>(will not be published)</span><?php } ?></div>
<?php $control->errors_out( '<li>%s</li>', '<ul class="error">%s</ul>' ); ?>
