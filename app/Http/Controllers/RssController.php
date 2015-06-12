<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers;

use CachetHQ\Cachet\Facades\Setting;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use Roumen\Feed\Facades\Feed;

class RssController extends AbstractController
{
    /**
     * Generates an Atom feed of all incidents.
     *
     * @param \CachetHQ\Cachet\Models\ComponentGroup|null $group
     *
     * @return \Illuminate\Http\Response
     */
    public function feedAction(ComponentGroup $group = null)
    {
        $feed = Feed::make();
        $feed->title = Setting::get('app_name');
        $feed->description = trans('cachet.feed');
        $feed->link = $this->canonicalizeUrl(Setting::get('app_domain'));

        $feed->setDateFormat('datetime');

        if ($group->exists) {
            $group->components->map(function ($component) use ($feed) {
                $component->incidents()->visible()->orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                    $this->feedAddItem($feed, $incident);
                });
            });
        } else {
            Incident::visible()->orderBy('created_at', 'desc')->get()->map(function ($incident) use ($feed) {
                $this->feedAddItem($feed, $incident);
            });
        }

        return $feed->render('rss');
    }

    /**
     * Adds an item to the feed.
     *
     * @param Roumen\Feed\Facades\Feed         $feed
     * @param \CachetHQ\Cachet\Models\Incident $incident
     */
    private function feedAddItem(&$feed, $incident)
    {
        $feed->add(
            $incident->name,
            Setting::get('app_name'),
            $this->canonicalizeUrl(Setting::get('app_domain')).'#'.$incident->id,
            $incident->created_at->toRssString(),
            $incident->message
        );
    }

    /**
     * Add a / at the end of an URL to in order to be W3C compliant
     *
     * @param string $url
     */
    private function canonicalizeUrl($url)
    {
        return preg_replace('/([^\/])$/', '$1/', $url);
    }
}
