<?php
/**
  * @package Runner Application
  * @author Giuseppe Donadio <giuseppedonadio@gmail.com>
  * @version 0.1 2017/02/11
  * @link http://www.giuseppedonadio.com/
  * @license http://www.apache.org/licenses/LICENSE-2.0
  * @todo none
*/

/**
 *
 */
class RunMile
{
  public $rSm = "";
  public $dayMile = "";
  public $unitMile = "";
  public $unitRunMile = "";
  public $lengthMile = 0;

  function __construct($rSm,$dayMile,$lengthMile,$unitMile,$unitRunMile)
  {
    $this->rSm = $rSm;
    $this->dayMile = $dayMile;
    $this->lengthMile = $lengthMile;
    $this->unitMile = $unitMile;
    $this->unitRunMile = $unitRunMile;

  }
}

foreach ($runs as $run) {
  $rSm = $run->run;
  $dayMile = $run->day;
  $lm = $run->length;
  $unitMile = $run->unit;
  $unitRunMile = $run->unit;

  if ($lm == 0) {
    $lengthMile = "";
    $unitMile = "";
  }else{
    $lengthMile = $lm;
    $rSm = "";
    $unitRunMile = "";
  }

  $runMiles[] = new RunMile($rSm,$dayMile,$lengthMile,$unitMile,$unitRunMile);

}
