<section>
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3, // Указать желаемое количество постов для отображения
            'tag' => 'travel' // Указать желаемый тег для фильтрации постов
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
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
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <p>Continue Reading →</p>
                            </a>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>

        <div class="content-read-more">
            <div class="content-read-more__text">Want to read more?</div>
            <div class="content-read-more__button">
               
                <a href="<?php echo get_tag_link(get_term_by('slug', 'travel', 'post_tag')); ?>">Visit Blog Archive</a>
            </div>
        </div>

    </div>
</section>

</div>