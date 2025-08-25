<?php
/**
 * Deltra Theme Main Class
 *
 * This class initializes the Deltra theme and registers its services.
 *
 * @package deltra
 */

/**
 * Deltra: The main class for the Deltra theme.
 *
 * This class is responsible for initializing the theme and registering its services.
 */
class Deltra {

	/**
	 * Holds the registered services for the Deltra theme.
	 *
	 * This array will contain instances of all services registered by the theme.
	 *
	 * @since Deltra 1.0
	 *
	 * @var array
	 */
	protected $services = array();

	/**
	 * Initializes the Deltra theme services.
	 *
	 * This constructor registers all necessary services for the theme.
	 *
	 * @since Deltra 1.0
	 */
	public function __construct() {
		$this->register_services();
	}

	/**
	 * Registers all services for the Deltra theme.
	 *
	 * @since Deltra 1.0
	 *
	 * @return void
	 */
	protected function register_services() {
		// Future services can be added here.
		$services = array(
			'Deltra_Block_Style_Register',
			'Deltra_Block_Style_Assets',
		);

		foreach ( $services as $service_class ) {
			$instance = new $service_class();

			if ( method_exists( $instance, 'register' ) ) {
				$instance->register();
			}

			$this->services[ $service_class ] = $instance;
		}
	}
}
