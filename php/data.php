<?php
$request = filter_input_array(INPUT_POST);
file_put_contents("request.txt", $request["intensity"], LOCK_EX);
