<?php
/**
 * Plugin Name:     RDC Business Hours
 * Plugin URI:      https://ranchodeluxe.dev
 * Description:     Sets business hours for use on frontend.
 * Author:          Rancho Deluxe Co.
 * Author URI:      https://ranchodeluxe.dev
 * Text Domain:     ranchodeluxeco-business-hours
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ranchodeluxeco_Business_Hours
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
use Cmixin\BusinessTime;

function open_hours_shortcode()
{
	  // set hours
	  $openingHours = BusinessTime::enable(Carbon::class, [
			'monday'    => ['09:00-17:30'],
			'tuesday'   => ['09:00-17:30'],
			'wednesday' => ['09:00-17:30'],
			'thursday'  => ['09:00-17:30'],
			'friday'    => ['09:00-17:30'],
			'saturday'  => ['09:00-16:00'],
			'sunday'    => [],
	  ]);

	  if (Carbon::isOpen()) {
	  	$closingTime = Carbon::nextClose()->isoFormat('LT');
	  	return "Yes!, We're open. Come by before " . $closingTime . "!";
	  } else {
	  	$openingTime = Carbon::nextOpen()->calendar();
	  	return "Sorry, we're closed! We'll be back " . $openingTime .".";
	  }

}
add_shortcode('store-hours-test', 'open_hours_shortcode');
