<?php

namespace Jetimob\Juno\Lib\Model;

class ErrorDetail
{
    private string $message;

    private string $errorCode;

    private ?string $field = null;

    /**
     * ErrorDetail constructor.
     * @param string $message
     * @param string $errorCode
     * @param string|null $field
     */
    public function __construct(string $message, string $errorCode, ?string $field = null)
    {
        $this->message = $message;
        $this->errorCode = $errorCode;
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $ss = sprintf('[ERROR_CODE %s]: %s', $this->errorCode, $this->message);

        if (!empty($this->field)) {
            $ss .= sprintf('\n[FIELD]: %s', $this->field);
        }

        return $ss;
    }
}
