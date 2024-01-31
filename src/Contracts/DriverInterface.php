<?php

namespace Weijiajia\BotDrive\Contracts;
use Weijiajia\OneBot\Contracts\Action\ActionInterface;
use Weijiajia\OneBot\Contracts\Action\ActionResponseInterface;

interface DriverInterface
{
    public function canAction(string $actionName):bool;

    public function handleAction(ActionInterface $action): ActionResponseInterface;

    public function getMessageFormat():MessageFormatInterface;
}

