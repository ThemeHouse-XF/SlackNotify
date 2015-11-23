<?php

class ThemeHouse_SlackNotify_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

	protected function _getExtendedClasses()
	{
		return array(
			'ThemeHouse_SlackNotify' => array(
				'datawriter' => array(
					'XenForo_DataWriter_Discussion_Thread',
					'XenForo_DataWriter_DiscussionMessage_Post',
					'ThemeHouse_Ideas_DataWriter_Idea'
				),
			),
		);
	}

	public static function loadClassDataWriter($class, array &$extend)
	{
		$extend = self::createAndRun('ThemeHouse_SlackNotify_Listener_LoadClass', $class, $extend, 'datawriter');
	}
}