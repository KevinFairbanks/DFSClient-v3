<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonUserPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonUserPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommonUserPriority_high;

class UserEntityMainTasksResultPriceCommonUser 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonUserPriority_low priority_low;
    */
    public $priority_low = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonUserPriority_normal priority_normal;
    */
    public $priority_normal = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCommonUserPriority_high priority_high;
    */
    public $priority_high = null;        
     
}