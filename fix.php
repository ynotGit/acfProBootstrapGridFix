    <section class="home-page-selling-points container-fluid">
        <?php $i = 1; ?>
        <div class="row">
            <?php
            if (have_rows('selling_points')) :
                while (have_rows('selling_points')) : the_row();
            ?>
            <div class="col-sm-3">
                <img src="<?php echo get_sub_field('selling_point_icon')['url'] ?>" alt="">
                <h3><?php the_sub_field('selling_point_title'); ?></h3>
                <p><?php the_sub_field('selling_point_text'); ?></p>
            </div>
            <?php
                    if ($i == 4) {
                        echo '</div><div class="row">';
                        $i = 0;
                    }
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
    </section>
