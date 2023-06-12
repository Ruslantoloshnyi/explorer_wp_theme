<?php

/**
 * Template Name: travel_page
 * Template post type: page*/
?>

<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3, // Указать желаемое количество постов для отображения
    'tag' => 'travel' // Указать желаемый тег для фильтрации постов
);
$query = new WP_Query($args);
?>

<section>
    <div class="container">
        <?php
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div class="content">
                    <div class="content__image">
                        <div>
                            <?php the_post_thumbnail(); ?>
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