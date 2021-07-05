<?php
/**
 * Brutally pasted together out of glue, string, and a few old bits of leather, this 'Nodd' skin is a repurposed variant of a
 * base skin called 'Mask' - the credits of which have been left below. The modifications have not been tracked, and things
 * may work funkily or not at all - though hopefully they work, full stop. Thanks to the makers of Mask!
 *
 *
 * Mask skin - created from the bones of monobook and nimbus
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Skins
 * @author Calimonius the Estrange
 * @authors Whoever wrote monobook
 * @date 2013
 */

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'Nodd' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Nodd'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for Nodd skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Nodd skin requires MediaWiki 1.25+' );
}
