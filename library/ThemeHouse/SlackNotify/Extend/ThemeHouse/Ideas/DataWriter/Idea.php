<?php
class ThemeHouse_SlackNotify_Extend_ThemeHouse_Ideas_DataWriter_Idea extends XFCP_ThemeHouse_SlackNotify_Extend_ThemeHouse_Ideas_DataWriter_Idea
{
	protected function _postSave()
	{
		parent::_postSave();
		$xenOptions = XenForo_Application::getOptions();
		if ($this->isInsert() && $xenOptions->th_slackNotify_notifyIdea) {
			$idea = $this->getMergedData();

			$visitor = XenForo_Visitor::getInstance()->toArray();
			$userLink = XenForo_Link::buildPublicLink('full:members', $visitor);
			$ideaLink = XenForo_Link::buildPublicLink('full:ideas', $idea);
			$queueLink = XenForo_Link::buildPublicLink('full:ideas/moderation-queue');

			ThemeHouse_SlackNotify_Helper_Slack::notify('<'.$userLink.'|'.$visitor['username'].'> has created the idea: <'.$ideaLink.'|'.$idea['title'].'>, and it is <'.$queueLink.'|pending moderation>.');
		}

	}
}

if (false) {
	class XFCP_ThemeHouse_SlackNotify_Extend_ThemeHouse_Ideas_DataWriter_Idea extends ThemeHouse_Ideas_DataWriter_Idea {}
}