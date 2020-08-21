<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Mahasura Muda
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<!-- Comments Area -->
<aside id="comments" class="comments-area article__comments">
  <?php if (have_comments()): ?>
    <ol class="comment-list">
      <?php
        $args = array(
          'walker'            => null,
          'max_depth'         => '',
          'style'             => 'ol',
          'callback'          => null,
          'end-callback'      => null,
          'type'              => 'all',
          'reply_text'        => '<i class="fa fa-comment"></i> reply',
          'page'              => '',
          'per_page'          => '',
          'avatar_size'       => 48,
          'reverse_top_level' => null,
          'reverse_children'  => '',
          'format'            => 'html5',
          'short_ping'        => false,
          'echo'              => true
        );
        wp_list_comments( $args );
       ?>
    </ol>
    <?php if (!comments_open() && get_comments_number()): ?>
      <p class="alert alert-danger" role="alert">
        <?php esc_html_e( 'Maaf, ruang diskusi ditutup, ya.', 'Mahasura Muda' ); ?>
      </p>
    <?php endif; ?>
  <?php endif; ?>
  <?php

		$fields = array(

			'author' =>
				'<div class="form-group"><label for="author">' . __( 'Nama', 'domainreference' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',

			'email' =>
				'<div class="form-group"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',

			'url' =>
				'<div class="form-group last-field"><label for="url">' . __( 'Website', 'domainreference' ) . '</label><input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>',
      'cookies' =>
        '<p class="form-check comment-form-cookies-consent"><input id="wp-comment-cookies-consent" class="form-check-input" name="wp-comment-cookies-consent" type="checkbox" value="yes">' . '<label class="form-check-label" for="wp-comment-cookies-consent">' . 'Dengan ini saya setuju atas kebijakan privasi yang berlaku.',

		);

		$args = array(

			'class_submit' => 'btn btn-block btn-lg bg-mahasura-red text-white',
			'label_submit' => __( 'Kirim' ),
			'comment_field' =>
				'<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control" name="comment" rows="4" required="required"></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )

		);

		comment_form( $args );

	?>
</aside>
<!-- Comments Area End -->
<script>
  var x = document.getElementsByClassName("comment-notes");
  var i;
  for (i = 0; i < x.length; i++) {
    if (i < 1) {
      x[i].innerHTML = "Jangan malu untuk berpendapat 😁 <br> Kolom yang ditandai * wajib diisi, ya.";
    }
  }
  document.getElementById("reply-title").innerHTML = "Bagaimana menurutmu?";
</script>
