<aside class="l-single-sidebar__wrap">
  <div class="l-single-sidebar__widget">
    <div class="l-single-sidebar__widgetBox">
      <h2 class="l-single-sidebar__widgetTitle fadein">新着記事</h2>
      <div class="l-single-sidebar__widgetInner">
        <ul class="l-single-sidebar__widgetList">
          <?php
          $args = [
              'post_type' => 'post',
              'posts_per_page' => 5,
          ];
          $my_query = new WP_Query($args);
          ?>
          <?php if ($my_query->have_posts()): ?>
          <?php while ($my_query->have_posts()):
              $my_query->the_post(); ?>
          <li class="l-single-sidebar__widgetItem">
            <a href="<?php the_permalink(); ?>" class="l-single-sidebar__widgetLink">
              <article>
                <figure class="l-single-sidebar__widgetItem__inner">
                  <div class="l-single-sidebar__widgetItem__thumb fadein">
                    <?php if (has_post_thumbnail()):
                        the_post_thumbnail('large'); ?>
                    <?php
                    else:
                         ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/no-image.jpg.webp'); ?>" loading="lazy" alt="no-image" class="l-single-sidebar__widgetItem__img" />
                    <?php
                    endif; ?>
                  </div>
                  <figcaption class="l-single-sidebar__widgetItem__textWrap fadein">
                    <div class="l-single-sidebar__widgetItem__textHeader">
                      <time class="l-single-sidebar__widgetItem__newsDate">
                        <?php the_time('Y.n.j（D）'); ?>
                      </time>
                      <?php if (!is_category() && has_category()): ?>
                      <span class="l-single-sidebar__widgetItem__newsLabel">
                        <?php
                        $postcat = get_the_category();
                        echo $postcat[0]->name;
                        ?>
                      </span>
                      <?php endif; ?>
                    </div>
                    <h3 class="l-single-sidebar__widgetItem__newsTitle">
                      <?php the_title(); ?>
                    </h3>
                  </figcaption>
                </figure>
              </article>
            </a>
          </li>
          <?php
          endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</aside>