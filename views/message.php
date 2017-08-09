<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 6/08/17
 * Time: 11:11 PM
 */
if(isset($_SESSION['msgtype'])) {
    if ($_SESSION['msgtype'] != null) {
        echo '<div class="alert alert-' . $_SESSION['msgtype'] . '" style="margin-bottom:0px">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msgtype']);
        unset($_SESSION['msg']);
    }
}
