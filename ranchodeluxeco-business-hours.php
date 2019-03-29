<?php
/**
 * Plugin Name:     RDC Business Hours
 * Plugin URI:      https://ranchodeluxe.dev
 * Description:     Sets business hours for use on frontend.
 * Author:          Rancho Deluxe Co.
 * Author URI:      https://ranchodeluxe.dev
 * Text Domain:     ranchodeluxeco-business-hours
 * GitHub Repository: https://github.com/ranchodeluxemedia/ranchodeluxeco-business-hours
 * GitHub Plugin URI: https://github.com/ranchodeluxemedia/ranchodeluxeco-business-hours
 * Domain Path:     /languages
 * Version:         0.1.2
 *
 * @package         Ranchodeluxeco_Business_Hours
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
use Cmixin\BusinessTime;

function open_hours_shortcode()
{
	  // set timezone
	  date_default_timezone_set('America/Chicago');

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
add_shortcode('rdc-store-hours', 'open_hours_shortcode');



// Add year shrtcode here so I don't have to install a child-theme.
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');



// github updater overide dot org updates
add_filter( 'github_updater_override_dot_org', function() {
    return [
        'ranchodeluxeco-business-hours/ranchodeluxeco-business-hours.php' //plugin format
    ];
});

// Disables WP-Cron for API calls
add_filter( 'github_updater_disable_wpcron', '__return_true' );


// hook into API::exit_no_update() so that the user can always check for a new update
add_filter( 'ghu_always_fetch_update', '__return_true' );
