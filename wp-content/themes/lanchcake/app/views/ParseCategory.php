<?php

namespace app\views;

class ParseCategory
{

    public static function renderComponentSort($params = [])
    {
        ob_start(); ?>
        <div class="head-view">
            <span class="ctg-total"><?php echo $params['found_posts']; ?>件すべての結果を表示</span>
            <div class="ctg-sort">
                <label class="sort-title">並べ替え:</label>
                <div class="sort-by">
                    <select class="form-control form-control-gray form-control-radius form-control-sm" id="sort-by" name="order">
                        <?php
                        foreach ($params['sort']['list'] as $key => $item) :
                            $attrSelected = $params['order'] == $key ? 'selected' : '';
                            echo '<option value="' . $key . '" ' .  $attrSelected . '>' . $item . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>
        </div>
    <?php
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }

    public static function renderComponentPost($the_query)
    {
        ob_start(); ?>
        <ul class="list__news mb-4">
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $post_terms = wp_get_post_categories(get_the_ID());
                ?>
                    <li>
                        <a href="<?php echo the_permalink(); ?>">
                            <div class="new-stt">
                                <?php if (get_the_time('Yd') === current_time('Yd')) : ?>
                                    <span class="stt-new">New</span>
                                <?php endif; ?>
                                <?php foreach ($post_terms as $category) : ?>
                                    <span class="stt-ctg"><?php echo get_cat_name($category); ?></span>
                                <?php endforeach; ?>
                                <span class="stt-other"><?php echo get_the_date('Y年m月d日'); ?>（掲載号：No.183）</span>
                                <span class="stt-other">筆者：<?php the_author(); ?></span>
                            </div>
                            <?php
                            $the_title = strlen(get_the_title()) > 200 ? substr(get_the_title(), 0, 170) . '...' : get_the_title();
                            $the_excerpt = strlen(get_the_excerpt()) > 250 ? substr(get_the_excerpt(), 0, 250) . '...' : get_the_excerpt();
                            ?>
                            <h4 class="ctg-name">
                                <?php echo $the_title; ?>
                            </h4>
                            <?php echo $the_excerpt; ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else : ?>
                <h3 class="mt-5 text-center">アイテムが見つかりませんでした。</h3>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <?php
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }
}
