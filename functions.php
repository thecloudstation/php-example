<?php
function getCurrentTime() {
    date_default_timezone_set(TIMEZONE);
    return date('Y-m-d H:i:s');
}
