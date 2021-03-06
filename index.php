<?php
/**
 * @package Runner Application
 * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
 * @version 1.0 2017/02/11
 * @link http://www.giuseppedonadio.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see config_inc.php
 * @todo none
 */

require '../include/config.php'; #provides configuration, pathing, error handling, db credentials
include 'includes/runs.php';
include 'includes/total.php';
include 'includes/converter.php';
include 'includes/run-miles.php';
include 'includes/run-converter.php';
include 'includes/showRun.php';

$config->titleTag = 'My Run Application';
# END CONFIG AREA ----------------------------------------------------------
get_header(); #defaults to theme header or header_inc.php

/*
global $runs;
global $totals;
global $converts;
global $runConverts;
global $allRuns;
*/

foreach ($converts as $convert) {
  echo $convert->convert;
}

echo '
      <div class="main">
        <div class="daybox">Monday</div>
        <div class="daybox">Tuesday</div>
        <div class="daybox">Wednesday</div>
        <div class="daybox">Thursday</div>
        <div class="daybox">Friday</div>
        <div class="daybox">Saturday</div>
        <div class="daybox">Sunday</div>
     ';

foreach ($allRuns as $allRun) {
  echo $allRun->allRun;
}

echo '</div>';

get_footer(); #defaults to theme header or footer_inc.php
?>
