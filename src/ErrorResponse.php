<?php
namespace Feriame\Response;

class ErrorResponse extends Response
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var array
     */
    private $messages;

    /**
     * @var array
     */
    private $extras;

    /**
     * @param string $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @param array $messages
     */
    public function setMessages($messages): void
    {
        $this->messages = $messages;
    }

    /**
     * @param array $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * constructor.
     */
    public function __construct(
        $message = null,
        $extras = null,
        $messages = null
    ) {
        $this->extras = $extras;
        $this->messages = $messages;
    }

    /**
     * Implements abstract getResponse()
     */
    protected function getResponse(): array
    {
        return [
            'error' => true,
            'extras' => $this->extras,
            'messages' => $this->messages,
        ];
    }
}