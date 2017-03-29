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

  public $runConvert = "";
  public $d = "";



  function __construct($runConvert,$d)
  {
    $this->runConvert = $runConvert;
    $this->d = $d;
  }
}


  foreach ($runs as $run) {

    $d = $run->day;

    $runConvert = number_format((float)($run->length  * 1.609344), 2, '.', '');

    $runConverts[] = new RunConvert($runConvert,$d);
  }
