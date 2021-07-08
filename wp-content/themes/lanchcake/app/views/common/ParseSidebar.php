<?php

namespace app\views\common;

use app\models\ModelPost;

class ParseSidebar
{

    public $modelPost;
    public function __construct()
    {
        $this->modelPost = new ModelPost;
    }

    public function listCategories()
    {
        $listCate = $this->modelPost->getTaxonomy([
            'orderby' => 'ID',
            'order'   => 'DESC',
            'taxonomy' => 'category',
            'hide_empty' => false,
            'meta_query' => [
                'relation' => 'AND',
                [
                    'key' => 'isshowhomepage',
                    'value' => true,
                    'compare' => '='
                ],
            ],
        ]);
        ob_start();
        if (!empty($listCate) && !is_wp_error($listCate)) : ?>
            <ul class="category-list">
                <?php foreach ($listCate as $cate) : ?>
                    <li><a href="<?php echo get_term_link($cate->slug, 'category'); ?>"><?php echo $cate->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
<?php endif;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
