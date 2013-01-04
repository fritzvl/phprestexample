<?php



/**
 * This class defines the structure of the 'wp_options' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.wpapi.map
 */
class WpOptionsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpOptionsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('wp_options');
        $this->setPhpName('WpOptions');
        $this->setClassname('WpOptions');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('OPTION_ID', 'OptionId', 'BIGINT', true, null, null);
        $this->addColumn('OPTION_NAME', 'OptionName', 'VARCHAR', true, 64, '');
        $this->addColumn('OPTION_VALUE', 'OptionValue', 'CLOB', true, null, null);
        $this->addColumn('AUTOLOAD', 'Autoload', 'VARCHAR', true, 20, 'yes');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpOptionsTableMap
