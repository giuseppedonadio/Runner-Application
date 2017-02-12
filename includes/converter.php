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
class Convert
{
  public $convert = 0;

  function __construct($convert)
  {
    $this->convert = $convert;
  }
}


$conv = $run->unit;
if ($conv == "Miles") {
  foreach ($totals as $total) {
    $convert = '<h4>Total ran: ' . $total->total . ' Miles';
  }
}else if ($conv == "Km"){
  foreach ($totals as $total) {
    $convertFormat = number_format((float)($total->total * 1.609344), 2, '.', '');
    $convert = '<h4>Total ran: ' . $convertFormat . ' Km';
  }
}

$converts[] = new Convert($convert);
