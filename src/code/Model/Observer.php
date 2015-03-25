<?php
/**
 * Created by PhpStorm.
 * User: manuele
 * Date: 20/03/15
 * Time: 19:20
 */

class Webgriffe_Stripe_Model_Observer
{
    /**
     * @event controller_action_layout_render_before_checkout_onepage_index
     */
    public function addStripeJavascriptBlock(Varien_Event_Observer $event)
    {
        /** @var Mage_Page_Block_Html_Head $headBlock */
        $headBlock = Mage::app()->getLayout()->getBlock('head');

        if ($headBlock) {
            /** @var Webgriffe_Stripe_Block_Page_Html_Head_Javascript $scriptBlock */
            $scriptBlock = $headBlock->getLayout()->createBlock('webgriffe_stripe/page_html_head_javascript', 'head.stripe.javascript');
            $headBlock->append($scriptBlock);
        }
    }
}
