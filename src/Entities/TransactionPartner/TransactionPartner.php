<?php

namespace Longman\TelegramBot\Entities\TransactionPartner;

use Longman\TelegramBot\Entities\Entity;

abstract class TransactionPartner extends Entity
{
    /**
     * @var string Type of the transaction partner
     */
    protected $type;

    /**
     * TransactionPartner constructor.
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
