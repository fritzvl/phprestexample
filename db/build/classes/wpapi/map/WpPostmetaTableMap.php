<?php



/**
 * This class defines the structure of the 'wp_postmeta' table.
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
class WpPostmetaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpPostmetaTableMap';

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
        $this->setName('wp_postmeta');
        $this->setPhpName('WpPostmeta');
        $this->setClassname('WpPostmeta');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('META_ID', 'MetaId', 'BIGINT', true, null, null);
        $this->addColumn('POST_ID', 'PostId', 'BIGINT', true, null, 0);
        $this->addColumn('META_KEY', 'MetaKey', 'VARCHAR', false, 255, null);
        $this->addColumn('META_VALUE', 'MetaValue', 'CLOB', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpPostmetaTableMap
