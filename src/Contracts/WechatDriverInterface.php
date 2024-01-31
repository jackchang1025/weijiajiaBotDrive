<?php

namespace Weijiajia\BotDrive\Contracts;

interface WechatDriverInterface extends DriverInterface, LoginManageInterface, GroupManagementInterface, FriendManageInterface, MessageSendingInterface
{

}
