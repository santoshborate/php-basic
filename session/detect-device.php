<?php

if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
    echo "<b>You are running a mobile webbrowser! </b>";
} else {
    echo "<b>You are running Desktop ! </b>";
}
?>