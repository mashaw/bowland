( function() {
    CKEDITOR.stylesSet.add( 'my_styles', [ // this is the styles set name you will call later
        { name: 'Teal Heading 2', element: 'h2', attributes: { 'class': 'teal' } }, 
        { name: 'Teal Text', element: 'span', attributes: { 'class': 'teal' } },
        { name: 'Unbold Heading', element: 'span', attributes: { 'class': 'unbold' } }
    ]);
} )();