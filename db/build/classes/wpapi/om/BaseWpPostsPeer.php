<?php


/**
 * Base static class for performing query and update operations on the 'wp_posts' table.
 *
 *
 *
 * @package propel.generator.wpapi.om
 */
abstract class BaseWpPostsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'wpapi';

    /** the table name for this class */
    const TABLE_NAME = 'wp_posts';

    /** the related Propel class for this table */
    const OM_CLASS = 'WpPosts';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WpPostsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the ID field */
    const ID = 'wp_posts.ID';

    /** the column name for the POST_AUTHOR field */
    const POST_AUTHOR = 'wp_posts.POST_AUTHOR';

    /** the column name for the POST_DATE field */
    const POST_DATE = 'wp_posts.POST_DATE';

    /** the column name for the POST_DATE_GMT field */
    const POST_DATE_GMT = 'wp_posts.POST_DATE_GMT';

    /** the column name for the POST_CONTENT field */
    const POST_CONTENT = 'wp_posts.POST_CONTENT';

    /** the column name for the POST_TITLE field */
    const POST_TITLE = 'wp_posts.POST_TITLE';

    /** the column name for the POST_EXCERPT field */
    const POST_EXCERPT = 'wp_posts.POST_EXCERPT';

    /** the column name for the POST_STATUS field */
    const POST_STATUS = 'wp_posts.POST_STATUS';

    /** the column name for the COMMENT_STATUS field */
    const COMMENT_STATUS = 'wp_posts.COMMENT_STATUS';

    /** the column name for the PING_STATUS field */
    const PING_STATUS = 'wp_posts.PING_STATUS';

    /** the column name for the POST_PASSWORD field */
    const POST_PASSWORD = 'wp_posts.POST_PASSWORD';

    /** the column name for the POST_NAME field */
    const POST_NAME = 'wp_posts.POST_NAME';

    /** the column name for the TO_PING field */
    const TO_PING = 'wp_posts.TO_PING';

    /** the column name for the PINGED field */
    const PINGED = 'wp_posts.PINGED';

    /** the column name for the POST_MODIFIED field */
    const POST_MODIFIED = 'wp_posts.POST_MODIFIED';

    /** the column name for the POST_MODIFIED_GMT field */
    const POST_MODIFIED_GMT = 'wp_posts.POST_MODIFIED_GMT';

    /** the column name for the POST_CONTENT_FILTERED field */
    const POST_CONTENT_FILTERED = 'wp_posts.POST_CONTENT_FILTERED';

    /** the column name for the POST_PARENT field */
    const POST_PARENT = 'wp_posts.POST_PARENT';

    /** the column name for the GUID field */
    const GUID = 'wp_posts.GUID';

    /** the column name for the MENU_ORDER field */
    const MENU_ORDER = 'wp_posts.MENU_ORDER';

    /** the column name for the POST_TYPE field */
    const POST_TYPE = 'wp_posts.POST_TYPE';

    /** the column name for the POST_MIME_TYPE field */
    const POST_MIME_TYPE = 'wp_posts.POST_MIME_TYPE';

    /** the column name for the COMMENT_COUNT field */
    const COMMENT_COUNT = 'wp_posts.COMMENT_COUNT';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of WpPosts objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array WpPosts[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WpPostsPeer::$fieldNames[WpPostsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'PostAuthor', 'PostDate', 'PostDateGmt', 'PostContent', 'PostTitle', 'PostExcerpt', 'PostStatus', 'CommentStatus', 'PingStatus', 'PostPassword', 'PostName', 'ToPing', 'Pinged', 'PostModified', 'PostModifiedGmt', 'PostContentFiltered', 'PostParent', 'Guid', 'MenuOrder', 'PostType', 'PostMimeType', 'CommentCount', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'postAuthor', 'postDate', 'postDateGmt', 'postContent', 'postTitle', 'postExcerpt', 'postStatus', 'commentStatus', 'pingStatus', 'postPassword', 'postName', 'toPing', 'pinged', 'postModified', 'postModifiedGmt', 'postContentFiltered', 'postParent', 'guid', 'menuOrder', 'postType', 'postMimeType', 'commentCount', ),
        BasePeer::TYPE_COLNAME => array (WpPostsPeer::ID, WpPostsPeer::POST_AUTHOR, WpPostsPeer::POST_DATE, WpPostsPeer::POST_DATE_GMT, WpPostsPeer::POST_CONTENT, WpPostsPeer::POST_TITLE, WpPostsPeer::POST_EXCERPT, WpPostsPeer::POST_STATUS, WpPostsPeer::COMMENT_STATUS, WpPostsPeer::PING_STATUS, WpPostsPeer::POST_PASSWORD, WpPostsPeer::POST_NAME, WpPostsPeer::TO_PING, WpPostsPeer::PINGED, WpPostsPeer::POST_MODIFIED, WpPostsPeer::POST_MODIFIED_GMT, WpPostsPeer::POST_CONTENT_FILTERED, WpPostsPeer::POST_PARENT, WpPostsPeer::GUID, WpPostsPeer::MENU_ORDER, WpPostsPeer::POST_TYPE, WpPostsPeer::POST_MIME_TYPE, WpPostsPeer::COMMENT_COUNT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'POST_AUTHOR', 'POST_DATE', 'POST_DATE_GMT', 'POST_CONTENT', 'POST_TITLE', 'POST_EXCERPT', 'POST_STATUS', 'COMMENT_STATUS', 'PING_STATUS', 'POST_PASSWORD', 'POST_NAME', 'TO_PING', 'PINGED', 'POST_MODIFIED', 'POST_MODIFIED_GMT', 'POST_CONTENT_FILTERED', 'POST_PARENT', 'GUID', 'MENU_ORDER', 'POST_TYPE', 'POST_MIME_TYPE', 'COMMENT_COUNT', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WpPostsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PostAuthor' => 1, 'PostDate' => 2, 'PostDateGmt' => 3, 'PostContent' => 4, 'PostTitle' => 5, 'PostExcerpt' => 6, 'PostStatus' => 7, 'CommentStatus' => 8, 'PingStatus' => 9, 'PostPassword' => 10, 'PostName' => 11, 'ToPing' => 12, 'Pinged' => 13, 'PostModified' => 14, 'PostModifiedGmt' => 15, 'PostContentFiltered' => 16, 'PostParent' => 17, 'Guid' => 18, 'MenuOrder' => 19, 'PostType' => 20, 'PostMimeType' => 21, 'CommentCount' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'postAuthor' => 1, 'postDate' => 2, 'postDateGmt' => 3, 'postContent' => 4, 'postTitle' => 5, 'postExcerpt' => 6, 'postStatus' => 7, 'commentStatus' => 8, 'pingStatus' => 9, 'postPassword' => 10, 'postName' => 11, 'toPing' => 12, 'pinged' => 13, 'postModified' => 14, 'postModifiedGmt' => 15, 'postContentFiltered' => 16, 'postParent' => 17, 'guid' => 18, 'menuOrder' => 19, 'postType' => 20, 'postMimeType' => 21, 'commentCount' => 22, ),
        BasePeer::TYPE_COLNAME => array (WpPostsPeer::ID => 0, WpPostsPeer::POST_AUTHOR => 1, WpPostsPeer::POST_DATE => 2, WpPostsPeer::POST_DATE_GMT => 3, WpPostsPeer::POST_CONTENT => 4, WpPostsPeer::POST_TITLE => 5, WpPostsPeer::POST_EXCERPT => 6, WpPostsPeer::POST_STATUS => 7, WpPostsPeer::COMMENT_STATUS => 8, WpPostsPeer::PING_STATUS => 9, WpPostsPeer::POST_PASSWORD => 10, WpPostsPeer::POST_NAME => 11, WpPostsPeer::TO_PING => 12, WpPostsPeer::PINGED => 13, WpPostsPeer::POST_MODIFIED => 14, WpPostsPeer::POST_MODIFIED_GMT => 15, WpPostsPeer::POST_CONTENT_FILTERED => 16, WpPostsPeer::POST_PARENT => 17, WpPostsPeer::GUID => 18, WpPostsPeer::MENU_ORDER => 19, WpPostsPeer::POST_TYPE => 20, WpPostsPeer::POST_MIME_TYPE => 21, WpPostsPeer::COMMENT_COUNT => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'POST_AUTHOR' => 1, 'POST_DATE' => 2, 'POST_DATE_GMT' => 3, 'POST_CONTENT' => 4, 'POST_TITLE' => 5, 'POST_EXCERPT' => 6, 'POST_STATUS' => 7, 'COMMENT_STATUS' => 8, 'PING_STATUS' => 9, 'POST_PASSWORD' => 10, 'POST_NAME' => 11, 'TO_PING' => 12, 'PINGED' => 13, 'POST_MODIFIED' => 14, 'POST_MODIFIED_GMT' => 15, 'POST_CONTENT_FILTERED' => 16, 'POST_PARENT' => 17, 'GUID' => 18, 'MENU_ORDER' => 19, 'POST_TYPE' => 20, 'POST_MIME_TYPE' => 21, 'COMMENT_COUNT' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'post_author' => 1, 'post_date' => 2, 'post_date_gmt' => 3, 'post_content' => 4, 'post_title' => 5, 'post_excerpt' => 6, 'post_status' => 7, 'comment_status' => 8, 'ping_status' => 9, 'post_password' => 10, 'post_name' => 11, 'to_ping' => 12, 'pinged' => 13, 'post_modified' => 14, 'post_modified_gmt' => 15, 'post_content_filtered' => 16, 'post_parent' => 17, 'guid' => 18, 'menu_order' => 19, 'post_type' => 20, 'post_mime_type' => 21, 'comment_count' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $toNames = WpPostsPeer::getFieldNames($toType);
        $key = isset(WpPostsPeer::$fieldKeys[$fromType][$name]) ? WpPostsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WpPostsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, WpPostsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WpPostsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. WpPostsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WpPostsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(WpPostsPeer::ID);
            $criteria->addSelectColumn(WpPostsPeer::POST_AUTHOR);
            $criteria->addSelectColumn(WpPostsPeer::POST_DATE);
            $criteria->addSelectColumn(WpPostsPeer::POST_DATE_GMT);
            $criteria->addSelectColumn(WpPostsPeer::POST_CONTENT);
            $criteria->addSelectColumn(WpPostsPeer::POST_TITLE);
            $criteria->addSelectColumn(WpPostsPeer::POST_EXCERPT);
            $criteria->addSelectColumn(WpPostsPeer::POST_STATUS);
            $criteria->addSelectColumn(WpPostsPeer::COMMENT_STATUS);
            $criteria->addSelectColumn(WpPostsPeer::PING_STATUS);
            $criteria->addSelectColumn(WpPostsPeer::POST_PASSWORD);
            $criteria->addSelectColumn(WpPostsPeer::POST_NAME);
            $criteria->addSelectColumn(WpPostsPeer::TO_PING);
            $criteria->addSelectColumn(WpPostsPeer::PINGED);
            $criteria->addSelectColumn(WpPostsPeer::POST_MODIFIED);
            $criteria->addSelectColumn(WpPostsPeer::POST_MODIFIED_GMT);
            $criteria->addSelectColumn(WpPostsPeer::POST_CONTENT_FILTERED);
            $criteria->addSelectColumn(WpPostsPeer::POST_PARENT);
            $criteria->addSelectColumn(WpPostsPeer::GUID);
            $criteria->addSelectColumn(WpPostsPeer::MENU_ORDER);
            $criteria->addSelectColumn(WpPostsPeer::POST_TYPE);
            $criteria->addSelectColumn(WpPostsPeer::POST_MIME_TYPE);
            $criteria->addSelectColumn(WpPostsPeer::COMMENT_COUNT);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.POST_AUTHOR');
            $criteria->addSelectColumn($alias . '.POST_DATE');
            $criteria->addSelectColumn($alias . '.POST_DATE_GMT');
            $criteria->addSelectColumn($alias . '.POST_CONTENT');
            $criteria->addSelectColumn($alias . '.POST_TITLE');
            $criteria->addSelectColumn($alias . '.POST_EXCERPT');
            $criteria->addSelectColumn($alias . '.POST_STATUS');
            $criteria->addSelectColumn($alias . '.COMMENT_STATUS');
            $criteria->addSelectColumn($alias . '.PING_STATUS');
            $criteria->addSelectColumn($alias . '.POST_PASSWORD');
            $criteria->addSelectColumn($alias . '.POST_NAME');
            $criteria->addSelectColumn($alias . '.TO_PING');
            $criteria->addSelectColumn($alias . '.PINGED');
            $criteria->addSelectColumn($alias . '.POST_MODIFIED');
            $criteria->addSelectColumn($alias . '.POST_MODIFIED_GMT');
            $criteria->addSelectColumn($alias . '.POST_CONTENT_FILTERED');
            $criteria->addSelectColumn($alias . '.POST_PARENT');
            $criteria->addSelectColumn($alias . '.GUID');
            $criteria->addSelectColumn($alias . '.MENU_ORDER');
            $criteria->addSelectColumn($alias . '.POST_TYPE');
            $criteria->addSelectColumn($alias . '.POST_MIME_TYPE');
            $criteria->addSelectColumn($alias . '.COMMENT_COUNT');
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
        $criteria->setPrimaryTableName(WpPostsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WpPostsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WpPostsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 WpPosts
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WpPostsPeer::doSelect($critcopy, $con);
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
        return WpPostsPeer::populateObjects(WpPostsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WpPostsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WpPostsPeer::DATABASE_NAME);

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
     * @param      WpPosts $obj A WpPosts object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            WpPostsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A WpPosts object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof WpPosts) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or WpPosts object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WpPostsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   WpPosts Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WpPostsPeer::$instances[$key])) {
                return WpPostsPeer::$instances[$key];
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
        WpPostsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wp_posts
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
        $cls = WpPostsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WpPostsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WpPostsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WpPostsPeer::addInstanceToPool($obj, $key);
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
     * @return array (WpPosts object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WpPostsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WpPostsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WpPostsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WpPostsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WpPostsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(WpPostsPeer::DATABASE_NAME)->getTable(WpPostsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWpPostsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWpPostsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new WpPostsTableMap());
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
        return WpPostsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a WpPosts or Criteria object.
     *
     * @param      mixed $values Criteria or WpPosts object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from WpPosts object
        }

        if ($criteria->containsKey(WpPostsPeer::ID) && $criteria->keyContainsValue(WpPostsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.WpPostsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(WpPostsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a WpPosts or Criteria object.
     *
     * @param      mixed $values Criteria or WpPosts object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WpPostsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WpPostsPeer::ID);
            $value = $criteria->remove(WpPostsPeer::ID);
            if ($value) {
                $selectCriteria->add(WpPostsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WpPostsPeer::TABLE_NAME);
            }

        } else { // $values is WpPosts object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WpPostsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wp_posts table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WpPostsPeer::TABLE_NAME, $con, WpPostsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WpPostsPeer::clearInstancePool();
            WpPostsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a WpPosts or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or WpPosts object or primary key or array of primary keys
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
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WpPostsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof WpPosts) { // it's a model object
            // invalidate the cache for this single object
            WpPostsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WpPostsPeer::DATABASE_NAME);
            $criteria->add(WpPostsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WpPostsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WpPostsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WpPostsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given WpPosts object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      WpPosts $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WpPostsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WpPostsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(WpPostsPeer::DATABASE_NAME, WpPostsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return WpPosts
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WpPostsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WpPostsPeer::DATABASE_NAME);
        $criteria->add(WpPostsPeer::ID, $pk);

        $v = WpPostsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return WpPosts[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WpPostsPeer::DATABASE_NAME);
            $criteria->add(WpPostsPeer::ID, $pks, Criteria::IN);
            $objs = WpPostsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWpPostsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWpPostsPeer::buildTableMap();

