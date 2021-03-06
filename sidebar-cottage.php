	<div class="cottage-selector">
		<h4>Select a Cottage</h4>
		<ul>
      <li>
        <a class="nant" href="<?php bloginfo('url'); ?>unique-holiday-cottages/nant-y-plas/">
          <span class="bed-count">2</span>
          Nant Y Plas
        </a>
      </li>
      <li>
        <a class="cerbyd" href="<?php bloginfo('url'); ?>unique-holiday-cottages/lloc-llo/">
          <span class="bed-count">4</span>
          Lloc Llo
        </a>
      </li>
			<li>
        <a class="bywthyn" href="<?php bloginfo('url'); ?>unique-holiday-cottages/bwthyn-y-saer/">
          <span class="bed-count">4</span>
          Bwthyn Y Saer
        </a>
      </li>
			<li>
        <a class="wennol" href="<?php bloginfo('url'); ?>unique-holiday-cottages/hafod-y-wennol/">
          <span class="bed-count">4</span>
          Hafod Y Wennol
        </a>
      </li>
			<li>
        <a class="stabl" href="<?php bloginfo('url'); ?>unique-holiday-cottages/y-stabl-self-catering-cottage/">
          <span class="bed-count">4</span>
          Y Stabl
        </a>
      </li>
			<li>
        <a class="cerbyd" href="<?php bloginfo('url'); ?>unique-holiday-cottages/ty-cerbyd/">
          <span class="bed-count">4</span>
          Ty Cerbyd
        </a>
      </li>
      <li>
        <a class="ysgol" href="<?php bloginfo('url'); ?>unique-holiday-cottages/yr-hen-ysgol/">
          <span class="bed-count">4</span>
          Yr Hen Ysgol
        </a>
      </li>
      <li>
        <a class="cerbyd" href="<?php bloginfo('url'); ?>unique-holiday-cottages/ty-gambo/">
          <span class="bed-count">6</span>
          Ty Gambo
        </a>
      </li>
      <li>
        <a class="bryn" href="<?php bloginfo('url'); ?>unique-holiday-cottages/bryn-hir/">
          <span class="bed-count">8</span>
          Bryn Hir
        </a>
      </li>
      <li>
        <a class="cilybebyll" href="<?php bloginfo('url'); ?>unique-holiday-cottages/">
          <span class="bed-count">18</span>
          Plas Cilybebyll
        </a>
      </li>
		</ul>
	</div>

	<?php // Display contents of custom field http://wp-types.com/documentation/functions/#WYSIWYG ?>
	<div class="cottage-panel">
  <?php  echo(types_render_field("cottage-sidebar", array())); ?>
	</div>

	<?php wp_reset_query(); ?>

	<?php if ( is_page( 444 ) ) {	// bwythyn ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61053" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61053']); return false;">
	<?php } else if ( is_page( 913 ) ) {	// hafod ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61055" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61055']); return false;">
	<?php } else if ( is_page( 2380 ) ) {	// y stabl ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61059" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61059']); return false;">
	<?php } else if ( is_page( 2382 ) ) {	// ty cerbyd ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61769" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61769']); return false;">
	<?php } else if ( is_page( 4006 ) ) {	// ty gambo ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=510174" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61769']); return false;">
	<?php } else if ( is_page( 4003 ) ) {	// lloc llo ?>
		<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=510170" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637&cottageID=61769']); return false;">
	<?php	} else { ?>
	<a href="https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637']); return false;">
	<?php } ?>
		<div class="cta button-booknow">
			<span>book now</span><br>
			or check availability
		</div>
	</a>

  <?php // Trip Advisor Widgets ?>
	<div id="TA_cdsratingsonlynarrow229" class="TA_widget TA_cdsratingsonlynarrow">
    <ul id="BExcRynbB95P" class="TA_links 5scDi4OEy7x">
      <li id="Ds6Md8TgC7" class="tv7qA9G">
        <a id="CDSLOCINNER" target="_blank" href="http://www.tripadvisor.co.uk/Hotel_Review-g1644097-d2056930-Reviews-Swansea_Valley_Holiday_Cottages-Pontardawe_Vale_of_Glamorgan_Southern_Wales_Wales.html" onclick="ta.cds.handleTALink($cdsConfig.getMcid()); return true;">Swansea Valley Holiday Cottages</a>
      </li>
    </ul>
  </div>
  <script src="http://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=229&amp;locationId=2056930&amp;lang=en_UK&amp;border=false&amp;shadow=false&amp;backgroundColor=white"></script>

	<div class="badges no-border">
		<a href="http://www.tourismswanseabay.co.uk/"><img src="<?php bloginfo('template_url'); ?>/img/logos/sbt-winner-eng.png" alt="Swansea Bay Tourism Award - 2017 Winner"></a>
    <a title="Visit Wales 4 and 5 Star Rating" href="http://www.visitwales.com"><img src="<?php bloginfo('template_url'); ?>/img/logos/Visit Wales 4st-5st SELF CATERING.png" alt="Visit Wales"></a>
    <img src="<?php bloginfo('template_url'); ?>/img/logos/logo-wifi.png" alt="Free WiFi in all our cottages">
	</div>
