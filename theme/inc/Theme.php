<?php
/**
 * LHPBPT\Theme class
 *
 * @package lhpbpt
 */

namespace WpMunich\lhpbpt;

/**
 * Main class for the theme.
 *
 * This class takes care of initializing components.
 */
class Theme {

	/**
	 * The i18n component.
	 *
	 * @var i18n\I18N
	 */
	protected $i18n;

	/**
	 * The Nav Menus component.
	 *
	 * @var Nav_Menus\Nav_Menus
	 */
	protected $nav_menus;

	/**
	 * Scripts component.
	 *
	 * @var Scripts\Scripts
	 */
	protected $scripts;

	/**
	 * Styles component.
	 *
	 * @var Styles\Styles
	 */
	protected $styles;

	/**
	 * Theme Supports component.
	 *
	 * @var Theme_Supports\Theme_Supports
	 */
	protected $theme_supports;

	/**
	 * Constructor.
	 *
	 * @param i18n\I18N                     $i18n I18N component.
	 * @param Nav_Menus\Nav_Menus           $nav_menus Nav_Menus component.
	 * @param Scripts\Scripts               $scripts Scripts component.
	 * @param Styles\Styles                 $styles Styles component.
	 * @param Theme_Supports\Theme_Supports $theme_supports Theme_Supports component.
	 */
	public function __construct(
		i18n\I18N $i18n,
		Nav_Menus\Nav_Menus $nav_menus,
		Scripts\Scripts $scripts,
		Styles\Styles $styles,
		Theme_Supports\Theme_Supports $theme_supports
	) {
		$this->i18n           = $i18n;
		$this->nav_menus      = $nav_menus;
		$this->scripts        = $scripts;
		$this->styles         = $styles;
		$this->theme_supports = $theme_supports;
	}

	/**
	 * Get the Nav Menus component.
	 *
	 * @return Nav_Menus\Nav_Menus Nav Menus component.
	 */
	public function nav_menus() {
		return $this->nav_menus;
	}

	/**
	 * Get the Scripts component.
	 *
	 * @return Scripts\Scripts Scripts component.
	 */
	public function scripts() {
		return $this->scripts;
	}

	/**
	 * Get the Styles component.
	 *
	 * @return Styles\Styles Styles component.
	 */
	public function styles() {
		return $this->styles;
	}
}
