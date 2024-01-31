<?php

namespace Weijiajia\BotDrive\Contracts;

interface FriendManageInterface
{
    public function searchFriend($query);
    public function addFriend($friendId);
    public function deleteFriend($friendId);
    public function setPrivacySettings($settings);
    public function modifyFriendRemark($friendId, $remark);
    public function changeProfilePicture($picture);
}