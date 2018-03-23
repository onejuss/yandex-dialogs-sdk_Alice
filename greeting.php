<?php

if (basename($_SERVER['SCRIPT_FILENAME']) != 'index.php') {
    echo 'denied';
    exit();
}

// buttons
$array_of_buttons = array(
                                array(
                                    "title"     => "mark.ru",
                                    "payload"   => '{}',
                                    "url"       => "https://mark.ru",
                                    "hide"      => true
                                ),
                                array(
                                    "title" => "тарифы",
                                    "hide"  => true
                                ),
                            );

// call response
$give_response = response('Меня хотят добавить в друзья около 15000 человек. И всякий раз, когда я открываю эту страницу - она зависает. Так что я забросил эту затею', 'Меня хотят добавить в друзья около 15000 человек. И всякий раз, когда я открываю эту страницу - она зависает. Так что я забросил эту затею', $array_of_buttons, $session_id, $message_id, $user_id);

?>