<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Serie' => [
        ['list', '/list/{page}', 'GET'],
        ['selectSerie', '/pageSerie/{id:\d+}', 'GET'],
        ['listEpisodeBySerie','/seasonId', 'POST'],
        ['editSerie', '/pageSerie/admin/{id:\d+}', 'GET'],
        ['search', '/searchResult', 'GET'],
        ['addView', '/admin', 'GET'],
        ['listAdmin', '/list/admin/{page}', 'GET'],
        ['viewAfterAdd', '/admin', 'POST'],
        ['viewAfterUpdate', '/admin/serie', 'POST'],
        ['viewAfterDelete', '/admin/delete/', 'POST'],
    ],
    'Season' => [
        ['addSeason', '/pageSerie/admin/{id:\d+}', 'POST'],
    ],
    'Episode' => [
        ['addEpisode', '/admin/episode', 'POST'],
        ['updateEpisode', '/admin/episode/update/{id:\d+}', 'GET'],
        ['viewAfterUpdateEpisode', '/submit/episode/', 'POST'],
        ['deleteEpisode', '/delete/episode/', 'POST'],
    ],
    'Home' => [
        ['homePage', '/', 'GET'],
        ['printInfo', '/MentionsLegales', 'GET'],
    ],

];
