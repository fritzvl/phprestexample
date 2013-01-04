<?php


/**
 * Base static class for performing query and update operations on the 'wp_links' table.
 *
 *
 *
 * @package propel.generator.wpapi.om
 */
abstract class BaseWpLinksPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'wpapi';

    /** the table name for this class */
    const TABLE_NAME = 'wp_links';

    /** the related Propel class for this table */
    const OM_CLASS = 'WpLinks';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WpLinksTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the LINK_ID field */
    const LINK_ID = 'wp_links.LINK_ID';

    /** the column name for the LINK_URL field */
    const LINK_URL = 'wp_links.LINK_URL';

    /** the column name for the LINK_NAME field */
    const LINK_NAME = 'wp_links.LINK_NAME';

    /** the column name for the LINK_IMAGE field */
    const LINK_IMAGE = 'wp_links.LINK_IMAGE';

    /** the column name for the LINK_TARGET field */
    const LINK_TARGET = 'wp_links.LINK_TARGET';

    /** the column name for the LINK_DESCRIPTION field */
    const LINK_DESCRIPTION = 'wp_links.LINK_DESCRIPTION';

    /** the column name for the LINK_VISIBLE field */
    const LINK_VISIBLE = 'wp_links.LINK_VISIBLE';

    /** the column name for the LINK_OWNER field */
    const LINK_OWNER = 'wp_links.LINK_OWNER';

    /** the column name for the LINK_RATING field */
    const LINK_RATING = 'wp_links.LINK_RATING';

    /** the column name for the LINK_UPDATED field */
    const LINK_UPDATED = 'wp_links.LINK_UPDATED';

    /** the column name for the LINK_REL field */
    const LINK_REL = 'wp_links.LINK_REL';

    /** the column name for the LINK_NOTES field */
    const LINK_NOTES = 'wp_links.LINK_NOTES';

    /** the column name for the LINK_RSS field */
    const LINK_RSS = 'wp_links.LINK_RSS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of WpLinks objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array WpLinks[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WpLinksPeer::$fieldNames[WpLinksPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('LinkId', 'LinkUrl', 'LinkName', 'LinkImage', 'LinkTarget', 'LinkDescription', 'LinkVisible', 'LinkOwner', 'LinkRating', 'LinkUpdated', 'LinkRel', 'LinkNotes', 'LinkRss', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('linkId', 'linkUrl', 'linkName', 'linkImage', 'linkTarget', 'linkDescription', 'linkVisible', 'linkOwner', 'linkRating', 'linkUpdated', 'linkRel', 'linkNotes', 'linkRss', ),
        BasePeer::TYPE_COLNAME => array (WpLinksPeer::LINK_ID, WpLinksPeer::LINK_URL, WpLinksPeer::LINK_NAME, WpLinksPeer::LINK_IMAGE, WpLinksPeer::LINK_TARGET, WpLinksPeer::LINK_DESCRIPTION, WpLinksPeer::LINK_VISIBLE, WpLinksPeer::LINK_OWNER, WpLinksPeer::LINK_RATING, WpLinksPeer::LINK_UPDATED, WpLinksPeer::LINK_REL, WpLinksPeer::LINK_NOTES, WpLinksPeer::LINK_RSS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LINK_ID', 'LINK_URL', 'LINK_NAME', 'LINK_IMAGE', 'LINK_TARGET', 'LINK_DESCRIPTION', 'LINK_VISIBLE', 'LINK_OWNER', 'LINK_RATING', 'LINK_UPDATED', 'LINK_REL', 'LINK_NOTES', 'LINK_RSS', ),
        BasePeer::TYPE_FIELDNAME => array ('link_id', 'link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_owner', 'link_rating', 'link_updated', 'link_rel', 'link_notes', 'link_rss', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WpLinksPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('LinkId' => 0, 'LinkUrl' => 1, 'LinkName' => 2, 'LinkImage' => 3, 'LinkTarget' => 4, 'LinkDescription' => 5, 'LinkVisible' => 6, 'LinkOwner' => 7, 'LinkRating' => 8, 'LinkUpdated' => 9, 'LinkRel' => 10, 'LinkNotes' => 11, 'LinkRss' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('linkId' => 0, 'linkUrl' => 1, 'linkName' => 2, 'linkImage' => 3, 'linkTarget' => 4, 'linkDescription' => 5, 'linkVisible' => 6, 'linkOwner' => 7, 'linkRating' => 8, 'linkUpdated' => 9, 'linkRel' => 10, 'linkNotes' => 11, 'linkRss' => 12, ),
        BasePeer::TYPE_COLNAME => array (WpLinksPeer::LINK_ID => 0, WpLinksPeer::LINK_URL => 1, WpLinksPeer::LINK_NAME => 2, WpLinksPeer::LINK_IMAGE => 3, WpLinksPeer::LINK_TARGET => 4, WpLinksPeer::LINK_DESCRIPTION => 5, WpLinksPeer::LINK_VISIBLE => 6, WpLinksPeer::LINK_OWNER => 7, WpLinksPeer::LINK_RATING => 8, WpLinksPeer::LINK_UPDATED => 9, WpLinksPeer::LINK_REL => 10, WpLinksPeer::LINK_NOTES => 11, WpLinksPeer::LINK_RSS => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LINK_ID' => 0, 'LINK_URL' => 1, 'LINK_NAME' => 2, 'LINK_IMAGE' => 3, 'LINK_TARGET' => 4, 'LINK_DESCRIPTION' => 5, 'LINK_VISIBLE' => 6, 'LINK_OWNER' => 7, 'LINK_RATING' => 8, 'LINK_UPDATED' => 9, 'LINK_REL' => 10, 'LINK_NOTES' => 11, 'LINK_RSS' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('link_id' => 0, 'link_url' => 1, 'link_name' => 2, 'link_image' => 3, 'link_target' => 4, 'link_description' => 5, 'link_visible' => 6, 'link_owner' => 7, 'link_rating' => 8, 'link_updated' => 9, 'link_rel' => 10, 'link_notes' => 11, 'link_rss' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = WpLinksPeer::getFieldNames($toType);
        $key = isset(WpLinksPeer::$fieldKeys[$fromType][$name]) ? WpLinksPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WpLinksPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, WpLinksPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WpLinksPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. WpLinksPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WpLinksPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(WpLinksPeer::LINK_ID);
            $criteria->addSelectColumn(WpLinksPeer::LINK_URL);
            $criteria->addSelectColumn(WpLinksPeer::LINK_NAME);
            $criteria->addSelectColumn(WpLinksPeer::LINK_IMAGE);
            $criteria->addSelectColumn(WpLinksPeer::LINK_TARGET);
            $criteria->addSelectColumn(WpLinksPeer::LINK_DESCRIPTION);
            $criteria->addSelectColumn(WpLinksPeer::LINK_VISIBLE);
            $criteria->addSelectColumn(WpLinksPeer::LINK_OWNER);
            $criteria->addSelectColumn(WpLinksPeer::LINK_RATING);
            $criteria->addSelectColumn(WpLinksPeer::LINK_UPDATED);
            $criteria->addSelectColumn(WpLinksPeer::LINK_REL);
            $criteria->addSelectColumn(WpLinksPeer::LINK_NOTES);
            $criteria->addSelectColumn(WpLinksPeer::LINK_RSS);
        } else {
            $criteria->addSelectColumn($alias . '.LINK_ID');
            $criteria->addSelectColumn($alias . '.LINK_URL');
            $criteria->addSelectColumn($alias . '.LINK_NAME');
            $criteria->addSelectColumn($alias . '.LINK_IMAGE');
            $criteria->addSelectColumn($alias . '.LINK_TARGET');
            $criteria->addSelectColumn($alias . '.LINK_DESCRIPTION');
            $criteria->addSelectColumn($alias . '.LINK_VISIBLE');
            $criteria->addSelectColumn($alias . '.LINK_OWNER');
            $criteria->addSelectColumn($alias . '.LINK_RATING');
            $criteria->addSelectColumn($alias . '.LINK_UPDATED');
            $criteria->addSelectColumn($alias . '.LINK_REL');
            $criteria->addSelectColumn($alias . '.LINK_NOTES');
            $criteria->addSelectColumn($alias . '.LINK_RSS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(WpLinksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WpLinksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WpLinksPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 WpLinks
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WpLinksPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return WpLinksPeer::populateObjects(WpLinksPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WpLinksPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WpLinksPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      WpLinks $obj A WpLinks object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLinkId();
            } // if key === null
            WpLinksPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A WpLinks object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof WpLinks) {
                $key = (string) $value->getLinkId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or WpLinks object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WpLinksPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   WpLinks Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WpLinksPeer::$instances[$key])) {
                return WpLinksPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        WpLinksPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wp_links
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (string) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = WpLinksPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WpLinksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WpLinksPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WpLinksPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (WpLinks object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WpLinksPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WpLinksPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WpLinksPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WpLinksPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WpLinksPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(WpLinksPeer::DATABASE_NAME)->getTable(WpLinksPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWpLinksPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWpLinksPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new WpLinksTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return WpLinksPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a WpLinks or Criteria object.
     *
     * @param      mixed $values Criteria or WpLinks object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from WpLinks object
        }

        if ($criteria->containsKey(WpLinksPeer::LINK_ID) && $criteria->keyContainsValue(WpLinksPeer::LINK_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.WpLinksPeer::LINK_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(WpLinksPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a WpLinks or Criteria object.
     *
     * @param      mixed $values Criteria or WpLinks object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WpLinksPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WpLinksPeer::LINK_ID);
            $value = $criteria->remove(WpLinksPeer::LINK_ID);
            if ($value) {
                $selectCriteria->add(WpLinksPeer::LINK_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WpLinksPeer::TABLE_NAME);
            }

        } else { // $values is WpLinks object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WpLinksPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wp_links table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WpLinksPeer::TABLE_NAME, $con, WpLinksPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WpLinksPeer::clearInstancePool();
            WpLinksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a WpLinks or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or WpLinks object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WpLinksPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof WpLinks) { // it's a model object
            // invalidate the cache for this single object
            WpLinksPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WpLinksPeer::DATABASE_NAME);
            $criteria->add(WpLinksPeer::LINK_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WpLinksPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WpLinksPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WpLinksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given WpLinks object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      WpLinks $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WpLinksPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WpLinksPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(WpLinksPeer::DATABASE_NAME, WpLinksPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return WpLinks
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WpLinksPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WpLinksPeer::DATABASE_NAME);
        $criteria->add(WpLinksPeer::LINK_ID, $pk);

        $v = WpLinksPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return WpLinks[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpLinksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WpLinksPeer::DATABASE_NAME);
            $criteria->add(WpLinksPeer::LINK_ID, $pks, Criteria::IN);
            $objs = WpLinksPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWpLinksPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWpLinksPeer::buildTableMap();

