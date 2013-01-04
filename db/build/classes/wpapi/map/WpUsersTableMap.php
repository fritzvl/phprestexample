<?php



/**
 * This class defines the structure of the 'wp_users' table.
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
class WpUsersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpUsersTableMap';

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
        $this->setName('wp_users');
        $this->setPhpName('WpUsers');
        $this->setClassname('WpUsers');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('USER_LOGIN', 'UserLogin', 'VARCHAR', true, 60, '');
        $this->addColumn('USER_PASS', 'UserPass', 'VARCHAR', true, 64, '');
        $this->addColumn('USER_NICENAME', 'UserNicename', 'VARCHAR', true, 50, '');
        $this->addColumn('USER_EMAIL', 'UserEmail', 'VARCHAR', true, 100, '');
        $this->addColumn('USER_URL', 'UserUrl', 'VARCHAR', true, 100, '');
        $this->addColumn('USER_REGISTERED', 'UserRegistered', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('USER_ACTIVATION_KEY', 'UserActivationKey', 'VARCHAR', true, 60, '');
        $this->addColumn('USER_STATUS', 'UserStatus', 'INTEGER', true, null, 0);
        $this->addColumn('DISPLAY_NAME', 'DisplayName', 'VARCHAR', true, 250, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpUsersTableMap
