<?php

require_once EDD_Checkout_Styler_DIR . 'includes/class-edd-customizer.php';

add_action( 'after_setup_theme', 'edd_checkout_styler_register_customizer' );
function edd_checkout_styler_register_customizer() {
	EDD_Checkout_Styler_Customizer::add_panel(
		array(
			'eddcs_style'	=> array(
				'title'	=> __( 'Checkout Styler for EDD', 'edd_checkout_styler' ),
				'priority'	=> 500,
				'sections'	=> array(
					'eddcs_container_style'	=> array(
						'title'			=> __( 'Container', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_container_width' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Width (%)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'               => 5
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_wrap',
									'property'		=> 'max-width',
									'unit'			=> '%'
								)
		                    ),
							'eddcs_container_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_wrap',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_container_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => '',
		                                'bottom'    => '',
		                                'left'      => '',
		                                'right'     => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top' => array(
											'selector'      => 'div#edd_checkout_wrap',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom' => array(
											'selector'      => 'div#edd_checkout_wrap',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left' => array(
											'selector'      => 'div#edd_checkout_wrap',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right' => array(
											'selector'      => 'div#edd_checkout_wrap',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										),
									)
								)
		                    ),
							'eddcs_container_border_width' => array(
		                        'setting'    => array(
		                            'default' 		=> '',
									'transport'    	=> 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_wrap',
									'property'		=> 'border-width',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_container_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'			=> 'css',
									'selector'      => 'div#edd_checkout_wrap',
									'property'      => 'border-color',
								)
		                    ),
							'eddcs_container_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_wrap',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
						),
					),
					'eddcs_table_style'	=> array(
						'title'			=> __( 'Cart Table', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_table_header_bg' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Header Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_table_header_text' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Header Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'      => 'color',
								)
		                    ),
							'eddcs_table_header_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_header_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'			=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'		=> 'text-transform'
								)
							),
							'eddcs_table_header_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_header_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'left',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Header Alignment', 'edd_checkout_styler' ),
									'choices'		=> array(
										'left'			=> __( 'Left', 'edd_checkout_styler' ),
										'center'		=> __( 'Center', 'edd_checkout_styler' ),
										'right'			=> __( 'Right', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'		=> 'text-align'
								)
							),
							'eddcs_table_header_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    => '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Header Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' ),
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'padding-top',
											'unit'			=> 'px',
										),
										'bottom'	=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px',
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'padding-left',
											'unit'			=> 'px',
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'padding-right',
											'unit'			=> 'px',
										),
									),
								),
		                    ),
							'eddcs_table_header_border_width' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'		=> '',
		                                'bottom'	=> '',
		                                'left'		=> '',
		                                'right'		=> ''
		                            ),
	                            	'transport'		=> 'postMessage'
		                        ),
		                        'control'    => array(
									'type'          => 'ib-multitext',
		                            'label'         => __( 'Header Border Width (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'border-top-width',
											'unit'			=> 'px'
										),
										'bottom'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'border-bottom-width',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'border-left-width',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
											'property'		=> 'border-right-width',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_table_header_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Header Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_header_row th',
									'property'		=> 'border-color'
								)
		                    ),
							'eddcs_table_data_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_table_data_odd_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Data Odd Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item:nth-of-type(odd) td',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_table_data_odd_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Data Odd Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item:nth-of-type(odd) td',
									'property'      => 'color',
								)
		                    ),
							'eddcs_table_data_even_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Data Even Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item:nth-of-type(even) td',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_table_data_even_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Data Even Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item:nth-of-type(even) td',
									'property'      => 'color',
								)
		                    ),
							'eddcs_table_data_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Data Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_data_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Data Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'			=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
									'property'		=> 'text-transform'
								)
							),
							'eddcs_table_data_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_data_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'left',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Data Alignment', 'edd_checkout_styler' ),
									'choices'		=> array(
										'left'			=> __( 'Left', 'edd_checkout_styler' ),
										'center'		=> __( 'Center', 'edd_checkout_styler' ),
										'right'			=> __( 'Right', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
									'property'		=> 'text-align'
								)
							),
							'eddcs_table_data_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    => '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Data Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' ),
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'padding-top',
											'unit'			=> 'px',
										),
										'bottom'	=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px',
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'padding-left',
											'unit'			=> 'px',
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'padding-right',
											'unit'			=> 'px',
										),
									),
								),
		                    ),
							'eddcs_table_data_border_width' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    	=> '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
									'type'          => 'ib-multitext',
		                            'label'         => __( 'Data Border Width (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' ),
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'border-top-width',
											'unit'			=> 'px',
										),
										'bottom'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'border-bottom-width',
											'unit'			=> 'px',
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'border-left-width',
											'unit'			=> 'px',
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
											'property'		=> 'border-right-width',
											'unit'			=> 'px',
										)
									)
								)
		                    ),
							'eddcs_table_data_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Data Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_item td',
									'property'		=> 'border-color'
								)
		                    ),
							'eddcs_table_footer_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_table_footer_bg' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Footer Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_table_footer_text' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Footer Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'      => 'color',
								)
		                    ),
							'eddcs_table_footer_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Footer Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_footer_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Footer Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'			=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'		=> 'text-transform'
								)
							),
							'eddcs_table_footer_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Footer Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_table_footer_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'right',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Footer Alignment', 'edd_checkout_styler' ),
									'choices'		=> array(
										'left'			=> __( 'Left', 'edd_checkout_styler' ),
										'center'		=> __( 'Center', 'edd_checkout_styler' ),
										'right'			=> __( 'Right', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'		=> 'text-align'
								)
							),
							'eddcs_table_footer_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    => '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Footer Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom'	=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_table_footer_border_width' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    	=> '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
									'type'          => 'ib-multitext',
		                            'label'         => __( 'Footer Border Width (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'border-top-width',
											'unit'			=> 'px'
										),
										'bottom'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'border-bottom-width',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'border-left-width',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
											'property'		=> 'border-right-width',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_table_footer_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Footer Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'table#edd_checkout_cart .edd_cart_footer_row th',
									'property'		=> 'border-color'
								)
		                    ),
						)
					),
					'eddcs_form_style'	=> array(
						'title'			=> __( 'Form', 'edd_checkout_styler' ),
						'description'	=> __( 'Customize forms text color, background color, add a background image.', 'edd_checkout_styler' ),
						'fields'            => array(
							'eddcs_form_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap fieldset',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_form_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => '',
		                                'bottom'    => '',
		                                'left'      => '',
		                                'right'     => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top' => array(
											'selector'      => 'div#edd_checkout_form_wrap fieldset',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom' => array(
											'selector'      => 'div#edd_checkout_form_wrap fieldset',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left' => array(
											'selector'      => 'div#edd_checkout_form_wrap fieldset',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right' => array(
											'selector'      => 'div#edd_checkout_form_wrap fieldset',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										),
									)
								)
		                    ),
							'eddcs_form_border_width' => array(
		                        'setting'    => array(
		                            'default' 		=> '',
									'transport'    	=> 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap fieldset',
									'property'		=> 'border-width',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_form_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'			=> 'css',
									'selector'      => 'div#edd_checkout_form_wrap fieldset',
									'property'      => 'border-color',
								)
		                    ),
							'eddcs_form_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap fieldset',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
						)
					),
					'eddcs_form_input_style'	=> array(
						'title'	=> __( 'Inputs', 'edd_checkout_styler' ),
						'description'	=> __( 'Style the input fields of a form by adding width, colors, border, padding and margins.', 'edd_checkout_styler' ),
						'fields'	=> array(
							'eddcs_input_width'      => array(
                                'setting'    => array(
                                    'default' => 'no',
									'transport'    => 'postMessage'
                                ),
                                'control'    => array(
                                    'type'              => 'radio',
                                    'label'             => __( 'Full Width?', 'edd_checkout_styler' ),
                                    'choices'           => array(
                                        '100%'          => __( 'Yes', 'edd_checkout_styler' ),
                                        'no'        => __( 'No', 'edd_checkout_styler' )
                                    ),
                                ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'width'
								)
                            ),
							'eddcs_input_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'color',
								)
		                    ),
							'eddcs_input_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'background-color',
								)
		                    ),
							'eddcs_inputs_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    => '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_input_margin' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Margin (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'               => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap fieldset p',
									'property'		=> 'margin-bottom',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_input_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_input_border_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_input_border_width' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => '',
		                                'bottom'    	=> '',
		                                'left'        => '',
		                                'right'        => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
									'type'          => 'ib-multitext',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'border-top-width',
											'unit'			=> 'px'
										),
										'bottom'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'border-bottom-width',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'border-left-width',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
											'property'		=> 'border-right-width',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_input_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'border-color',
								)
		                    ),
							'eddcs_input_focus_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Focus Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input:focus',
									'property'		=> 'border-color',
								)
		                    ),
							'eddcs_input_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_input_placeholder_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_input_placeholder'      => array(
                                'setting'    => array(
                                    'default' => 'no',
									'transport'    => 'postMessage'
                                ),
                                'control'    => array(
                                    'type'              => 'select',
                                    'label'             => __( 'Hide Placeholder?', 'edd_checkout_styler' ),
                                    'choices'           => array(
                                        'yes'          => __( 'Yes', 'edd_checkout_styler' ),
                                        'no'        => __( 'No', 'edd_checkout_styler' )
                                    ),
                                ),
								'toggle'		=> array(
									'no'	=> array( 'eddcs_input_placeholder_color' )
								)
                            ),
							'eddcs_input_placeholder_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Placeholder Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap input.edd-input::-webkit-input-placeholder',
									'property'		=> 'color',
								)
		                    ),
							'eddcs_input_description_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_input_description'      => array(
                                'setting'    => array(
                                    'default' => 'no',
									'transport'    => 'postMessage'
                                ),
                                'control'    => array(
                                    'type'              => 'select',
                                    'label'             => __( 'Hide Description?', 'edd_checkout_styler' ),
                                    'choices'           => array(
                                        'yes'          => __( 'Yes', 'edd_checkout_styler' ),
                                        'no'        => __( 'No', 'edd_checkout_styler' )
                                    ),
                                ),
								'toggle'		=> array(
									'no'	=> array( 'eddcs_input_desc_font_size', 'eddcs_input_desc_color' )
								)
                            ),
							'eddcs_input_desc_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Description Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap span.edd-description',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_input_desc_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Description Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap span.edd-description',
									'property'		=> 'color',
								)
		                    ),
						)
					),
					'eddcs_form_button_style'	=> array(
						'title'	=> __( 'Button', 'edd_checkout_styler' ),
						'description'	=> __( 'Customize the form button with colors, border, even change the hover state colors.', 'edd_checkout_styler' ),
						'fields'	=> array(
							'eddcs_button_width'      => array(
                                'setting'    => array(
                                    'default' => 'auto',
									'transport'    => 'postMessage'
                                ),
                                'control'    => array(
                                    'type'          => 'radio',
                                    'label'         => __( 'Full Width?', 'edd_checkout_styler' ),
                                    'choices'		=> array(
                                        '100%'          => __( 'Yes', 'edd_checkout_styler' ),
                                        'auto'        	=> __( 'No', 'edd_checkout_styler' )
                                    ),
                                ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'width'
								),
								'toggle'		=> array(
									'auto'	=> array( 'eddcs_button_alignment' )
								)
                            ),
							'eddcs_button_alignment' => array(
		                        'setting'    => array(
		                            'default' => 'left',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Alignment', 'edd_checkout_styler' ),
									'choices'		=> array(
										'left'		=> __( 'Left', 'edd_checkout_styler' ),
										'center'		=> __( 'Center', 'edd_checkout_styler' ),
										'right'		=> __( 'Right', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_purchase_submit',
									'property'		=> 'text-align'
								)
							),
							'eddcs_button_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'		=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'text-transform'
								)
							),
							'eddcs_button_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_button_font_size' => array(
								'setting'    => array(
									'default' => '',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
									'transport'    => 'postMessage'
								),
								'control'    => array(
									'type'          => 'ib-slider',
									'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
										'min'                => 0,
										'max'                => 100,
										'step'                 => 1
									),
								),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
							),
							'eddcs_button_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'color',
								)
		                    ),
							'eddcs_button_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'background-color',
								)
		                    ),
							'eddcs_button_hover_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Hover Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit:hover',
									'property'		=> 'color',
								)
		                    ),
							'eddcs_button_bg_hover_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Hover Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit:hover',
									'property'		=> 'background-color',
								)
		                    ),
							'eddcs_button_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'        => 10,
		                                'bottom'    => 10,
		                                'left'        => 10,
		                                'right'        => 10
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom'	=> array(
											'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right'		=> array(
											'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										)
									)
								)
		                    ),
							'eddcs_button_border_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_button_border_width' => array(
		                        'setting'    => array(
		                            'default' => 0,
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'border-width',
									'unit'			=> 'px',
								),
		                    ),
							'eddcs_button_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'border-color',
								),
		                    ),
							'eddcs_button_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap .edd-submit',
									'property'		=> 'border-radius',
									'unit'			=> 'px',
								),
		                    ),
						),
					),
					'eddcs_form_title_style'	=> array(
						'title'	=> __( 'Title', 'edd_checkout_styler' ),
						'description'	=> __( 'Style the title of a form by adding color, font size and alignment.', 'edd_checkout_styler' ),
						'fields'	=> array(
							'eddcs_title_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap legend',
									'property'		=> 'color',
								),
		                    ),
							'eddcs_title_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap legend',
									'property'		=> 'font-size',
									'unit'			=> 'px',
								)
		                    ),
							'eddcs_title_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'		=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' ),
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap legend',
									'property'		=> 'text-transform',
								),
							),
							'eddcs_title_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap legend',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
						)
					),
					'eddcs_form_label_style'	=> array(
						'title'	=> __( 'Labels', 'edd_checkout_styler' ),
						'description'	=> __( 'Style the labels of a form by adding color, font size, text transform and letter spacing.', 'edd_checkout_styler' ),
						'fields'	=> array(
							'eddcs_label_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap label',
									'property'		=> 'color'
								)
		                    ),
							'eddcs_label_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap label',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_label_text_transform' => array(
		                        'setting'    => array(
		                            'default' => 'none',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'select',
		                            'label'         => __( 'Text Transform', 'edd_checkout_styler' ),
									'choices'		=> array(
										'none'		=> __( 'None', 'edd_checkout_styler' ),
										'lowercase'		=> __( 'lowercase', 'edd_checkout_styler' ),
										'uppercase'		=> __( 'UPPERCASE', 'edd_checkout_styler' )
									),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap label',
									'property'		=> 'text-transform'
								)
							),
							'eddcs_label_letter_spacing' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Letter Spacing (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => -10,
		                                'max'                => 10,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap label',
									'property'		=> 'letter-spacing',
									'unit'			=> 'px'
								)
		                    ),
						)
					),
					'eddcs_total_style'	=> array(
						'title'			=> __( 'Total', 'edd_checkout_styler' ),
						'description'	=> __( 'Customize the total section with colors, border, padding fields.', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_total_bg' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_total_text_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'      => 'color',
								)
		                    ),
							'eddcs_total_font_size' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'		=> 'font-size',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_total_border_separator' => array(
		                        'setting'    => array(
		                            'default' => '',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-line',
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
		                            'label'         => '',
		                        ),
							),
							'eddcs_total_border_width' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'		=> 'border-width',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_total_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'		=> 'border-color'
								)
		                    ),
							'eddcs_total_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd_final_total_wrap',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
						)
					),
					'eddcs_login_style'	=> array(
						'title'			=> __( 'Login/Register/Discount Message', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_login_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_login_text_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
									'property'      => 'color',
								)
		                    ),
							'eddcs_login_link_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Link Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap a, div#edd_checkout_form_wrap #edd-new-account-wrap a, div#edd_checkout_form_wrap #edd_show_discount a',
									'property'      => 'color',
								)
		                    ),
							'eddcs_login_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => '',
		                                'bottom'    => '',
		                                'left'      => '',
		                                'right'     => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										),
									)
								)
		                    ),
							'eddcs_login_border_width' => array(
		                        'setting'    => array(
		                            'default' 		=> '',
									'transport'    	=> 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
									'property'		=> 'border-width',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_login_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'			=> 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
									'property'      => 'border-color',
								)
		                    ),
							'eddcs_login_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-login-account-wrap, div#edd_checkout_form_wrap #edd-new-account-wrap, div#edd_checkout_form_wrap #edd_show_discount',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
						),
					),
					'eddcs_discount_style'	=> array(
						'title'			=> __( 'Discount Form', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_discount_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
									'property'      => 'background-color',
								)
		                    ),
							'eddcs_discount_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => '',
		                                'bottom'    => '',
		                                'left'      => '',
		                                'right'     => ''
		                            ),
	                            	'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'top'            => __( 'Top', 'edd_checkout_styler' ),
		                                'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
		                                'left'           => __( 'Left', 'edd_checkout_styler' ),
		                                'right'          => __( 'Right', 'edd_checkout_styler' )
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'rules'			=> array(
										'top' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
											'property'		=> 'padding-top',
											'unit'			=> 'px'
										),
										'bottom' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px'
										),
										'left' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
											'property'		=> 'padding-left',
											'unit'			=> 'px'
										),
										'right' => array(
											'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
											'property'		=> 'padding-right',
											'unit'			=> 'px'
										),
									)
								)
		                    ),
							'eddcs_discount_border_width' => array(
		                        'setting'    => array(
		                            'default' 		=> '',
									'transport'    	=> 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Width (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
									'property'		=> 'border-width',
									'unit'			=> 'px'
								)
		                    ),
							'eddcs_discount_border_color' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Border Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'			=> 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
									'property'      => 'border-color',
								)
		                    ),
							'eddcs_discount_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage'
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div#edd_checkout_form_wrap #edd-discount-code-wrap',
									'property'		=> 'border-radius',
									'unit'			=> 'px'
								)
		                    ),
						),
					),
					'eddcs_form_errors_style'	=> array(
						'title'			=> __( 'Errors', 'edd_checkout_styler' ),
						'description'	=> __( 'Customize the form errors with colors, border, even change the style of error fields.', 'edd_checkout_styler' ),
						'fields'		=> array(
							'eddcs_error_bg_color' => array(
		                        'setting'    => array(
		                            'default' => '#f2dede',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Background Color', 'edd_checkout_styler' ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div.edd-alert-error',
									'property'		=> 'background-color',
								),
		                    ),
							'eddcs_error_text_color' => array(
		                        'setting'    => array(
		                            'default' => '#a94442',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Text Color', 'edd_checkout_styler' ),
									'default' 		=> '#a94442',
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div.edd-alert-error',
									'property'		=> 'color',
								),
		                    ),
							'eddcs_error_border_width' => array(
		                        'setting'    => array(
		                            'default' => 1,
									'transport'    => 'postMessage',
									'sanitize_callback' => 'edd_checkout_styler_sanitize_integer',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Error Border Width', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div.edd-alert-error',
									'property'		=> 'border-width',
									'unit'			=> 'px',
								),
		                    ),
							'eddcs_error_border_color' => array(
		                        'setting'    => array(
		                            'default' => '#ebccd1',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'color',
		                            'label'         => __( 'Error Border Color', 'edd_checkout_styler' ),
									'default' 		=> '#ebccd1',
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div.edd-alert-error',
									'property'		=> 'border-color',
								),
		                    ),
							'eddcs_error_border_radius' => array(
		                        'setting'    => array(
		                            'default' => '',
									'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-slider',
		                            'label'         => __( 'Border Radius (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
		                                'min'                => 0,
		                                'max'                => 100,
		                                'step'                 => 1,
		                            ),
		                        ),
								'preview'       => array(
									'type'          => 'css',
									'selector'      => 'div.edd-alert-error',
									'property'		=> 'border-radius',
									'unit'			=> 'px',
								),
		                    ),
							'eddcs_error_padding' => array(
		                        'setting'    => array(
									'default' => array(
		                                'top'       => '',
		                                'bottom'    => '',
		                                'left'      => '',
		                                'right'     => '',
		                            ),
	                            	'transport'    => 'postMessage',
		                        ),
		                        'control'    => array(
		                            'type'          => 'ib-multitext',
		                            'label'         => __( 'Padding (px)', 'edd_checkout_styler' ),
		                            'class' 		=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'            => array(
										'top'            => __( 'Top', 'edd_checkout_styler' ),
										'bottom'         => __( 'Bottom', 'edd_checkout_styler' ),
										'left'           => __( 'Left', 'edd_checkout_styler' ),
										'right'          => __( 'Right', 'edd_checkout_styler' ),
									),
								),
								'preview'		=> array(
									'type'			=> 'css',
									'rules'			=> array(
										'top'	=> array(
											'selector'		=> 'div.edd-alert-error',
											'property'		=> 'padding-top',
											'unit'			=> 'px',
										),
										'bottom'	=> array(
											'selector'		=> 'div.edd-alert-error',
											'property'		=> 'padding-bottom',
											'unit'			=> 'px',
										),
										'left' => array(
											'selector'      => 'div.edd-alert-error',
											'property'		=> 'padding-left',
											'unit'			=> 'px',
										),
										'right' => array(
											'selector'      => 'div.edd-alert-error',
											'property'		=> 'padding-right',
											'unit'			=> 'px',
										),
									),
								),
		                    ),
							'eddcs_error_font_size'	=> array(
								'setting'				=> array(
									'default'			=> '',
									'transport'			=> 'postMessage',
									'sanitize_callback'	=> 'edd_checkout_styler_sanitize_integer',
								),
								'control'    => array(
									'type'			=> 'ib-slider',
									'label'			=> __( 'Font Size (px)', 'edd_checkout_styler' ),
									'class'			=> 'EDD_Checkout_Styler_Customizer_Control',
									'choices'			=> array(
										'min'			=> 0,
										'max'			=> 100,
										'step'			=> 1,
									),
								),
								'preview'		=> array(
									'type'			=> 'css',
									'selector'		=> 'div.edd-alert-error',
									'property'		=> 'font-size',
									'unit'			=> 'px',
								),
		                    ),
						),
					),
				),
			),
		)
	);
}

add_action( 'wp_head', 'edd_checkout_styler_output_styles', 1000 );
function edd_checkout_styler_output_styles() {
	$container_padding 	= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_padding', true );
	$th_border			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_border_width', true );
	$th_padding			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_padding', true );
	$td_border			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_border_width', true );
	$td_padding			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_padding', true );
	$tf_border			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_border_width', true );
	$tf_padding			= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_padding', true );
	$form_padding 		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_padding', true );
	$input_padding		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_inputs_padding', true );
	$input_border		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_border_width', true );
	$button_padding		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_padding', true );
	$error_padding		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_padding', true );
	$login_padding		= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_padding', true );
	$discount_padding	= EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_padding', true );
	?>
	<style type="text/css">
		div#edd_checkout_form_wrap #edd-login-account-wrap,
		div#edd_checkout_form_wrap #edd-new-account-wrap {
			margin-top: 0;
			margin-left: 0;
			margin-right: 0;
		}
		div#edd_checkout_form_wrap #edd_payment_mode_select legend {
			margin-bottom: 0;
		} 
		div#edd_checkout_wrap {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_width' ) >= 0 ) { ?>
				max-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_width' ); ?>%;
				margin: 0 auto;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_bg_color' ); ?>;
			<?php } ?>
			<?php if ( $container_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $container_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $container_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $container_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $container_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $container_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $container_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $container_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_container_border_radius' ); ?>px;
			<?php } ?>
		}

		table#edd_checkout_cart .edd_cart_header_row th {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_bg' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_bg' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_text' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_text' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_alignment' ) ) { ?>
				text-align: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_alignment' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_letter_spacing' ); ?>px;
			<?php } ?>
			<?php if ( $th_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $th_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $th_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $th_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $th_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $th_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $th_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $th_padding['right']; ?>px;
			<?php } ?>
			<?php if ( $th_border['top'] >= 0 ) { ?>
			border-top-width: <?php echo $th_border['top']; ?>px;
			<?php } ?>
			<?php if ( $th_border['bottom'] >= 0 ) { ?>
			border-bottom-width: <?php echo $th_border['bottom']; ?>px;
			<?php } ?>
			<?php if ( $th_border['left'] >= 0 ) { ?>
			border-left-width: <?php echo $th_border['left']; ?>px;
			<?php } ?>
			<?php if ( $th_border['right'] >= 0 ) { ?>
			border-right-width: <?php echo $th_border['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_border_color' ) ) { ?>
			border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_header_border_color' ); ?>;
			<?php } ?>
		}

		table#edd_checkout_cart .edd_cart_item td {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_alignment' ) ) { ?>
				text-align: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_alignment' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_letter_spacing' ); ?>px;
			<?php } ?>
			<?php if ( $td_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $td_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $td_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $td_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $td_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $td_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $td_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $td_padding['right']; ?>px;
			<?php } ?>
			<?php if ( $td_border['top'] >= 0 ) { ?>
			border-top-width: <?php echo $td_border['top']; ?>px;
			<?php } ?>
			<?php if ( $td_border['bottom'] >= 0 ) { ?>
			border-bottom-width: <?php echo $td_border['bottom']; ?>px;
			<?php } ?>
			<?php if ( $td_border['left'] >= 0 ) { ?>
			border-left-width: <?php echo $td_border['left']; ?>px;
			<?php } ?>
			<?php if ( $td_border['right'] >= 0 ) { ?>
			border-right-width: <?php echo $td_border['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_border_color' ) ) { ?>
			border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_border_color' ); ?>;
			<?php } ?>
		}

		table#edd_checkout_cart .edd_cart_item:nth-of-type(odd) td {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_odd_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_odd_bg_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_odd_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_odd_color' ); ?>;
			<?php } ?>
		}

		table#edd_checkout_cart .edd_cart_item:nth-of-type(even) td {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_even_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_even_bg_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_even_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_data_even_color' ); ?>;
			<?php } ?>
		}

		table#edd_checkout_cart .edd_cart_footer_row th {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_bg' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_bg' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_text' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_text' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_alignment' ) ) { ?>
				text-align: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_alignment' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_letter_spacing' ); ?>px;
			<?php } ?>
			<?php if ( $tf_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $tf_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $tf_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $tf_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $tf_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $tf_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $tf_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $tf_padding['right']; ?>px;
			<?php } ?>
			<?php if ( $tf_border['top'] >= 0 ) { ?>
			border-top-width: <?php echo $tf_border['top']; ?>px;
			<?php } ?>
			<?php if ( $tf_border['bottom'] >= 0 ) { ?>
			border-bottom-width: <?php echo $tf_border['bottom']; ?>px;
			<?php } ?>
			<?php if ( $tf_border['left'] >= 0 ) { ?>
			border-left-width: <?php echo $tf_border['left']; ?>px;
			<?php } ?>
			<?php if ( $tf_border['right'] >= 0 ) { ?>
			border-right-width: <?php echo $tf_border['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_border_color' ) ) { ?>
			border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_table_footer_border_color' ); ?>;
			<?php } ?>
		}

		div#edd_checkout_form_wrap fieldset:first-child {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_bg_color' ); ?>;
			<?php } ?>
			<?php if ( $form_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $form_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $form_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $form_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $form_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $form_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $form_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $form_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_form_border_radius' ); ?>px;
			<?php } ?>
		}
		body.logged-in div#edd_checkout_form_wrap legend {
			margin-bottom: 0;
		}
		div#edd_checkout_form_wrap legend {
			display: inherit;
			width: auto;
			border: 0;
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_title_letter_spacing' ); ?>px;
			<?php } ?>
		}
		div#edd_checkout_form_wrap label {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_label_letter_spacing' ); ?>px;
			<?php } ?>
		}
		div#edd_checkout_form_wrap fieldset p {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_margin' ) >= 0 ) { ?>
				margin-bottom: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_margin' ); ?>px;
			<?php } ?>
		}
		div#edd_checkout_form_wrap input.edd-input {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_width' ) === '100%' ) { ?>
				width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_width' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_bg_color' ); ?>;
			<?php } ?>
			<?php if ( $input_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $input_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $input_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $input_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $input_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $input_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $input_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $input_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_font_size' ); ?>px;
			<?php } ?>
			<?php if ( $input_border['top'] >= 0 ) { ?>
				qborder-top-width: <?php echo $input_border['top']; ?>px;
			<?php } ?>
			<?php if ( $input_border['bottom'] >= 0 ) { ?>
				border-bottom-width: <?php echo $input_border['bottom']; ?>px;
			<?php } ?>
			<?php if ( $input_border['left'] >= 0 ) { ?>
				border-left-width: <?php echo $input_border['left']; ?>px;
			<?php } ?>
			<?php if ( $input_border['right'] >= 0 ) { ?>
				border-right-width: <?php echo $input_border['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_border_color' ); ?>;
			<?php } ?>
			border-style: solid;
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_border_radius' ); ?>px;
			<?php } ?>
		}

		div#edd_checkout_form_wrap input.edd-input.required {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_color' ); ?>;
			<?php } ?>
		}

		<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_focus_color' ) ) { ?>
			div#edd_checkout_form_wrap input.edd-input:focus {
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_focus_color' ); ?>;
			}
		<?php } ?>

		<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_placeholder' ) === 'yes' ) { ?>
			div#edd_checkout_form_wrap input.edd-input::-webkit-input-placeholder {
				color: transparent;
				opacity: 0;
			}
			div#edd_checkout_form_wrap input.edd-input:-moz-placeholder {
				color: transparent;
				opacity: 0;
			}
			div#edd_checkout_form_wrap input.edd-input::-moz-placeholder {
				color: transparent;
				opacity: 0;
			}
			div#edd_checkout_form_wrap input.edd-input:-ms-input-placeholder {
				color: transparent;
				opacity: 0;
			}
		<?php } ?>

		div#edd_checkout_form_wrap span.edd-description {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_description' ) === 'yes' ) { ?>
				display: none;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_desc_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_desc_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_desc_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_input_desc_color' ); ?>;
			<?php } ?>
		}

		div#edd_checkout_form_wrap #edd_final_total_wrap {
			text-align: left;
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_bg' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_bg' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_text_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_text_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_total_border_radius' ); ?>px;
			<?php } ?>
		}

		div#edd_checkout_form_wrap #edd_purchase_submit {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_alignment' ) ) { ?>
				text-align: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_alignment' ); ?>;
			<?php } ?>
			margin-bottom: 0;
		}

		div#edd_checkout_form_wrap .edd-submit,
		div#edd_checkout_form_wrap .edd-cart-adjustment input.edd-submit {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_width' ) === '100%' ) { ?>
				width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_width' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_font_size' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_text_transform' ) ) { ?>
				text-transform: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_text_transform' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_letter_spacing' ) ) { ?>
				letter-spacing: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_letter_spacing' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_bg_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_color' ); ?>;
			<?php } ?>
			<?php if ( $button_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $button_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $button_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $button_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $button_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $button_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $button_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $button_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_border_radius' ); ?>px;
			<?php } ?>
		}

		div#edd_checkout_form_wrap .edd-submit:hover {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_bg_hover_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_bg_hover_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_hover_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_button_hover_color' ); ?>;
			<?php } ?>
		}

		div#edd_checkout_form_wrap .edd-cart-adjustment input.edd-submit {
			margin-top: 10px;
			margin-bottom: 0;
		}

		div#edd_checkout_form_wrap #edd-login-account-wrap, 
		div#edd_checkout_form_wrap #edd-new-account-wrap, 
		div#edd_checkout_form_wrap #edd_show_discount {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_bg_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_text_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_text_color' ); ?>;
			<?php } ?>
			<?php if ( $login_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $login_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $login_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $login_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $login_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $login_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $login_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $login_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_border_radius' ); ?>px;
			<?php } ?>
		}

		div#edd_checkout_form_wrap #edd-login-account-wrap a, 
		div#edd_checkout_form_wrap #edd-new-account-wrap a, 
		div#edd_checkout_form_wrap #edd_show_discount a {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_link_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_login_link_color' ); ?>;
			<?php } ?>
		}

		div#edd_checkout_form_wrap #edd-discount-code-wrap {
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_bg_color' ); ?>;
			<?php } ?>
			<?php if ( $discount_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $discount_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $discount_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $discount_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $discount_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $discount_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $discount_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $discount_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_discount_border_radius' ); ?>px;
			<?php } ?>
		}

		div.edd-alert-error {
			text-align: left;
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_bg_color' ) ) { ?>
				background-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_bg_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_text_color' ) ) { ?>
				color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_text_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_width' ) >= 0 ) { ?>
				border-width: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_width' ); ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_color' ) ) { ?>
				border-color: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_color' ); ?>;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_radius' ) >= 0 ) { ?>
				border-radius: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_border_radius' ); ?>px;
			<?php } ?>
			<?php if ( $error_padding['top'] >= 0 ) { ?>
				padding-top: <?php echo $error_padding['top']; ?>px;
			<?php } ?>
			<?php if ( $error_padding['bottom'] >= 0 ) { ?>
				padding-bottom: <?php echo $error_padding['bottom']; ?>px;
			<?php } ?>
			<?php if ( $error_padding['left'] >= 0 ) { ?>
				padding-left: <?php echo $error_padding['left']; ?>px;
			<?php } ?>
			<?php if ( $error_padding['right'] >= 0 ) { ?>
				padding-right: <?php echo $error_padding['right']; ?>px;
			<?php } ?>
			<?php if ( EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_font_size' ) ) { ?>
				font-size: <?php echo EDD_Checkout_Styler_Customizer::get_mod( 'eddcs_error_font_size' ); ?>px;
			<?php } ?>
		}
	</style>
	<?php
}

/**
 * Sanitize integer value.
 *
 * @since 1.0.0
 * @access public
 * @param int $input
 * @return intval
 */
function edd_checkout_styler_sanitize_integer( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}
