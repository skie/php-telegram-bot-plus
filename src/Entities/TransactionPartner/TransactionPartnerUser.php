<?php

namespace Longman\TelegramBot\Entities\TransactionPartner;

use Longman\TelegramBot\Entities\User;

class TransactionPartnerUser extends TransactionPartner
{
    /**
     * @var User|null Information about the user
     */
    protected $user;

    /**
     * @var string|null Optional. Bot-specified invoice payload, for revenue withdrawals. Only for transactions of type “withdrawal” and only for bots that enabled paid media.
     */
    protected $invoice_payload;

    /**
     * TransactionPartnerUser constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        parent::__construct($data, $bot_username);
        // Type is expected to be 'user' or 'fragment' based on documentation.
        // For 'fragment', the user data might be under 'user' key or directly in $data.
        // Assuming 'user' key for user data based on typical Telegram API structure.
        if (isset($data['user'])) {
            $this->user = new User($data['user'], $bot_username);
        }
        $this->invoice_payload = $data['invoice_payload'] ?? null;
    }

    /**
     * Get user.
     *
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Get invoice payload.
     *
     * @return string|null
     */
    public function getInvoicePayload(): ?string
    {
        return $this->invoice_payload;
    }
}
