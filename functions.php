<?php

function response($text, $tts, $array_of_buttons, $session_id, $message_id, $user_id) {
$response = array(
    "response"  => array(
                        "text"          => "$text",
                        "tts"           => "$tts",
                        "buttons"       => $array_of_buttons,
                        "end_session"   => false
                        ),
    "session"   => array(
                        "session_id"    => "$session_id",
                        "message_id"    => $message_id,
                        "user_id"       => "$user_id"
                        ),
    "version"   => "1.0"
);

return json_encode($response);
}

?>