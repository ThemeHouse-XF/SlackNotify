<?php
class ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_Discussion_Thread extends XFCP_ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_Discussion_Thread
{
	protected function _discussionPostSave()
	{
		parent::_discussionPostSave();
		$xenOptions = XenForo_Application::getOptions();
		if ($this->isInsert() && $xenOptions->th_slackNotify_notifyThread) {
			$thread = $this->getMergedData();
			$visitor = XenForo_Visitor::getInstance()->toArray();
			$userLink = XenForo_Link::buildPublicLink('full:members', $visitor);
			$threadLink = XenForo_Link::buildPublicLink('full:threads', $thread);
			ThemeHouse_SlackNotify_Helper_Slack::notify('<'.$userLink.'|'.$visitor['username'].'> has created the thread: <'.$threadLink.'|'.$thread['title'].'>');
		}
	}
}

if (false) {
	class XFCP_ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_Discussion_Thread extends XenForo_DataWriter_Discussion_Thread {}
}