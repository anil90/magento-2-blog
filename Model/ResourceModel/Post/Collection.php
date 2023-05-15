<?php

namespace Anil\Blog\Model\ResourceModel\Post;

use Magento\Sales\Model\ResourceModel\Order\Collection\AbstractCollection;

use Anil\Blog\Model\Post;
use Anil\Blog\Model\ResourceModel\Post as PostResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResource::class);
    }

}
