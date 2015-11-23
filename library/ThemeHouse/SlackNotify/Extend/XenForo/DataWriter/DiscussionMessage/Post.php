<?php
class ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_DiscussionMessage_Post
{
	protected function _messagePostSave()
	{
		parent::_messagePostSave();
		$xenOptions = XenForo_Application::getOptions();
		if ($this->isInsert() && $xenOptions->th_slackNotify_notifyPost && !$this->isDiscussionFirstMessage()) {
			$post = $this->getMergedData();

			$thread = $this->_getThreadModel()->getThreadById($post['thread_id']);
			$visitor = XenForo_Visitor::getInstance()->toArray();
			$userLink = XenForo_Link::buildPublicLink('full:members', $visitor);
			$postLink = XenForo_Link::buildPublicLink('full:posts', $post);

			ThemeHouse_SlackNotify_Helper_Slack::notify('<'.$userLink.'|'.$visitor['username'].'> has replied to the thread: <'.$postLink.'|'.$thread['title'].'>');
		}
	}
}

if (false) {
	class XFCP_ThemeHouse_SlackNotify_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XenForo_DataWriter_DiscussionMessage_Post {}
}