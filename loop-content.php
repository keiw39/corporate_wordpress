            <div class="c-listNews__newsInner">
              <ul class="c-listNews__newsList">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <li class="c-listNews__newsItem fadein">
                  <a href="<?php the_permalink(); ?>" class="c-listNews__newsLink">
                    <div class="c-listNews__newsHeader">
                      <time class="c-listNews__newsDate">
                        <?php the_time('Y.n.j（D）'); ?>
                      </time>
                      <?php if (!is_category() && has_category()): ?>
                      <span class="c-listNews__newsLabel">
                        <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                      </span>
                      <?php endif; ?>
                    </div>
                    <h3 class="c-listNews__newsTitle">
                  <?php the_title(); ?>
                </h3>
                  </a>
                </li>
                <?php
                endwhile; ?>
                <?php
            endif;
            ?>
              </ul>
            </div>
            <!-- ページャー -->
            <div class="c-listNews__pagination fadein">
              <div class="c-listNews__paginationWrap">
                <?php if (function_exists('pagination')):
                pagination($my_query->max_num_pages, $paged);
            endif; ?>
              </div>
            </div>
            <?php wp_reset_postdata(); ?>