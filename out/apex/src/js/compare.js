/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

// Short-Handle für document.ready
$( function ()
{
    var oCompPlayground = $( '#comparePlayground' );

    // Wenn Compare-Seite
    if ( oCompPlayground.length > 0 )
    {
        $( '#compareLandscape' ).scroll(
            function( oEvent )
            {
                $( this ).toggleClass( 'shadowed', $( this ).scrollLeft() > 0 );
            }
        );
    }
} );