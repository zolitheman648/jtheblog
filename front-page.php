<?php get_header();?>

<section id="article">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="article-header">
                    <div class="article-header__title">
                        <?php get_the_title() ?>
                        Toffee dragée fruitcake sesame snaps chocolate cake jujubes.
                    </div>
                    <div class="article-header__author">
                        <div class="article-header__author__image" style="background-image:url('img/users/zoli.jpg')"></div>
                        <div class="article-header__author__info">
                            <span class="article-header__author__info__name">Rácz Zoltán</span>
                        </div>
                    </div>
                    <div class="article-header__info">
                        <div class="article-header__info__date">2017.07.01. 10:42</div>
                        <div class="article-header__info__tags">
                            <a href="#" class="article-header__info__tags__tag">Category</a>
                            <a href="#" class="article-header__info__tags__tag">Category</a>
                            <a href="#" class="article-header__info__tags__tag">Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-md-3">
                Sidebar
            </aside>
        </div>
    </div>
</section>

<?php get_footer();?>