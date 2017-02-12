<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

class RunConvert
{
  public $rSc = "";
  public $runConvert = "";
  public $d = "";
  public $un = "Km";
  public $unRunCon = "Km";



  function __construct($rSc,$d,$runConvert,$un,$unRunCon)
  {
    $this->rSc = $rSc;
    $this->d = $d;
    $this->runConvert = $runConvert;
    $this->un = $un;
    $this->unRunCon = $unRunCon;
  }
}


  foreach ($runs as $run) {
    $rSc = ($run->run * 1.609344);
    $d = $run->day;
    $rc = ($run->length  * 1.609344);

    if ($rc == 0) {
      $runConvert = "";
      $un = "";
    }else{
      $runConvert = $rc;
      $rSc = "";
      $unRunCon = "";
    }

    $runConverts[] = new RunConvert($rSc,$d,$runConvert,$un,$unRunCon);
  }
