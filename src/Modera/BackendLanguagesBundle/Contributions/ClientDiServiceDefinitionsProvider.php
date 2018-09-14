<?php

namespace Modera\BackendLanguagesBundle\Contributions;

use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * Provides service definitions for client-side dependency injection container.
 *
 * @author    Sergei Vizel <sergei.vizel@modera.org>
 * @copyright 2014 Modera Foundation
 */
class ClientDiServiceDefinitionsProvider implements ContributorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getItems()
    {

        return array(
            'extjs_localization_runtime_plugin' => array(
                'className' => 'Modera.backend.languages.runtime.ExtJsLocalizationPlugin',
                'tags' => ['runtime_plugin'],
            ),
            'modera_backend_languages.user_settings_window_contributor' => array(
                'className' => 'Modera.backend.languages.runtime.UserSettingsWindowContributor',
                'args' => ['@application'],
                'tags' => ['shared_activities_provider'],
            ),
        );
    }
}
