<?php


/**
 * Base static class for performing query and update operations on the 'wp_comments' table.
 *
 *
 *
 * @package propel.generator.wpapi.om
 */
abstract class BaseWpCommentsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'wpapi';

    /** the table name for this class */
    const TABLE_NAME = 'wp_comments';

    /** the related Propel class for this table */
    const OM_CLASS = 'WpComments';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WpCommentsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the COMMENT_ID field */
    const COMMENT_ID = 'wp_comments.COMMENT_ID';

    /** the column name for the COMMENT_POST_ID field */
    const COMMENT_POST_ID = 'wp_comments.COMMENT_POST_ID';

    /** the column name for the COMMENT_AUTHOR field */
    const COMMENT_AUTHOR = 'wp_comments.COMMENT_AUTHOR';

    /** the column name for the COMMENT_AUTHOR_EMAIL field */
    const COMMENT_AUTHOR_EMAIL = 'wp_comments.COMMENT_AUTHOR_EMAIL';

    /** the column name for the COMMENT_AUTHOR_URL field */
    const COMMENT_AUTHOR_URL = 'wp_comments.COMMENT_AUTHOR_URL';

    /** the column name for the COMMENT_AUTHOR_IP field */
    const COMMENT_AUTHOR_IP = 'wp_comments.COMMENT_AUTHOR_IP';

    /** the column name for the COMMENT_DATE field */
    const COMMENT_DATE = 'wp_comments.COMMENT_DATE';

    /** the column name for the COMMENT_DATE_GMT field */
    const COMMENT_DATE_GMT = 'wp_comments.COMMENT_DATE_GMT';

    /** the column name for the COMMENT_CONTENT field */
    const COMMENT_CONTENT = 'wp_comments.COMMENT_CONTENT';

    /** the column name for the COMMENT_KARMA field */
    const COMMENT_KARMA = 'wp_comments.COMMENT_KARMA';

    /** the column name for the COMMENT_APPROVED field */
    const COMMENT_APPROVED = 'wp_comments.COMMENT_APPROVED';

    /** the column name for the COMMENT_AGENT field */
    const COMMENT_AGENT = 'wp_comments.COMMENT_AGENT';

    /** the column name for the COMMENT_TYPE field */
    const COMMENT_TYPE = 'wp_comments.COMMENT_TYPE';

    /** the column name for the COMMENT_PARENT field */
    const COMMENT_PARENT = 'wp_comments.COMMENT_PARENT';

    /** the column name for the USER_ID field */
    const USER_ID = 'wp_comments.USER_ID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of WpComments objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array WpComments[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WpCommentsPeer::$fieldNames[WpCommentsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('CommentId', 'CommentPostId', 'CommentAuthor', 'CommentAuthorEmail', 'CommentAuthorUrl', 'CommentAuthorIp', 'CommentDate', 'CommentDateGmt', 'CommentContent', 'CommentKarma', 'CommentApproved', 'CommentAgent', 'CommentType', 'CommentParent', 'UserId', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('commentId', 'commentPostId', 'commentAuthor', 'commentAuthorEmail', 'commentAuthorUrl', 'commentAuthorIp', 'commentDate', 'commentDateGmt', 'commentContent', 'commentKarma', 'commentApproved', 'commentAgent', 'commentType', 'commentParent', 'userId', ),
        BasePeer::TYPE_COLNAME => array (WpCommentsPeer::COMMENT_ID, WpCommentsPeer::COMMENT_POST_ID, WpCommentsPeer::COMMENT_AUTHOR, WpCommentsPeer::COMMENT_AUTHOR_EMAIL, WpCommentsPeer::COMMENT_AUTHOR_URL, WpCommentsPeer::COMMENT_AUTHOR_IP, WpCommentsPeer::COMMENT_DATE, WpCommentsPeer::COMMENT_DATE_GMT, WpCommentsPeer::COMMENT_CONTENT, WpCommentsPeer::COMMENT_KARMA, WpCommentsPeer::COMMENT_APPROVED, WpCommentsPeer::COMMENT_AGENT, WpCommentsPeer::COMMENT_TYPE, WpCommentsPeer::COMMENT_PARENT, WpCommentsPeer::USER_ID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('COMMENT_ID', 'COMMENT_POST_ID', 'COMMENT_AUTHOR', 'COMMENT_AUTHOR_EMAIL', 'COMMENT_AUTHOR_URL', 'COMMENT_AUTHOR_IP', 'COMMENT_DATE', 'COMMENT_DATE_GMT', 'COMMENT_CONTENT', 'COMMENT_KARMA', 'COMMENT_APPROVED', 'COMMENT_AGENT', 'COMMENT_TYPE', 'COMMENT_PARENT', 'USER_ID', ),
        BasePeer::TYPE_FIELDNAME => array ('comment_ID', 'comment_post_ID', 'comment_author', 'comment_author_email', 'comment_author_url', 'comment_author_IP', 'comment_date', 'comment_date_gmt', 'comment_content', 'comment_karma', 'comment_approved', 'comment_agent', 'comment_type', 'comment_parent', 'user_id', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WpCommentsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('CommentId' => 0, 'CommentPostId' => 1, 'CommentAuthor' => 2, 'CommentAuthorEmail' => 3, 'CommentAuthorUrl' => 4, 'CommentAuthorIp' => 5, 'CommentDate' => 6, 'CommentDateGmt' => 7, 'CommentContent' => 8, 'CommentKarma' => 9, 'CommentApproved' => 10, 'CommentAgent' => 11, 'CommentType' => 12, 'CommentParent' => 13, 'UserId' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('commentId' => 0, 'commentPostId' => 1, 'commentAuthor' => 2, 'commentAuthorEmail' => 3, 'commentAuthorUrl' => 4, 'commentAuthorIp' => 5, 'commentDate' => 6, 'commentDateGmt' => 7, 'commentContent' => 8, 'commentKarma' => 9, 'commentApproved' => 10, 'commentAgent' => 11, 'commentType' => 12, 'commentParent' => 13, 'userId' => 14, ),
        BasePeer::TYPE_COLNAME => array (WpCommentsPeer::COMMENT_ID => 0, WpCommentsPeer::COMMENT_POST_ID => 1, WpCommentsPeer::COMMENT_AUTHOR => 2, WpCommentsPeer::COMMENT_AUTHOR_EMAIL => 3, WpCommentsPeer::COMMENT_AUTHOR_URL => 4, WpCommentsPeer::COMMENT_AUTHOR_IP => 5, WpCommentsPeer::COMMENT_DATE => 6, WpCommentsPeer::COMMENT_DATE_GMT => 7, WpCommentsPeer::COMMENT_CONTENT => 8, WpCommentsPeer::COMMENT_KARMA => 9, WpCommentsPeer::COMMENT_APPROVED => 10, WpCommentsPeer::COMMENT_AGENT => 11, WpCommentsPeer::COMMENT_TYPE => 12, WpCommentsPeer::COMMENT_PARENT => 13, WpCommentsPeer::USER_ID => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('COMMENT_ID' => 0, 'COMMENT_POST_ID' => 1, 'COMMENT_AUTHOR' => 2, 'COMMENT_AUTHOR_EMAIL' => 3, 'COMMENT_AUTHOR_URL' => 4, 'COMMENT_AUTHOR_IP' => 5, 'COMMENT_DATE' => 6, 'COMMENT_DATE_GMT' => 7, 'COMMENT_CONTENT' => 8, 'COMMENT_KARMA' => 9, 'COMMENT_APPROVED' => 10, 'COMMENT_AGENT' => 11, 'COMMENT_TYPE' => 12, 'COMMENT_PARENT' => 13, 'USER_ID' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('comment_ID' => 0, 'comment_post_ID' => 1, 'comment_author' => 2, 'comment_author_email' => 3, 'comment_author_url' => 4, 'comment_author_IP' => 5, 'comment_date' => 6, 'comment_date_gmt' => 7, 'comment_content' => 8, 'comment_karma' => 9, 'comment_approved' => 10, 'comment_agent' => 11, 'comment_type' => 12, 'comment_parent' => 13, 'user_id' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = WpCommentsPeer::getFieldNames($toType);
        $key = isset(WpCommentsPeer::$fieldKeys[$fromType][$name]) ? WpCommentsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WpCommentsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, WpCommentsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WpCommentsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. WpCommentsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WpCommentsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_ID);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_POST_ID);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_AUTHOR);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_AUTHOR_EMAIL);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_AUTHOR_URL);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_AUTHOR_IP);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_DATE);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_DATE_GMT);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_CONTENT);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_KARMA);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_APPROVED);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_AGENT);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_TYPE);
            $criteria->addSelectColumn(WpCommentsPeer::COMMENT_PARENT);
            $criteria->addSelectColumn(WpCommentsPeer::USER_ID);
        } else {
            $criteria->addSelectColumn($alias . '.COMMENT_ID');
            $criteria->addSelectColumn($alias . '.COMMENT_POST_ID');
            $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR');
            $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_EMAIL');
            $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_URL');
            $criteria->addSelectColumn($alias . '.COMMENT_AUTHOR_IP');
            $criteria->addSelectColumn($alias . '.COMMENT_DATE');
            $criteria->addSelectColumn($alias . '.COMMENT_DATE_GMT');
            $criteria->addSelectColumn($alias . '.COMMENT_CONTENT');
            $criteria->addSelectColumn($alias . '.COMMENT_KARMA');
            $criteria->addSelectColumn($alias . '.COMMENT_APPROVED');
            $criteria->addSelectColumn($alias . '.COMMENT_AGENT');
            $criteria->addSelectColumn($alias . '.COMMENT_TYPE');
            $criteria->addSelectColumn($alias . '.COMMENT_PARENT');
            $criteria->addSelectColumn($alias . '.USER_ID');
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
        $criteria->setPrimaryTableName(WpCommentsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WpCommentsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WpCommentsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 WpComments
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WpCommentsPeer::doSelect($critcopy, $con);
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
        return WpCommentsPeer::populateObjects(WpCommentsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WpCommentsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WpCommentsPeer::DATABASE_NAME);

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
     * @param      WpComments $obj A WpComments object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCommentId();
            } // if key === null
            WpCommentsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A WpComments object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof WpComments) {
                $key = (string) $value->getCommentId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or WpComments object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WpCommentsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   WpComments Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WpCommentsPeer::$instances[$key])) {
                return WpCommentsPeer::$instances[$key];
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
        WpCommentsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wp_comments
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
        $cls = WpCommentsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WpCommentsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WpCommentsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WpCommentsPeer::addInstanceToPool($obj, $key);
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
     * @return array (WpComments object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WpCommentsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WpCommentsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WpCommentsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WpCommentsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WpCommentsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(WpCommentsPeer::DATABASE_NAME)->getTable(WpCommentsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWpCommentsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWpCommentsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new WpCommentsTableMap());
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
        return WpCommentsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a WpComments or Criteria object.
     *
     * @param      mixed $values Criteria or WpComments object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from WpComments object
        }

        if ($criteria->containsKey(WpCommentsPeer::COMMENT_ID) && $criteria->keyContainsValue(WpCommentsPeer::COMMENT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.WpCommentsPeer::COMMENT_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(WpCommentsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a WpComments or Criteria object.
     *
     * @param      mixed $values Criteria or WpComments object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WpCommentsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WpCommentsPeer::COMMENT_ID);
            $value = $criteria->remove(WpCommentsPeer::COMMENT_ID);
            if ($value) {
                $selectCriteria->add(WpCommentsPeer::COMMENT_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WpCommentsPeer::TABLE_NAME);
            }

        } else { // $values is WpComments object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WpCommentsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wp_comments table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WpCommentsPeer::TABLE_NAME, $con, WpCommentsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WpCommentsPeer::clearInstancePool();
            WpCommentsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a WpComments or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or WpComments object or primary key or array of primary keys
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
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WpCommentsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof WpComments) { // it's a model object
            // invalidate the cache for this single object
            WpCommentsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WpCommentsPeer::DATABASE_NAME);
            $criteria->add(WpCommentsPeer::COMMENT_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WpCommentsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WpCommentsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WpCommentsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given WpComments object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      WpComments $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WpCommentsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WpCommentsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(WpCommentsPeer::DATABASE_NAME, WpCommentsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return WpComments
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WpCommentsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WpCommentsPeer::DATABASE_NAME);
        $criteria->add(WpCommentsPeer::COMMENT_ID, $pk);

        $v = WpCommentsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return WpComments[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WpCommentsPeer::DATABASE_NAME);
            $criteria->add(WpCommentsPeer::COMMENT_ID, $pks, Criteria::IN);
            $objs = WpCommentsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWpCommentsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWpCommentsPeer::buildTableMap();

