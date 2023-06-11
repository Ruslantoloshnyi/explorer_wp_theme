<?php
$args = array(
    'post_type'      => 'stories',
    'posts_per_page' => 3,
    'tax_query'      => array(
        array(
            'taxonomy' => 'adventure',
            'field'    => 'slug',
            'terms'    => 'first',
        ),
    ),
);

$query = new WP_Query($args);
?>


<section>
    <div class="stories_wrapper">
        <div class="stories">
            <div class="stories__head">Featured Stories</div>
            <div class="stories__subhead">Did you read our personal favorites?</div>
            <div class="stories-content">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                        <div class="stories-content-block">
                            <div class="stories-content-block__image">
                                <?php the_post_thumbnail(); ?>
                                <div class="stories-content-block__image-autor">
                                    <?php
                                    $author_id = get_the_author_meta('ID');
                                    echo get_avatar($author_id, 30);
                                    ?>
                                    <p class="stories-content-block__autor"><?php the_author(); ?></p>
                                    <p class="stories-content-block__date"><?php the_date(); ?></p>
                                </div>
                            </div>
                            <div class="stories-content-block__text">
                                <p><?php the_title(); ?></p>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <div class="stories__link">
                <p>Want to read all of our stories?</p>
                <a href="#">Read the full blog</a>
            </div>
        </div>


    </div>
</section>