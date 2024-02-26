<?php

function show($stuff){
    print_r(explode("/" , trim($_GET['url'], "/")));
}