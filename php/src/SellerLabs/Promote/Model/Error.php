<?php

namespace SellerLabs\Promote\Model;

class Error
{
    /**
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }
}