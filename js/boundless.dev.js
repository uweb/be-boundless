//     Boundless.js 0.1
//     uw.edu/boundless

;(function () {
;// Baseline setup
// --------------

// Establish the root object `window`.
var root = this

// Create a safe reference to the BOUNDLESS object which will be used to establish the global UW object.
var  BOUNDLESS = function(obj)
{
    if ( obj instanceof BOUNDLESS ) return obj

    if ( ! this instanceof BOUNDLESS ) return new BOUNDLESS(obj)

    this._wrapped = obj
};

// Establish the global UW object `window.BOUNDLESS`
root.BOUNDLESS = BOUNDLESS


// Current version
BOUNDLESS.VERSION = '0.1'
;// List out the classes that each component searches for

// Initialize all components when the DOM is ready
BOUNDLESS.initialize = function( $ )
{
}

jQuery(document).ready( BOUNDLESS.initialize )

;BOUNDLESS.Map = new Backbone.View.extend({

});}).call(this)
