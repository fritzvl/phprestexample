<?php



/**
 * This class defines the structure of the 'wp_terms' table.
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
class WpTermsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpTermsTableMap';

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
        $this->setName('wp_terms');
        $this->setPhpName('WpTerms');
        $this->setClassname('WpTerms');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('TERM_ID', 'TermId', 'BIGINT', true, null, null);
        $this->addColumn('NAME', 'Name', 'VARCHAR', true, 200, '');
        $this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 200, '');
        $this->addColumn('TERM_GROUP', 'TermGroup', 'BIGINT', true, 10, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpTermsTableMap
