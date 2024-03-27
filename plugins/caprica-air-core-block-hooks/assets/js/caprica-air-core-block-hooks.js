// Below are all the custom hooks for all text type blocks
wp.domReady(function (){
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'test-style',
        label: 'Test Style',
    } );

    wp.blocks.registerBlockStyle( 'core/paragraph', {
        name: 'text-input',
        label: 'Input Box',
    } );

    wp.blocks.registerBlockStyle( 'core/preformatted', {
        name: 'message-box',
        label: 'Message Box',
    } );

    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'default-heading',
        label: 'Default Heading',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/list', {
        name: 'caprica-list',
        label: 'Caprica List',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/preformatted', {
        name: 'caprica-preformat',
        label: 'Caprica Preformatted',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/pullquote', {
        name: 'caprica-pullquote',
        label: 'Caprica Pullquote',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/table', {
        name: 'caprica-table',
        label: 'Caprica Table',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/verse', {
        name: 'caprica-verse',
        label: 'Caprica Verse',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/footnotes', {
        name: 'caprica-footnotes',
        label: 'Caprica Footnotes',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/code', {
        name: 'caprica-code',
        label: 'Caprica Code',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/details', {
        name: 'caprica-details',
        label: 'Caprica Details',
        isDefault: true
    } );
    
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'caprica-quote',
        label: 'Caprica Quote',
        isDefault: true
    } );

    wp.blocks.registerBlockStyle( 'core/video', {
        name: 'video-polygotal',
        label: 'Polygotal',
    } );

    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'heading-polygotal',
        label: 'Polygotal',
    } );

    wp.blocks.registerBlockStyle( 'woocommerce/product-button', {
        name: 'capricaAir-product-button',
        label: 'Caprica Air',
    } );
})

