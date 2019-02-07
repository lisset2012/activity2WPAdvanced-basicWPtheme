<?php get_header();?>

<!-- Banner is my Main Area-->
<section id="banner">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content">
        <header>
            <h1><?php the_title(); ?></h1>
            <h3><?php the_author(); ?></h3>
            <!-- <p>A free and fully responsive site template</p> -->
        </header>
        <p><?php the_excerpt(); ?></p>
        <ul class="actions">
            <li><a href="#" class="button big">Learn More</a></li>
        </ul>
    </div>
    <span class="image object">
        <img src="<?php echo get_template_directory_uri() . '/images/pic10.jpg'; ?>" alt="pic10" />
    </span>
    <?php endwhile; else :?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
</section>

<?php get_footer();?> 