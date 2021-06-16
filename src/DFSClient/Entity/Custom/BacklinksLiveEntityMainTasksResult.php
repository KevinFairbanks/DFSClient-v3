<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksLiveEntityMainTasksResultItemsBacklink;

class BacklinksLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|string $mode;
    */
    public $mode = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|BacklinksLiveEntityMainTasksResultItemsBacklink[] $items;
    */
    public $items = [];
 
}