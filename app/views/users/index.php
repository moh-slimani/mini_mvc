<?php
if (isset($users)) {

    foreach ($users as $user) {
        echo $user->name . '<br>';
    }
}
