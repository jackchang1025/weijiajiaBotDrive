<?php

namespace Weijiajia\BotDrive\Contracts;

use Weijiajia\OneBot\Contracts\Action\ActionInterface;
use Weijiajia\OneBot\Contracts\Action\ActionResponseInterface;

interface LoginManageInterface
{
    /**
     * 获取登录二维码
     * @param ActionInterface $action
     * @return mixed
     */
    public function getQRCode(ActionInterface $action):ActionResponseInterface;

    /**
     * 确认登录
     * @param ActionInterface $action
     * @return mixed
     */
    public function confirmLogin(ActionInterface $action):ActionResponseInterface;

    /**
     * 获取联系人列表
     * @param ActionInterface $action
     * @return mixed
     */
    public function getContacts(ActionInterface $action):ActionResponseInterface;

    /**
     * 获取联系人详情
     * @param ActionInterface $action
     * @return mixed
     */
    public function getContact(ActionInterface $action):ActionResponseInterface;
}