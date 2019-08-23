<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<?php $protocol = is_ssl() ? 'https://' : 'http://';?>
<div itemscope itemtype="<?php echo esc_attr($protocol);?>schema.org/Comment" id="comments" class="post-comments comment-area product-review-tab clearfix">
	<?php if ( have_comments() ) : ?>
	 		
			<?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'short_ping'  => true,
                    'avatar_size' => 60,
                    'callback'=>'industries_bunch_list_comments'
                ) );
            ?>
            
        
        <?php
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
        <nav class="navigation comment-navigation clearfix" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'industries' ); ?></h1>
            <div class="nav-previous pull-left"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'industries' ) ); ?></div>
            <div class="nav-next pull-right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'industries' ) ); ?></div>
        </nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'industries' ); ?></p>
        <?php endif; ?>
    
    <?php endif; // have_comments() ?> 
     
     <!-- Comment Form -->
    <div class="add_your_review">
        <!-- Heading -->
       <?php if ( comments_open()) : ?>
	    	<div class="theme_inner_title"><h4><?php esc_html_e('Add a Comment', 'industries');?></h4></div>
        <?php endif; ?>	
		<?php industries_bunch_comment_form(); ?>
    </div>    
</div><!-- #comments -->
