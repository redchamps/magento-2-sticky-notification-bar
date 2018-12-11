<?php
namespace RedChamps\NotificationBar\Block;

class Notification extends \Magento\Framework\View\Element\Template
{
    const BASE_CONFIG_PATH = "notification_bar/";

    public function getText()
    {
        return "Sample Text";
    }

    public function getSetting($path)
    {
        return  $this->_scopeConfig->getValue(self::BASE_CONFIG_PATH."general/".$path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}