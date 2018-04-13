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
        ['list', '/list', 'GET'],
        ['addView', '/admin', 'GET'],
        ['viewAfterAdd', '/serie/admin', ['GET','POST']],
        ['search', '/list/searchResult', 'GET'],
    ],
    'Home' => [
        ['homePage', '/', 'GET'],
    ],

];
