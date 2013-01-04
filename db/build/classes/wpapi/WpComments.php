<?php



/**
 * Skeleton subclass for representing a row from the 'wp_comments' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.wpapi
 */
class WpComments extends BaseWpComments implements \wpapi\Formattable
{

	private $formatter;


	public function setFormatter(\wpapi\Formatter $formatter){
		$this->formatter=$formatter;
		$this->formatter->setFormattable($this);
	}

	public function getFormattedData(){
		return $this->formatter->getFormattedData();
	}

}
