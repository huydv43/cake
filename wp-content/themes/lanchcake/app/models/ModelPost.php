<?php

namespace app\models;

class ModelPost extends ModelBase
{
    const POST_TYPE = 'post';

    public function __construct()
    {
        $this->postType = self::POST_TYPE;
    }

    public function getListPosts($params = [])
    {
        $tax_query = [
            'relation' => 'AND',
        ];
        if (!empty($params['ranks'])) {
            $tmp_tax_query = [
                'relation' => 'OR',
            ];

            foreach ($params['ranks'] as $value) {
                array_push($tmp_tax_query, [
                    'taxonomy' => 'rank',
                    'field'    => 'id',
                    'terms'    => $value,
                ]);
            }
            array_push($tax_query, $tmp_tax_query);
        }
        $args = [
            'post_status' => 'publish',
            'order' => $params['order'],
            'orderby' => 'date',
            'paged' => $params['paged'],
            'cat' => $params['cateId'],
            'tax_query' => $tax_query,
            'date_query' => [
                [
                    'year' => date('Y'),
                    'monthnum' => date('m'),
                    'day' => date('d'),
                    'hour' => date('H'),
                    'minute' => date('i'),
                    'second' => date('s'),
                    'inclusive' => false,
                    'compare' =>  '<=',
                    'column' => 'post_date',
                ],
            ],
        ];

        return $this->getAll($args);
    }

    public function getCateParentId($cateId)
    {
        return get_category($cateId)->category_parent ? get_category($cateId)->category_parent : $cateId;
    }

    public function countPosts($cateId)
    {
        $args = [
            'cat' => $cateId,
            'post_status' => 'publish',
            'date_query' => [
                [
                    'year' => date('Y'),
                    'monthnum' => date('m'),
                    'day' => date('d'),
                    'hour' => date('H'),
                    'minute' => date('i'),
                    'second' => date('s'),
                    'inclusive' => false,
                    'compare' =>  '<=',
                    'column' => 'post_date',
                ],
            ],
        ];

        $posts = $this->getAll($args);
        return $posts->found_posts;
    }

    public function getTermsCategories($cateParentId)
    {
        return $this->getTaxonomy([
            'orderby' => 'ID',
            'order'   => 'DESC',
            'taxonomy' => 'category',
            'hide_empty' => false,
            'parent' => $cateParentId,
        ]);
    }

    public function getTermsRank()
    {
        return $this->getTaxonomy([
            'orderby' => 'ID',
            'order'   => 'DESC',
            'taxonomy' => 'rank',
            'hide_empty' => false,
        ]);
    }

    public function getListPostsHomePage()
    {
        $args = [
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'posts_per_page' => 5,
            'date_query' => [
                [
                    'year' => date('Y'),
                    'monthnum' => date('m'),
                    'day' => date('d'),
                    'hour' => date('H'),
                    'minute' => date('i'),
                    'second' => date('s'),
                    'inclusive' => false,
                    'compare' =>  '<=',
                    'column' => 'post_date',
                ],
            ],
        ];

        return $this->getAll($args);
    }
}
