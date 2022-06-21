<?php
require __DIR__ . '../../../vendor/autoload.php';


use Google\Client;
use Google\Service\Calendar;


function getClient()
{
    $client = new Client();
    $client->setApplicationName('Google Calendar API PHP Quickstart');
    $client->setScopes('https://www.googleapis.com/auth/calendar.events.readonly');
    $client->setAuthConfig(__DIR__ . '../../../credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');

    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
        $accessToken = json_decode(file_get_contents($tokenPath), true);
        $client->setAccessToken($accessToken);
    }

    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
        // Refresh the token if possible, else fetch a new one.
        if ($client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
            $authCode = trim(fgets(STDIN));

            // Exchange authorization code for an access token.
            $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
            $client->setAccessToken($accessToken);

            // Check to see if there was an error.
            if (array_key_exists('error', $accessToken)) {
                throw new Exception(join(', ', $accessToken));
            }
        }
        // Save the token to a file.
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
}


function calldayof($start, $end)
{
    $client = getClient();
    $service = new Calendar($client);
    $calendarId = 'th.th#holiday@group.v.calendar.google.com';
    $optParams = array(
        'maxResults' => 10,
        'orderBy' => 'startTime',
        'singleEvents' => true,
        'timeMin' => $start,
        'timeMax' => $end
    );
    $results = $service->events->listEvents($calendarId, $optParams);
    $events = $results->getItems();
    $Dayoff = array();
    $count = count($events);

    if (empty($events)) {
        print "No upcoming events found.\n";
    } else {
        foreach ($events as $event) {
            $start = $event->start->dateTime;
            if (empty($start)) {
                $start = $event->start->date;
            }

            $value = $start;

            $Dayoff = array(
                "total_date" => $count,
                "dateoff_list" => $value
            );
            return $Dayoff;
        }
    }
}
