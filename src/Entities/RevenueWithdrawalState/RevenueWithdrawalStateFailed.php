<?php

namespace Longman\TelegramBot\Entities\RevenueWithdrawalState;

class RevenueWithdrawalStateFailed extends RevenueWithdrawalState
{
    /**
     * RevenueWithdrawalStateFailed constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        // Type is expected to be 'failed'
        parent::__construct($data, $bot_username);
    }
}
