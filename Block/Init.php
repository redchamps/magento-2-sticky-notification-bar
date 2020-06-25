<?php
namespace RedChamps\NotificationBar\Block;

use Magento\Backend\Block\AbstractBlock;

class Init extends AbstractBlock
{
    /**
     * @override
     * @see \Magento\Backend\Block\AbstractBlock::_construct()
     * @return void
     */
    protected function _construct()
    {
        /** @var \Magento\Framework\App\ObjectManager $om */
        $om = \Magento\Framework\App\ObjectManager::getInstance();
        /** @var \Magento\Framework\View\Page\Config $page */
        $page = $om->get('Magento\Framework\View\Page\Config');
        $page->addPageAsset('RedChamps_NotificationBar::css/styles.css');
    }
}
