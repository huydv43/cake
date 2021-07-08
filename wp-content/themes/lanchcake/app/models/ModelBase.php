<?php

namespace app\models;

use WP_Query;

abstract class ModelBase
{
    protected $postType;

    public function getAll($params = [])
    {
        $args = array_merge([
            'post_type' => $this->postType,
        ], $this->getFieldsSearch($params));

        return new WP_Query($args);
    }

    public function getTaxonomy($params = [])
    {
        return get_terms(array_merge([
            'post_type' => $this->postType,
            'taxonomy' => 'category',
            'hide_empty' => true,
        ], $this->getFieldsSearch($params)));
    }

    public function getFieldsSearch($params = [])
    {
        unset($params['post_type']);
        return $params;
    }
}
