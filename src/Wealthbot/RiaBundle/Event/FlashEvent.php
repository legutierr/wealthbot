<?php
/**
 * Created by JetBrains PhpStorm.
 * User: maksim
 * Date: 20.05.13
 * Time: 19:52
 * To change this template use File | Settings | File Templates.
 */

namespace Wealthbot\RiaBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class FlashEvent extends Event
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $message
     */
    public function __construct($type = null, $message = null)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }
}