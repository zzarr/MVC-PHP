<?php
include('bookController.php');
$main_ctrl = new bookController();
$main_ctrl->invoke();
$main_ctrl->invokeDB(); //pilih salah satu method
