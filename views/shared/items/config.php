<?php



/* GeoNames API Customizations */

	/* Enter the WEB-ACCESSIBLE paths to the two necessary JS files,
	and your GeoNames API username (please don't use mine!) */
		$jeoQueryLoc = "/omeka/plugins/GeoBlacklightMetadata/js/jeoquery.js";
		$LiveQueryLoc = "/omeka/plugins/GeoBlacklightMetadata/js/jquery.livequery.min.js";
		$GeoNamesUserID = "majew030";

/* Slug Deriver Options */
	/* Automatically prepend slug with the slugified publisher name?
	   e.g.: WorldAdministrativeUnits --> ESRI_WorldAdministrativeUnits */
		$SlugPrependPublisher_b = false;



/* THE FOLLOWING FIVE VARIABLES ONLY APPLY FOR BROWSE.PHP REQUESTS: */
	/* Enable record production analytics for API requests handled by browse.php? */
		$log_b = true;

		/* Location of log for record analytics */
			$speedlog = "/var/www/html/logs/log.txt";

	/* E-mail the report in addition to saving to text? */
		$email_b = false;

		/* E-mail origin for analytic reports */
			$from_email = "me@example.com";

		/* E-mail destination for analytic reports */
			$to_email = "me@example.com";

?>