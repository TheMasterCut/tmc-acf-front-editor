<?php
namespace tmc\acffe\src\Components;

/**
 * @author jakubkuranda@gmail.com
 * Date: 25.06.2018
 * Time: 12:30
 */

use shellpress\v1_2_5\src\Shared\Components\IComponent;

class FrontendTests extends IComponent {

	/**
	 * Called on creation of component.
	 *
	 * @return void
	 */
	protected function onSetUp() {

		add_action( 'template_redirect', array( $this, '_a_setUpFrontEndHooks' ) );

	}

	//  ================================================================================
	//  ACTIONS
	//  ================================================================================

	public function _a_setUpFrontEndHooks() {

		global $wp_query;
		global $post;

		if(
			( $post && $post->post_name === 'acf-test-area' ) &&
			( $wp_query && $wp_query->is_main_query() )
		){

			add_filter( 'the_content', array( $this, '_f_replaceTheContent' ) );

		}

	}

	//  ================================================================================
	//  FILTERS
	//  ================================================================================

	/**
	 * Replaces default content with test examples.
	 * Called on the_content.
	 *
	 * @param string $html
	 *
	 * @return string
	 */
	public function _f_replaceTheContent() {

		ob_start();

		the_field( 'test1' );

		return ob_get_clean();

	}

}