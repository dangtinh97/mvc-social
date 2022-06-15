<?php
if($controller==="Auth" && $action=="login") (new Auth())->login();
if($controller==="Auth" && $action=="register") (new Auth())->register();
