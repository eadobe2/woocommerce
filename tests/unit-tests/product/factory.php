<?php
/**
 * Products Factory Tests
 * @package WooCommerce\Tests\Product
 * @since 2.7.0
 */
class WC_Tests_Product_Factory extends WC_Unit_Test_Case {

	/**
	 * <Description>
	 *
	 * @since 2.7.0
	 */
	function test_get_product_type() {

	}

	/**
	 * <Description>
	 *
	 * @since 2.7.0
	 */
	function test_get_classname_from_product_type() {

	}

	/**
	 * <Description>
	 *
	 * @since 2.7.0
	 */
	function test_get_product() {
		$test_product = WC_Helper_Product::create_simple_product();
		error_log( print_r ( WC()->product_factory->get_product( $test_product->get_id ), 1 ) );
	}

}