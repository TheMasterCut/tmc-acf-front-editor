<?php
namespace tmc\acffe\src;

/**
 * @author jakubkuranda@gmail.com
 * Date: 25.06.2018
 * Time: 11:01
 */

use shellpress\v1_2_5\ShellPress;
use tmc\acffe\src\Components\FrontendTests;

class App extends ShellPress {

	/**
	 * Called automatically after core is ready.
	 *
	 * @return void
	 */
	protected function onSetUp() {

		//  ----------------------------------------
		//  Definition
		//  ----------------------------------------

		$this::s()->autoloading->addNamespace( 'tmc\acffe', dirname( $this::s()->getMainPluginFile() ) );

		//  ----------------------------------------
		//  Components
		//  ----------------------------------------

		new FrontendTests( $this );

	}
}