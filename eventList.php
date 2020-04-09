<?php
$eventListJson = '[
    {
        "title":"Soiree Bomoko",
        "lieu":"beijing",
        "date":"Dec 7, 2020",
        "moto":"do it and change it",
        "description":"Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
        "poster":"custon/images/4.jpg"
    },
    {
        "title":"Ceremonie d\'aurevoir Ambassadeur",
        "lieu":"kinshasa",
        "date":"Mars 2, 2020",
        "moto":"big event of the month",
        "description":"Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
        "poster":"custon/images/2.jpg"
    },
    {
        "title":"Royale gathering",
        "lieu":"Gangzhou",
        "date":"june 3, 2020",
        "moto":"Royalty and Loyality together",
        "description":"Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.",
        "poster":"custon/images/0.jpg"
    }
]';
    // pour ajouter un event il faut 1.effacer ca ]'; en haut et effacer tous les // qui suivent cette ligne   
    //,
    // {
    //     "title":"",
    //     "lieu":"",
    //     "date":"",
    //     "moto":"",
    //     "description":"",
    //     "poster":""
    // }];
$eventList=json_decode($eventListJson);
function addEvent($eventToAdd){
    array_push($eventList,$eventToAdd);
};
?>
