<?php

namespace Weijiajia\BotDrive\Contracts;
use Weijiajia\OneBot\Event\Event;

interface MessageFormatInterface
{
    /**
     * 格式化消息为 onebot 格式
     * @param array $message
     * @return Event
     */
    public function formatMessageDriverToOneBot(array $message):Event;
}