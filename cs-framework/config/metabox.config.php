<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Custom Page Options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

        // begin: Top baground section
        array(
          'name'  => 'section_bag',
          'title' => 'Top Baground',
          'icon'  => 'fa fa-caret-right',
      
          // begin: fields
          'fields' => array(
      
            array(
              'id'    => 'section_top_bg',
              'type'  => 'upload',
              'title' => 'Upload Image',
              'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
            ),
            array(
              'id'    => 'section_tp_title',
              'type'  => 'text',
              'title' => 'Top Title',
              'default' => '1914 translation by H. Rackham',
            ),
            array(
              'id'    => 'gallery_1',
              'type'  => 'gallery',
              'title' => 'Gallery',
            ),
            
          ), // end: fields
        ), // end: C section

  // begin: Bellow  section
    array(
      'name'  => 'section_table_section',
      'title' => 'Text Section',
      'icon'  => 'fa fa-caret-right',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'bello_sat_title',
          'type'  => 'text',
          'title' => 'Section title',
          'default' => '1914 translation by H. Rackham',
          
        ),
        // end: a field

        array(
          'id'    => 'bello_table_descriptio',
          'type'  => 'wysiwyg',
          'title' => 'Description',
          'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ',
        ),
        
      ), // end: fields
    ), // end: a section
    
    
    
    
  
    // begin: a section
    array(
      'name'  => 'section_a',
      'title' => 'Section A',
      'icon'  => 'fa fa-caret-right',

      // begin: fields
      'fields' => array(

        // begin: a field
        array(
          'id'    => 'section_a_text',
          'type'  => 'text',
          'title' => 'Section title',
          'default' => '1914 translation by H. Rackham',
          
        ),
        // end: a field

        array(
          'id'    => 'section_a_textarea',
          'type'  => 'wysiwyg',
          'title' => 'Description',
          'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ',
        ),

        array(
          'id'    => 'section_a_upload',
          'type'  => 'upload',
          'title' => 'Upload Image',
          'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
        ),
        
      ), // end: fields
    ), // end: a section
    
    
    
        // begin: a section
    array(
      'name'  => 'section_b',
      'title' => 'Section B',
      'icon'  => 'fa fa-caret-right',

      // begin: fields
      'fields' => array(

        // begin: B field
        array(
          'id'    => 'section_b_text',
          'type'  => 'text',
          'title' => 'Section title',
          'default' => '1914 translation by H. Rackham',
        ),
        // end: a field

        array(
          'id'    => 'section_b_textarea',
          'type'  => 'wysiwyg',
          'title' => 'Description',
          'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ',
        ),

        array(
          'id'    => 'section_b_upload',
          'type'  => 'upload',
          'title' => 'Upload Image',
          'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
        ),
        
      ), // end: fields
    ), // end: B section


  // begin: C section
  array(
    'name'  => 'section_c',
    'title' => 'Section C',
    'icon'  => 'fa fa-caret-right',

    // begin: fields
    'fields' => array(

      // begin: a field
      array(
        'id'    => 'section_c_text',
        'type'  => 'text',
        'title' => 'Section title',
        'default' => '1914 translation by H. Rackham',
      ),
      // end: a field

      array(
        'id'    => 'section_c_textarea',
        'type'  => 'wysiwyg',
        'title' => 'Description',
        'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ',
      ),

      array(
        'id'    => 'section_c_upload',
        'type'  => 'upload',
        'title' => 'Upload Image',
        'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
      ),
      
    ), // end: fields
  ), // end: C section
  
  // begin: d section
  array(
    'name'  => 'section_d',
    'title' => 'Section D',
    'icon'  => 'fa fa-caret-right',

    // begin: fields
    'fields' => array(

      // begin: a field
      array(
        'id'    => 'section_d_text',
        'type'  => 'text',
        'title' => 'Section title',
        'default' => '1914 translation by H. Rackham',
      ),
      // end: a field

      array(
        'id'    => 'section_d_textarea',
        'type'  => 'wysiwyg',
        'title' => 'Description..',
        'default' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, ',
      ),

      array(
        'id'    => 'section_d_upload',
        'type'  => 'upload',
        'title' => 'Upload Image',
        'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
      ),
      
    ), // end: fields
  ), // end: D section
    // begin: E section
    array(
      'name'  => 'section_e',
      'title' => 'Section E',
      'icon'  => 'fa fa-caret-right',
  
      // begin: fields
      'fields' => array(
  
        // begin: a field
        array(
          'id'    => 'section_e_text',
          'type'  => 'text',
          'title' => 'Section title',
          'default' => '',
        ),
        // end: a field
  
        array(
          'id'    => 'section_e_textarea',
          'type'  => 'wysiwyg',
          'title' => 'Description',
          'default' => '',
        ),
  
        array(
          'id'    => 'section_e_upload',
          'type'  => 'upload',
          'title' => 'Upload Image',
          'default' => 'https://webspreed.com/wp-content/uploads/2017/12/respomsiveweb.png',
        ),
        
      ), // end: fields
    ), // end: E section

   

  ),
);

// -----------------------------------------
// Page Side Metabox Options               -
// -----------------------------------------
/*$options[]    = array(
  'id'        => '_custom_page_side_options',
  'title'     => 'Custom Page Side Options',
  'post_type' => 'page',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_3',
      'fields' => array(

        array(
          'id'        => 'section_3_image_select',
          'type'      => 'image_select',
          'options'   => array(
            'value-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'value-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'value-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
          'default'   => 'value-2',
        ),

        array(
          'id'            => 'section_3_text',
          'type'          => 'text',
          'attributes'    => array(
            'placeholder' => 'do stuff'
          )
        ),

        array(
          'id'      => 'section_3_switcher',
          'type'    => 'switcher',
          'label'   => 'Are you sure ?',
          'default' => true
        ),

      ),
    ),

  ),
);
*/
// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'post',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

        array(
          'id'    => 'section_4_text',
          'type'  => 'text',
          'title' => 'Text Field',
        ),

        array(
          'id'    => 'section_4_textarea',
          'type'  => 'textarea',
          'title' => 'Textarea Field',
        ),

        array(
          'id'    => 'section_4_upload',
          'type'  => 'upload',
          'title' => 'Upload Field',
        ),

        array(
          'id'    => 'section_4_switcher',
          'type'  => 'switcher',
          'title' => 'Switcher Field',
          'label' => 'Yes, Please do it.',
        ),

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
