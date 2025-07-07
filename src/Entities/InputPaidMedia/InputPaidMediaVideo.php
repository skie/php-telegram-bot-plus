<?php

namespace Longman\TelegramBot\Entities\InputPaidMedia;

use Longman\TelegramBot\Entities\InputMedia\InputMedia; // For thumbnail handling consistency if any

class InputPaidMediaVideo extends InputPaidMedia
{
    /**
     * Type of the media, must be video
     */
    protected $type = 'video';

    /**
     * @var mixed|null Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
     */
    protected $thumbnail;

    /**
     * @var int|null Optional. Video width
     */
    protected $width;

    /**
     * @var int|null Optional. Video height
     */
    protected $height;

    /**
     * @var int|null Optional. Video duration in seconds
     */
    protected $duration;

    /**
     * @var bool|null Optional. Pass True if the uploaded video is suitable for streaming
     */
    protected $supports_streaming;

    /**
     * InputPaidMediaVideo constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $data['type'] = $this->type; // Ensure type is set correctly
        parent::__construct($data);

        $this->thumbnail = $data['thumbnail'] ?? null;
        $this->width = $data['width'] ?? null;
        $this->height = $data['height'] ?? null;
        $this->duration = $data['duration'] ?? null;
        $this->supports_streaming = $data['supports_streaming'] ?? null;
    }

    /**
     * Get thumbnail.
     *
     * @return mixed|null
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set thumbnail.
     *
     * @param string|InputFile $thumbnail
     * @return self
     */
    public function setThumbnail($thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * Get width.
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Get height.
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Get duration.
     *
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Get supports streaming.
     *
     * @return bool|null
     */
    public function getSupportsStreaming(): ?bool
    {
        return $this->supports_streaming;
    }
}
