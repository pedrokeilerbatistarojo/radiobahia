<?php


/**
 * Outputs the tab posts
 *
 * @since 1.0.0
 *
 * @param array $args  Post Arguments.
 */
if (!function_exists('newsup_render_posts_radiobahia')):
  function newsup_render_posts_radiobahia( $type, $show_excerpt, $excerpt_length, $number_of_posts, $category = '0' ){

    $args = array();
   
    switch ($type) {
        case 'popular':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'orderby' => 'comment_count',
                'ignore_sticky_posts' => true,
                'category__not_in' => 22,
            );
            break;

        case 'recent':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'orderby' => 'date',
                'ignore_sticky_posts' => true,
                'category__not_in' => 22,
            );
            break;

        case 'categorised':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'ignore_sticky_posts' => true,
                'category__not_in' => 22,
            );
            $category = isset($category) ? $category : '0';
            if (absint($category) > 0) {
                $args['cat'] = absint($category);
            }
            break;


        default:
            break;
    }

    if( !empty($args) && is_array($args) ){
        $all_posts = new WP_Query($args);
        if($all_posts->have_posts()):
            echo '<div class="mg-posts-sec mg-posts-modul-2"><div class="mg-posts-sec-inner row"><div class="small-list-post col-lg-12"><ul>';
            while($all_posts->have_posts()): $all_posts->the_post();

                ?>
                
                  <li class="small-post clearfix">
                        <?php
                        if(has_post_thumbnail()){
                            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                            $url = $thumb !== false ? '' . $thumb[0] . '' : '""';
                            $col_class = 'col-sm-8';
                        }else {
                            $url = '';
                            $col_class = 'col-sm-12';
                        }
                        global $post;
                        ?>
                        <?php if (!empty($url)): ?>
                           <div class="img-small-post">
                                <a href="<?php the_permalink(); ?>">
                                <?php if (!empty($url)): ?>
                                    <img src="<?php echo esc_url($url); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="small-post-content">
                                <div class="mg-blog-category">
                                   <?php newsup_post_categories('/'); ?>
                                </div>
                                 <div class="title_small_post">
                                    
                                    <a href="<?php the_permalink(); ?>">
                                        <h5>
                                        <?php the_title(); ?>
                                        </h5>
                                    </a>
                                   
                                </div>
                        </div>
                </li>
            <?php
            endwhile;wp_reset_postdata();
            echo '</ul></div></div></div>';
        endif;
    }
}
endif;


