<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

class AllRun
{
  public $allRun = "";

  function __construct($allRun)
  {
    $this->allRun = $allRun;
  }
}

$conv = $run->unit;

if ($conv == "Miles") {
  foreach ($runMiles as $runMile) {

    if ($runMile->lengthMile > 0) {
      $allRun = '
            <div class="box" style="background-color:#f2f2f2;opacity: 0.8;color:#1a242f;font-weight:bolder;">
                <div class="date">' . $runMile->dayMile . '</div>
                <div style="clear:both"></div>
                <div class="run">' . $runMile->lengthMile . ' ' . $runMile->unitMile . '</div>
            </div>';

    $allRuns[] = new AllRun($allRun);
    } else {
      $allRun = '
            <div class="box">
                <div class="date">' . $runMile->dayMile . '</div>
                <div style="clear:both"></div>
                <div class="run">' . $runMile->rSm . ' ' . $runMile->unitRunMile . '</div>
            </div>';

    $allRuns[] = new AllRun($allRun);
    }
  }
}else{
  foreach ($runConverts as $runConvert) {
    if ($runConvert->runConvert > 0) {
      $allRun = '
            <div class="box" style="background-color:#f2f2f2;opacity: 0.8;color:#1a242f;font-weight:bolder;">
              <div class="date">' . $runConvert->d . '</div>
              <div style="clear:both"></div>
              <div class="run">' . $runConvert->runConvert . ' ' . $runConvert->un . '</div>
            </div>';
      $allRuns[] = new AllRun($allRun);
    } else {
      $allRun = '
            <div class="box">
              <div class="date">' . $runConvert->d . '</div>
              <div style="clear:both"></div>
              <div class="run">' . $runConvert->rSc . ' ' . $runConvert->unRunCon . '</div>
            </div>';
      $allRuns[] = new AllRun($allRun);
    }

  }
}
