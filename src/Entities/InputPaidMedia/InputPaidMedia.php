<?php

namespace Longman\TelegramBot\Entities\InputPaidMedia;

use Longman\TelegramBot\Entities\Entity;

abstract class InputPaidMedia extends Entity
{
    /**
     * @var string Type of the media to send
     */
    protected $type;

    /**
     * @var string File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
     */
    protected $media;

    /**
     * InputPaidMedia constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        // bot_username is not typically needed for Input* entities
        parent::__construct($data);
        $this->type = $data['type'];
        $this->media = $data['media'];
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

    /**
     * Get media.
     *
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * Attach a file to the InputPaidMedia.
     *
     * This method should be overridden by child classes if they handle file attachments.
     *
     * @param string $file_path
     * @return self
     */
    public function setMediaInput(string $file_path): self
    {
        // For file uploads, the media should be "attach://<file_attach_name>"
        // The actual file content is sent in the multipart/form-data request.
        // This is a placeholder and might need specific handling in Request.php or when building the request.
        $file_attach_name = basename($file_path);
        $this->media = 'attach://' . $file_attach_name;
        // Store the actual path for later use when building the request
        $this->setCustomProperty('media_input_path', $file_path);
        return $this;
    }
}
