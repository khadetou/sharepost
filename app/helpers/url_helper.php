<?php

//Single page
function redirect($page)
{
    header("location: " . URLROOT . "/" . $page);
}
