

/**
 * Strings Splitter wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
 ;(function ($) {
	'use strict';
	$.HSCore.components.HSImageSvg = {
		/**
		 *
		 *
		 * @var Object _baseConfig
		 */
		_baseConfig: {
		},

		/**
		 *
		 *
		 * @var jQuery pageCollection
		 */
		pageCollection: $(),

		/**
		 * Initialization of Strings Splitter wrapper.
		 *
		 * @param String selector (optional)
		 * @param Object config (optional)
		 *
		 * @return jQuery pageCollection - collection of initialized items.
		 */

		init: function (selector, config) {
			this.collection = selector && $(selector).length ? $(selector) : $();
			if (!$(selector).length) return;

			this.config = config && $.isPlainObject(config) ?
				$.extend({}, this._baseConfig, config) : this._baseConfig;

			this.config.itemSelector = selector;

			this.initImageSvg();

			return this.pageCollection;
		},

		initImageSvg: function () {
            this.collection.each(function(i, el){
                //Variables
                var $self = $(el);
                var imgID = $self.attr('id');
                var imgClass = $self.attr('class');
                var imgURL = $self.attr('src');
            
                jQuery.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');
            
                    // Add replaced image's ID to the new SVG
                    if(typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if(typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                    }
            
                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');
            
                    // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                    if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                    }
            
                    // Replace image with new SVG
                    $self.replaceWith($svg);
            
                }, 'xml');
            });
		}
	};
})(jQuery);
