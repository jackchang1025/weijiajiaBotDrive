<?php

namespace Weijiajia\BotDrive\Contracts;

use Weijiajia\OneBot\Contracts\Action\ActionInterface;
use Weijiajia\OneBot\Contracts\Action\ActionResponseInterface;

interface MessageSendingInterface
{
    /**
     * 发送文本消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendText(ActionInterface $action):ActionResponseInterface;

    /**
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendFile(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送图片消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendImage(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送语音消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendVoice(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送视频消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendVideo(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送链接消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendUrl(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送名片消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendNameCard(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送表情消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendEmoji(ActionInterface $action):ActionResponseInterface;

    /**
     * 发送小程序消息
     * @param ActionInterface $action
     * @return mixed
     */
    public function sendMiniProgram(ActionInterface $action):ActionResponseInterface;
}