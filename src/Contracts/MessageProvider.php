<?php

namespace ConstantUtil\Contracts;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     */
    public function getMessageBag(): MessageBag;
}
