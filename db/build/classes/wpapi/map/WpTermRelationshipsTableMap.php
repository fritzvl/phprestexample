<?php



/**
 * This class defines the structure of the 'wp_term_relationships' table.
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
class WpTermRelationshipsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpTermRelationshipsTableMap';

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
        $this->setName('wp_term_relationships');
        $this->setPhpName('WpTermRelationships');
        $this->setClassname('WpTermRelationships');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('OBJECT_ID', 'ObjectId', 'BIGINT', true, null, 0);
        $this->addPrimaryKey('TERM_TAXONOMY_ID', 'TermTaxonomyId', 'BIGINT', true, null, 0);
        $this->addColumn('TERM_ORDER', 'TermOrder', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpTermRelationshipsTableMap
