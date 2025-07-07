<?php

namespace Longman\TelegramBot\Entities\InputPaidMedia;

class InputPaidMediaPhoto extends InputPaidMedia
{
    /**
     * Type of the media, must be photo
     */
    protected $type = 'photo';

    /**
     * InputPaidMediaPhoto constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $data['type'] = $this->type; // Ensure type is set correctly
        parent::__construct($data);
    }
}
