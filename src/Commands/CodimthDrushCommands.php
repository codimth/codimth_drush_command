<?php

namespace Drupal\codimth_drush_command\Commands;

use Drush\Commands\DrushCommands;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */
class CodimthDrushCommands extends DrushCommands
{

    /**
     * Drush command that displays the given text.
     *
     * @param string $text
     *   Argument with message to be displayed.
     * @command codimth_custom_commands:codimth
     * @aliases drush-codimth codimth
     * @option uppercase
     *   Uppercase the message.
     * @usage codimth_custom_commands:codimth --uppercase  text
     */
    public function codimth($text = 'Hello world codimth!', $options = ['uppercase' => FALSE])
    {
        if ($options['uppercase']) {
            $text = strtoupper($text);
        }
        $this->output()->writeln($text);
    }


}
