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
class Total
{
  public $total = 0;

  function __construct($total)
  {
    $this->total = $total;
  }
}

$tot = 0;
foreach ($runs as $run) {
  $tot += $run->length;
}

$totals[] = new Total($tot);
