<?php

/**
 * Template Name: blog_page
 * Template post type: page*/
?>

<?php get_header(); ?>

<?php
// Request for regular posts
$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'tag' => 'travel'
);
$post_query = new WP_Query($post_args);

// Query for custom post type "Stories"
$stories_args = array(
    'post_type'      => 'stories',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'adventure',
            'field'    => 'slug',
            'terms'    => 'first',
        ),
    ),
);
$stories_query = new WP_Query($stories_args);

// Combining the results of two queries
$combined_query = new WP_Query();
$combined_query->posts = array_merge($post_query->posts, $stories_query->posts);
$combined_query->post_count = $post_query->post_count + $stories_query->post_count;

// Sort by date in reverse order
usort($combined_query->posts, function ($a, $b) {
    return $b->post_date <=> $a->post_date;
});
?>

<section>
    <div class="container">
        <?php
        if ($combined_query->have_posts()) :
            while ($combined_query->have_posts()) :
                $combined_query->the_post();
        ?>

                <div class="content">
                    <div class="content__image">
                        <div>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="content__head"><?php the_title(); ?></div>
                            <div class="content-autor">
                                <?php
                                $author_id = get_the_author_meta('ID');
                                echo get_avatar($author_id, 30);
                                ?>
                                <div>
                                    <div class="content-autor__name"><?php the_author(); ?></div>
                                    <div class="content-autor__date"><?php the_date(); ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="content__image_text">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>

    </div>
</section>
</div>

<?php get_footer(); ?>