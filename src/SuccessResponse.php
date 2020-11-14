<?php
namespace Feriame\Response;

class SuccessResponse extends Response
{
    /**
     * @var array
     */
    private $data;

    /**
     * @var array
     */
    private $extras;

    /**
     * @param array $data
     */
    public function setData($data): void
    {
        $this->data = $data;
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
        $data = null,
        $extras = null
    ) {
        $this->data = $data;
        $this->extras = $extras;
    }

    /**
     * Implements abstract getResponse()
     */
    protected function getResponse(): array
    {
        return [
            'error' => false,
            'data' => $this->data,
            'extras' => $this->extras,
        ];
    }
}