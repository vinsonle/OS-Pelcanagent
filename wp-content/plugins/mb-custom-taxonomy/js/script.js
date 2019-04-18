/* global jQuery, angular, MBTaxonomyLabels, hljs */

(function ( $, angular, hljs ) {
	'use strict';

	angular.module( 'mbTaxonomy', [] ).controller( 'TaxonomyController', [
		'$scope', function ( $scope ) {
			// Initialize labels
			$scope.labels = {};

			/**
			 * Helper function to convert string to slug
			 * @param str
			 * @return string
			 */
			function stringToSlug( str ) {
				// Trim the string
				str = str.replace( /^\s+|\s+$/g, '' );
				str = str.toLowerCase();

				// Remove accents
				var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;",
					to = "aaaaeeeeiiiioooouuuunc------",
					i, l;

				for ( i = 0, l = from.length; i < l; i ++ ) {
					str = str.replace( new RegExp( from.charAt( i ), 'g' ), to.charAt( i ) );
				}

				str = str.replace( /[^a-z0-9 -]/g, '' ) // remove invalid chars
				          .replace( /\s+/g, '-' ) // collapse whitespace and replace by -
				          .replace( /-+/g, '-' ); // collapse dashes

				return str;
			}

			// Update labels and slug when plural and singular name are updated
			$scope.updateLabels = function () {
				var params = [
						'menu_name',
						'all_items',
						'edit_item',
						'view_item',
						'update_item',
						'add_new_item',
						'new_item_name',
						'parent_item',
						'parent_item_colon',
						'search_items',
						'popular_items',
						'separate_items_with_commas',
						'add_or_remove_items',
						'choose_from_most_used',
						'not_found'
					],
					i = params.length;
				for ( ; i --; ) {
					$scope.labels[params[i]] = MBTaxonomyLabels[params[i]].replace( '%name%', $scope.labels.name ).replace( '%singular_name%', $scope.labels.singular_name );
				}

				// Update slug
				$scope.taxonomy = stringToSlug( $scope.labels.singular_name );
			};
		}
	] );

	// Bootstrap AngularJS app
	angular.element( document ).ready( function () {
		angular.bootstrap( document.getElementById( 'wpbody-content' ), ['mbTaxonomy'] );
	} );

	/**
	 * Toggle Label and Advanced Settings
	 * @return void
	 */
	function toggleAdvancedSettings() {
		var $label = $( '#mb-ct-label-settings' ),
			$advanced = $( '#mb-ct-advanced-settings' );
		$label.hide();
		$advanced.hide();
		$( '#btn-toggle-advanced' ).on( 'click', function () {
			$label.toggle();
			$advanced.toggle();
		} );
	}

	function copyToClipboard() {
		var icon = '<svg class="mb-icon--copy" aria-hidden="true" role="img"><use href="#mb-icon-copy" xlink:href="#icon-copy"></use></svg> ',
			clipboard = new Clipboard( '.mb-button--copy', {
				target: function ( trigger ) {
					return trigger.nextElementSibling;
				}
			} );
		clipboard.on( 'success', function ( e ) {
			e.clearSelection();
			e.trigger.innerHTML = icon + MBTaxonomyLabels.copied;
			setTimeout( function () {
				e.trigger.innerHTML = icon + MBTaxonomyLabels.copy;
			}, 3000 );
		} );
		clipboard.on( 'error', function () {
			alert( MBTaxonomyLabels.manualCopy );
		} );

	}

	// Run when document is ready
	$( function () {
		toggleAdvancedSettings();
		copyToClipboard();
	} );
	hljs.initHighlightingOnLoad();
})( jQuery, angular, hljs );
