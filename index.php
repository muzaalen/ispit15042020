<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

printf("U trenutku otvaranja ove stranice točan datum i vrijeme je: %s", Carbon::now());
