<?php



/**
 * This class defines the structure of the 'wp_term_taxonomy' table.
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
class WpTermTaxonomyTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpTermTaxonomyTableMap';

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
        $this->setName('wp_term_taxonomy');
        $this->setPhpName('WpTermTaxonomy');
        $this->setClassname('WpTermTaxonomy');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('TERM_TAXONOMY_ID', 'TermTaxonomyId', 'BIGINT', true, null, null);
        $this->addColumn('TERM_ID', 'TermId', 'BIGINT', true, null, 0);
        $this->addColumn('TAXONOMY', 'Taxonomy', 'VARCHAR', true, 32, '');
        $this->addColumn('DESCRIPTION', 'Description', 'CLOB', true, null, null);
        $this->addColumn('PARENT', 'Parent', 'BIGINT', true, null, 0);
        $this->addColumn('COUNT', 'Count', 'BIGINT', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpTermTaxonomyTableMap
