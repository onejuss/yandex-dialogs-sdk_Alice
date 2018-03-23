<?php

if (basename($_SERVER['SCRIPT_FILENAME']) != 'index.php') {
    echo 'denied';
    exit();
}

if (strtolower($command) == 'тарифы') {
    $array_of_buttons = array(
                                array(
                                    "title"     => "11111",
                                    "hide"      => true
                                ),
                                array(
                                    "title" => "222222",
                                    "hide"  => true
                                ),
                            );

    $give_response = response('тут список тарифных планов', 'тут список тарифных планов', $array_of_buttons, $session_id, $message_id, $user_id);
}

?>