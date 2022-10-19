<?php
namespace Mageplaza\HelloWorld\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    const SAY_HELLO = 'Hello All World';
    const STATUS_ENABLE = '1';
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __(self::SAY_HELLO);
    }
    public function getStatus()
    {
        return self::STATUS_ENABLE;
    }
}
