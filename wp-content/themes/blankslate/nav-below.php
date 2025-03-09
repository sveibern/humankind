<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s Eldre', 'blankslate' ), '<span class="meta-nav">&lt;</span>' ),
'next_text' => sprintf( esc_html__( 'Nyere %s', 'blankslate' ), '<span class="meta-nav">&gt;</span>' )
);
the_posts_navigation( $args ); ?>
