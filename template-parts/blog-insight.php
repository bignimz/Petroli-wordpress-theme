<?php $linkArrow = get_template_directory_uri() . '/src/assets/images/angle-right.png' ?>

<div class="blog_section">
    <div class="container">
        <div class="blog_section__wrapper">
         <?php
             $args = array(
                 'post_type' => 'post', 
                 'post_category' => 'petroli',
                 'posts_per_page' => 3,
                 'ignore_sticky_posts' => true,
             );
     
             $homeBlog = new WP_Query($args);
     
             if ($homeBlog->have_posts()) : while ($homeBlog->have_posts()) : $homeBlog->the_post();
                 $blogImage = get_the_post_thumbnail_url(get_the_ID(), 'large'); // Get featured image URL for each post
             ?>
                 <div class="blog-content" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $blogImage; ?>')">
                     <h2><?php esc_html_e(the_title()); ?></h2>
                     <a href="<?php echo esc_url(get_the_permalink()); ?>" class="read_more_btn">Read more</a>
                 </div>
             <?php
             endwhile;
             wp_reset_postdata(); // Reset the post data
             else :
                 // No posts found
             endif;
             ?>
        </div>
        <a href="" class="blog_more">More From The blog <span class="link_arrow"><img src="<?php echo esc_url($linkArrow); ?>" alt=""></span></a>
    </div>
</div>
