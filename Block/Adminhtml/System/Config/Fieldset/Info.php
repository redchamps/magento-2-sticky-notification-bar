<?php
namespace RedChamps\NotificationBar\Block\Adminhtml\System\Config\Fieldset;

/**
 * Renderer for banner in System Configuration
 * 
 */
class Info extends \Magento\Backend\Block\Template implements \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    protected $_template = 'RedChamps_NotificationBar::system/config/fieldset/info.phtml';

    /**
     * Render fieldset html
     *
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->toHtml();
    }
}
