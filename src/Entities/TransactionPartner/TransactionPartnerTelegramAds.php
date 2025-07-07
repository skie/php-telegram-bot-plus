<?php

namespace Longman\TelegramBot\Entities\TransactionPartner;

class TransactionPartnerTelegramAds extends TransactionPartner
{
    /**
     * TransactionPartnerTelegramAds constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        // Type is expected to be 'telegram_ads'
        parent::__construct($data, $bot_username);
    }
}
