<?php
namespace Craft;

class YoutubeFilterPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('YoutubeFilter');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'MilesHerndon';
    }

    public function getDeveloperUrl()
    {
        return 'http://milesherndon.com';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.youtubefilter.twigextensions.YoutubeFilterTwigExtension');

        return new YoutubeFilterTwigExtension();
    }
}
