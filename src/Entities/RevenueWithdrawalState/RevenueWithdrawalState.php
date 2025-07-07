<?php

namespace Longman\TelegramBot\Entities\RevenueWithdrawalState;

use Longman\TelegramBot\Entities\Entity;

abstract class RevenueWithdrawalState extends Entity
{
    /**
     * @var string Type of the revenue withdrawal state
     */
    protected $type;

    /**
     * RevenueWithdrawalState constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        parent::__construct($data, $bot_username);
        $this->type = $data['type'];
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
