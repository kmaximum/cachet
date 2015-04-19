<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Http\Controllers\Admin;

use CachetHQ\Cachet\Http\Controllers\AbstractController;
use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\IncidentTemplate;
use Exception;
use GrahamCampbell\Binput\Facades\Binput;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiController extends AbstractController
{
    /**
     * Updates a component with the entered info.
     *
     * @param \CachetHQ\Cachet\Models\Component $component
     *
     * @throws \Exception
     *
     * @return \CachetHQ\Cachet\Models\Component
     */
    public function postUpdateComponent(Component $component)
    {
        if (!$component->update(Binput::except(['_token']))) {
            throw new Exception(trans('dashboard.components.edit.failure'));
        }

        return $component;
    }

    /**
     * Updates a components ordering.
     *
     * @return array
     */
    public function postUpdateComponentOrder()
    {
        $componentData = Binput::all();
        unset($componentData['component'][0]); // Remove random 0 index.

        foreach ($componentData['component'] as $componentId => $order) {
            $component = Component::find($componentId);
            $component->update(['order' => $order]);
        }

        return $componentData;
    }

    /**
     * Returns a template by slug.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     *
     * @return \CachetHQ\Cachet\Models\IncidentTemplate
     */
    public function getIncidentTemplate()
    {
        $templateSlug = Binput::get('slug');

        $template = IncidentTemplate::where('slug', $templateSlug)->first();

        if ($template) {
            return $template;
        }

        throw new ModelNotFoundException('Incident template for '.$templateSlug.' could not be found.');
    }
}
