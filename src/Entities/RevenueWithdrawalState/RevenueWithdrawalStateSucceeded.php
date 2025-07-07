<?php

namespace Longman\TelegramBot\Entities\RevenueWithdrawalState;

class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    /**
     * @var int Date the withdrawal was completed in Unix time
     */
    protected $date;

    /**
     * @var string An HTTPS URL that can be used to see transaction details
     */
    protected $url;

    /**
     * RevenueWithdrawalStateSucceeded constructor.
     *
     * @param array $data
     * @param string $bot_username
     */
    public function __construct(array $data, string $bot_username = '')
    {
        // Type is expected to be 'succeeded'
        parent::__construct($data, $bot_username);
        $this->date = $data['date'];
        $this->url = $data['url'];
    }

    /**
     * Get date.
     *
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Get URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
