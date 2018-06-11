<?php get_header();?>
<?php get_header('filter');?>

<section id="article">
    <div class="container">
        <div class="row">
            <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

                <div class="col-md-9">
                    <div class="article-header">
                        <div class="article-header__title">
                            <?php the_title() ?>
                        </div>
                        <a href="<?=get_author_posts_url(get_the_author_meta('ID'));?>" class="article-header__author" title="<?=get_the_author()?>">
                            <div class="article-header__author__image" style="background-image:url('<?=get_avatar_url(get_the_author_meta('ID'));?>')"></div>
                            <div class="article-header__author__info">
                                <span class="article-header__author__info__name"><?=get_the_author()?></span>
                            </div>
                        </a>
                        <div class="article-header__info">
                            <div class="article-header__info__date"><?=get_the_date() .' '. get_the_time()?></div>
                            <div class="article-header__info__tags">
                                <?php
                                    $cat_list = get_the_category();
                                    if(count($cat_list) > 0){
                                        foreach($cat_list as $cat){
                                            echo "<a href='".get_category_link($cat->cat_ID)."' class='article-header__info__tags__tag'>".$cat->name."</a>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <?=nl2br(get_the_content());?>
                    </div>
                </div>

			<?php endwhile; // End of the loop. ?>
            
            <aside class="col-md-3">
                <?php get_sidebar();?>
            </aside>
        </div>
    </div>
</section>


<?php get_footer();?>