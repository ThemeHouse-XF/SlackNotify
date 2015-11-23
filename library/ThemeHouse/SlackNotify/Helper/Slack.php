<?php
class ThemeHouse_SlackNotify_Helper_Slack
{
	public static function notify($text)
	{
		$xenOptions = XenForo_Application::getOptions();
		$data = "payload=" . json_encode(array(
				"text" =>  $text
			));

		$ch = curl_init($xenOptions->th_slackNotify_webhookUrl);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
	}
}