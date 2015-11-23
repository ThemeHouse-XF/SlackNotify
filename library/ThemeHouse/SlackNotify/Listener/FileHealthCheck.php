<?php

class ThemeHouse_SlackNotify_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/SlackNotify/Extend/ThemeHouse/Ideas/DataWriter/Idea.php' => 'cf1dcc03c8d65be334b1666f50cb62aa',
                'library/ThemeHouse/SlackNotify/Extend/XenForo/DataWriter/Discussion/Thread.php' => 'ac7ca0685d52ec73d3a2bea29e26adb8',
                'library/ThemeHouse/SlackNotify/Extend/XenForo/DataWriter/DiscussionMessage/Post.php' => '97747331dc70b3457aa9d36932ce1600',
                'library/ThemeHouse/SlackNotify/Helper/Slack.php' => '3809756cd9280d9a08d94cef259b48d4',
                'library/ThemeHouse/SlackNotify/Install/Controller.php' => '54cb1e483e5a613cdbb3122cb3e3d560',
                'library/ThemeHouse/SlackNotify/Listener/LoadClass.php' => '3fc54512fc1f0be6f2d73ab2b5d7b804',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}