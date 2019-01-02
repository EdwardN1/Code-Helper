<?php
// Basic fields

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// This is used for multiple 'basic' fields that 'fail gracefully'
/*echo $this->indent . htmlspecialchars("<?php " . $this->the_field_method . "( '" . $this->name ."'". $this->location . " ); ?>")."\n";*/
echo $this->indent . htmlspecialchars("<?php $".$this->name . " = ". $this->get_field_method . "( '" . $this->name ."' ); ?>")."\n";
echo $this->indent . htmlspecialchars("<?php echo $".$this->name . "; ?>")."\n";
