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

if(isset($_POST['convert']))
{
    if(isset($_POST['MtoK']) && $_POST['MtoK']=="yes")
    {
          foreach ($totals as $total) {
                $convertFormat = number_format((float)($total->total * 1.609344), 2, '.', '');
                $convert = '
                            <h4>Total ran: ' . $convertFormat . ' Km</h4>
                            <form action="' . THIS_PAGE . '" method="post">
                						<p><input type="radio" name="MtoK" value="no"/> Miles
                							 <input type="radio" name="MtoK" value="yes" checked /> Kilometer</p>
                							 <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
                						</form>';
          }

    }else{
          foreach ($totals as $total) {
                $convert = '
                            <h4>Total ran: ' . $total->total . ' Miles</h4>
                            <form action="' . THIS_PAGE . '" method="post">
                            <p><input type="radio" name="MtoK" value="no" checked /> Miles
                               <input type="radio" name="MtoK" value="yes"/> Kilometer</p>
                               <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
                            </form>';
          }


    }
}else{
    foreach ($totals as $total) {
          $convert = '
                      <h4>Total ran: ' . $total->total . ' Miles</h4>
                      <form action="' . THIS_PAGE . '" method="post">
              				<p><input type="radio" name="MtoK" value="no" checked /> Miles
              					 <input type="radio" name="MtoK" value="yes"/> Kilometer</p>
              					 <input type="submit" name="convert" value="Convert"  style="margin-bottom: 20px;" class="btn btn-primary"/>
              				</form>';
    }
}


$converts[] = new Convert($convert);
