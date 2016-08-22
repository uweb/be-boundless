// Baseline setup
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
