 <?php get_header() ?>
 <div class="container">
        <div class="content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="card mb-2">
                        <header class="card-header">
                            <p class="card-header-title">
                                <?php the_title(); ?>
                            </p>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
<?php get_footer() ?>