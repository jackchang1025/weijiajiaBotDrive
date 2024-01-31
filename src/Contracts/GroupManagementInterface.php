<?php

namespace Weijiajia\BotDrive\Contracts;

interface GroupManagementInterface
{
    // 群操作
    public function modifyGroupName($groupId, $newName);
    public function joinGroupByScan($qrCode);
    public function modifyGroupNote($groupId, $note);
    public function createGroup($members);
    public function leaveGroup($groupId);
    public function addGroupMembers($groupId, $members);
    public function inviteGroupMembers($groupId, $invitees);
    public function removeGroupMembers($groupId, $members);
    public function setGroupAnnouncement($groupId, $announcement);

    // 群管理操作(群主)
    public function getGroupMembersList($groupId);
    public function getGroupMemberDetails($groupId, $memberId);
    public function getGroupDetails($groupId);
    public function getGroupQRCode($groupId);
    public function modifyMyNicknameInGroup($groupId, $nickname);
    public function saveGroupToContactList($groupId, $save);
}