<?php

namespace SellerLabs\Promote\Model;

class UnsyncDealRequestBody
{
    /**
     * @var string
     */
    protected $note;
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * @param string $note
     *
     * @return self
     */
    public function setNote($note = null)
    {
        $this->note = $note;
        return $this;
    }
}