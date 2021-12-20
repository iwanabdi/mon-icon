// Class definition

var KTCkeditorDocument = function () {
    // Private functions
    var demos = function () {
        DecoupledEditor
            .create( document.querySelector( '#kt_editorTemplate' ) )
            .then( editor => {
                const toolbarContainer = document.querySelector( '#kt_editorTemplate-toolbar' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTCkeditorDocument.init();
});