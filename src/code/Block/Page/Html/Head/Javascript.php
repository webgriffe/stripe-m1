<?php
class Webgriffe_Stripe_Block_Page_Html_Head_Javascript extends Mage_Core_Block_Abstract
{
    const CACHE_LIFETIME = 86400;

    protected function _construct()
    {
        parent::_construct();
        $this->setCacheLifetime(self::CACHE_LIFETIME);
    }

    protected function _toHtml()
    {
        return '<script type="text/javascript" src="https://js.stripe.com/v2/"></script>' . "\n";
    }
}