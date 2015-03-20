<?php
/**
 * Created by PhpStorm.
 * User: manuele
 * Date: 20/03/15
 * Time: 19:20
 */

class Webgriffe_Stripe_Model_Observer
{

    public function addStripeJs(Varien_Event_Observer $event)
    {
        /** @var Mage_Core_Controller_Varien_Action $controller */
        $controller = $event->getControllerAction();
        /** @var Mage_Page_Block_Html_Head $headBlock */
        $headBlock = $controller->getLayout()->getBlock('head');

        if ($headBlock) {
            $headBlock->addJs('https://js.stripe.com/v2/');
        }
    }
}
