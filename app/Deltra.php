<?php
namespace App;

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
	protected array $services = [];

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
		$services = [
			\App\Services\BlockStyleRegister::class,
			\App\Services\BlockStyleAssets::class
		];

		foreach ( $services as $service_class ) {
			$instance = new $service_class();

			if ( method_exists( $instance, 'register' ) ) {
				$instance->register();
			}

			$this->services[ $service_class ] = $instance;
		}
	}
}
