<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['twig']['template_dir'] = VIEWPATH;
$config['twig']['template_ext'] = 'tpl';
$config['twig']['environment']['autoescape'] = TRUE;
$config['twig']['environment']['cache'] = FALSE;
$config['twig']['environment']['debug'] = FALSE;