<?php

namespace Omnipay\WxPay\Message;

/**
 * Class ShortenUrlResponse
 * @package Omnipay\WxPay\Message
 * @link    https://pay.weixin.qq.com/wiki/doc/api/app.php?chapter=9_3&index=5
 */
class ShortenUrlResponse extends BaseAbstractResponse
{

    public function getShortUrl()
    {
        $data = $this->getData();

        return isset($data['short_url']) ? $data['short_url'] : null;
    }
}
