<?php

if (isset($_SESSION['added'])) {
    echo '

    <div class="alert alert-success" role="alert">' .
        $_SESSION["added"] . '</div>';
    session_destroy();
}

if (isset($_SESSION['updated'])) {
    echo '

    <div class="alert alert-success" role="alert">' .
        $_SESSION["updated"] . '</div>';
    session_destroy();
}

if (isset($_SESSION['deleted'])) {
    echo '

    <div class="alert alert-success" role="alert">' .
        $_SESSION["deleted"] . '</div>';
    session_destroy();
}

?>