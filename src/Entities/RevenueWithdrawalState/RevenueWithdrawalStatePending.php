<?php

namespace Longman\TelegramBot\Entities\RevenueWithdrawalState;

class RevenueWithdrawalStatePending extends RevenueWithdrawalState
{
    /**
     * RevenueWithdrawalStatePending constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        // Type is expected to be 'pending'
        parent::__construct($data, $bot_username);
    }
}
