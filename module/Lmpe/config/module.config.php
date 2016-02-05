 <?php
	return array (
			'controllers' => array (
					'invokables' => array (
							'Lmpe\Controller\Lmpe' => 'Lmpe\Controller\LmpeController' 
					) 
			),
			// 'route' => '/album[/:action][/:id]',
			// The following section is new and should be added to your file
			'router' => array (
					'routes' => array (
							'lmpe' => array (
									'type' => 'segment',
									'options' => array (
											'route' => '[/][:action][/][:id]',
											'constraints' => array (
													'action' => '[a-zA-Z][a-zA-Z0-9_-]*' 
											),
											'defaults' => array (
													'controller' => 'Lmpe\Controller\Lmpe',
													'action' => 'index' 
											) 
									) 
							) 
					) 
			),
			
			'translator' => array (
					'local' => 'en_US',
					'translation_file_patterns' => array (
							array (
									'type' => 'gettext',
									'base_dir' => __DIR__ . '/../language',
									'pattern' => '%s.mo',
									'text_domain' => __NAMESPACE__ 
							) 
					) 
			),
			
			'view_manager' => array (
					'template_path_stack' => array (
							'lmpe' => __DIR__ . '/../view' 
					) 
			) 
	);
	?>