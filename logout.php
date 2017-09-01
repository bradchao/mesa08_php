<?php
    session_start();
    unset($_SESSION['var1']);
    session_destroy();