<?php
namespace RedChamps\NotificationBar\Block\Adminhtml\System\Config\Fieldset;

use Magento\Backend\Block\Template;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;

/**
 * Renderer for banner in System Configuration
 *
 */
class Info extends Template implements RendererInterface
{
    protected $_template = 'RedChamps_NotificationBar::system/config/fieldset/info.phtml';

    /**
     * Render fieldset html
     *
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        return $this->toHtml();
    }
}
