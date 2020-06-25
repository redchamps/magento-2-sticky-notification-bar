<?php
namespace RedChamps\NotificationBar\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

class Notification extends Template
{
    const BASE_CONFIG_PATH = "notification_bar/";

    public function getSetting($path)
    {
        return  $this->_scopeConfig->getValue(
            self::BASE_CONFIG_PATH . "general/" . $path,
            ScopeInterface::SCOPE_STORE
        );
    }
}
