<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<?php _e('Esta pagina tiene protección con contraseña. Ingresa la contraseña para ver los comentarios.','html5reset'); ?>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h2 id="comments"><?php comments_number(__('Sin respuesta','html5reset'), __('Una respuesta','html5reset'), __('% Respuestas','html5reset') );?></h2>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p><?php _e('No hay comentarios.','html5reset'); ?></p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2><?php comment_form_title( __('¿Qué opinas?','html5reset'), __('¿Qué opinas de %s?','html5reset') ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p><?php _e('Debes ser','html5reset'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in','html5reset'); ?></a> <?php _e('to post a comment.','html5reset'); ?></p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" >
		<div>
			<textarea name="comment" id="comment" class="form-control" rows="5" tabindex="1"></textarea>
		</div>

		<?php if ( is_user_logged_in() ) : ?>

			<p><?php _e('Ingresaste como','html5reset'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php _e('Salir','html5reset'); ?> &raquo;</a></p>

		<?php else : ?>
			<div class="form-group">
				<label for="author"><?php _e('Nombre','html5reset'); ?> <?php if ($req) echo "(*)"; ?></label>
				<input type="email" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> class="form-control" placeholder="Tu nombre">
  		    </div>

			<div class="form-group">
				<label for="email"><?php _e('Email (No será publicado)','html5reset'); ?> <?php if ($req) echo "(*)"; ?></label>
				<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?> class="form-control" placeholder="Tu Email">
  		    </div>
		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<input name="submit" type="submit" id="submit" tabindex="4" class="btn btn-default" value="<?php _e('Enviar','html5reset'); ?>" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
