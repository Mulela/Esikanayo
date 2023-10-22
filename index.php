<?php

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] == 'contact') {
        require("templates/contact.html");
    }
}else{

    require('templates/homepage.html');

}
