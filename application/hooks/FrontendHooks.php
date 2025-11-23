<?php
class FrontendHooks {
	
	function __construct() {
        $CI = &get_instance();

    }

	public function cleantemplate() {
		$CI = &get_instance();
		$CI->output->enable_profiler(FALSE);

		$this->output = &$CI->output;

		$output = $this->output->get_output();

		$SIDENAV = $CI->parser->parse("template/sidenava.php", array(), true);
		$output = str_replace('{SIDENAV}', $SIDENAV, $output);
		
		$TOPBAR = $CI->parser->parse("template/topbara.php", array(), true);
		$output = str_replace('{TOPBAR}', $TOPBAR, $output);

		$FOOTER = $CI->parser->parse("template/footer.php", array(), true);
		$output = str_replace('{FOOTER}', $FOOTER, $output);

		

		// cleaning...
		$output = str_replace('{SLIDER}', '', $output);
		$output = str_replace('{JS_HEADER_SCRIPTS}', '', $output);
		$output = str_replace('{TITLE}', APP_NAME, $output);
		$output = str_replace('{CONTENT}', '', $output);
		$output = str_replace('{ERROR_MSG}', '', $output);


		$clasa = $CI->router->fetch_class();
		$metoda = $CI->router->fetch_method();

		$bread = "";

		$output = str_replace('{BC}', $bread, $output);


		$site_url = SITE_URL;
		$base_url = BASE_URL;
		$output = str_replace('{BASE_URL}', $base_url, $output);
		$output = str_replace('{SITE_URL}', $site_url, $output);
		$output = str_replace('{APP_NAME}', APP_NAME, $output);

		

		$this->output->set_output($output);
	}
}
