<?php


/**
 * Base class that represents a query for the 'wp_posts' table.
 *
 *
 *
 * @method WpPostsQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method WpPostsQuery orderByPostAuthor($order = Criteria::ASC) Order by the post_author column
 * @method WpPostsQuery orderByPostDate($order = Criteria::ASC) Order by the post_date column
 * @method WpPostsQuery orderByPostDateGmt($order = Criteria::ASC) Order by the post_date_gmt column
 * @method WpPostsQuery orderByPostContent($order = Criteria::ASC) Order by the post_content column
 * @method WpPostsQuery orderByPostTitle($order = Criteria::ASC) Order by the post_title column
 * @method WpPostsQuery orderByPostExcerpt($order = Criteria::ASC) Order by the post_excerpt column
 * @method WpPostsQuery orderByPostStatus($order = Criteria::ASC) Order by the post_status column
 * @method WpPostsQuery orderByCommentStatus($order = Criteria::ASC) Order by the comment_status column
 * @method WpPostsQuery orderByPingStatus($order = Criteria::ASC) Order by the ping_status column
 * @method WpPostsQuery orderByPostPassword($order = Criteria::ASC) Order by the post_password column
 * @method WpPostsQuery orderByPostName($order = Criteria::ASC) Order by the post_name column
 * @method WpPostsQuery orderByToPing($order = Criteria::ASC) Order by the to_ping column
 * @method WpPostsQuery orderByPinged($order = Criteria::ASC) Order by the pinged column
 * @method WpPostsQuery orderByPostModified($order = Criteria::ASC) Order by the post_modified column
 * @method WpPostsQuery orderByPostModifiedGmt($order = Criteria::ASC) Order by the post_modified_gmt column
 * @method WpPostsQuery orderByPostContentFiltered($order = Criteria::ASC) Order by the post_content_filtered column
 * @method WpPostsQuery orderByPostParent($order = Criteria::ASC) Order by the post_parent column
 * @method WpPostsQuery orderByGuid($order = Criteria::ASC) Order by the guid column
 * @method WpPostsQuery orderByMenuOrder($order = Criteria::ASC) Order by the menu_order column
 * @method WpPostsQuery orderByPostType($order = Criteria::ASC) Order by the post_type column
 * @method WpPostsQuery orderByPostMimeType($order = Criteria::ASC) Order by the post_mime_type column
 * @method WpPostsQuery orderByCommentCount($order = Criteria::ASC) Order by the comment_count column
 *
 * @method WpPostsQuery groupById() Group by the ID column
 * @method WpPostsQuery groupByPostAuthor() Group by the post_author column
 * @method WpPostsQuery groupByPostDate() Group by the post_date column
 * @method WpPostsQuery groupByPostDateGmt() Group by the post_date_gmt column
 * @method WpPostsQuery groupByPostContent() Group by the post_content column
 * @method WpPostsQuery groupByPostTitle() Group by the post_title column
 * @method WpPostsQuery groupByPostExcerpt() Group by the post_excerpt column
 * @method WpPostsQuery groupByPostStatus() Group by the post_status column
 * @method WpPostsQuery groupByCommentStatus() Group by the comment_status column
 * @method WpPostsQuery groupByPingStatus() Group by the ping_status column
 * @method WpPostsQuery groupByPostPassword() Group by the post_password column
 * @method WpPostsQuery groupByPostName() Group by the post_name column
 * @method WpPostsQuery groupByToPing() Group by the to_ping column
 * @method WpPostsQuery groupByPinged() Group by the pinged column
 * @method WpPostsQuery groupByPostModified() Group by the post_modified column
 * @method WpPostsQuery groupByPostModifiedGmt() Group by the post_modified_gmt column
 * @method WpPostsQuery groupByPostContentFiltered() Group by the post_content_filtered column
 * @method WpPostsQuery groupByPostParent() Group by the post_parent column
 * @method WpPostsQuery groupByGuid() Group by the guid column
 * @method WpPostsQuery groupByMenuOrder() Group by the menu_order column
 * @method WpPostsQuery groupByPostType() Group by the post_type column
 * @method WpPostsQuery groupByPostMimeType() Group by the post_mime_type column
 * @method WpPostsQuery groupByCommentCount() Group by the comment_count column
 *
 * @method WpPostsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpPostsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpPostsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpPosts findOne(PropelPDO $con = null) Return the first WpPosts matching the query
 * @method WpPosts findOneOrCreate(PropelPDO $con = null) Return the first WpPosts matching the query, or a new WpPosts object populated from the query conditions when no match is found
 *
 * @method WpPosts findOneById(string $ID) Return the first WpPosts filtered by the ID column
 * @method WpPosts findOneByPostAuthor(string $post_author) Return the first WpPosts filtered by the post_author column
 * @method WpPosts findOneByPostDate(string $post_date) Return the first WpPosts filtered by the post_date column
 * @method WpPosts findOneByPostDateGmt(string $post_date_gmt) Return the first WpPosts filtered by the post_date_gmt column
 * @method WpPosts findOneByPostContent(string $post_content) Return the first WpPosts filtered by the post_content column
 * @method WpPosts findOneByPostTitle(string $post_title) Return the first WpPosts filtered by the post_title column
 * @method WpPosts findOneByPostExcerpt(string $post_excerpt) Return the first WpPosts filtered by the post_excerpt column
 * @method WpPosts findOneByPostStatus(string $post_status) Return the first WpPosts filtered by the post_status column
 * @method WpPosts findOneByCommentStatus(string $comment_status) Return the first WpPosts filtered by the comment_status column
 * @method WpPosts findOneByPingStatus(string $ping_status) Return the first WpPosts filtered by the ping_status column
 * @method WpPosts findOneByPostPassword(string $post_password) Return the first WpPosts filtered by the post_password column
 * @method WpPosts findOneByPostName(string $post_name) Return the first WpPosts filtered by the post_name column
 * @method WpPosts findOneByToPing(string $to_ping) Return the first WpPosts filtered by the to_ping column
 * @method WpPosts findOneByPinged(string $pinged) Return the first WpPosts filtered by the pinged column
 * @method WpPosts findOneByPostModified(string $post_modified) Return the first WpPosts filtered by the post_modified column
 * @method WpPosts findOneByPostModifiedGmt(string $post_modified_gmt) Return the first WpPosts filtered by the post_modified_gmt column
 * @method WpPosts findOneByPostContentFiltered(string $post_content_filtered) Return the first WpPosts filtered by the post_content_filtered column
 * @method WpPosts findOneByPostParent(string $post_parent) Return the first WpPosts filtered by the post_parent column
 * @method WpPosts findOneByGuid(string $guid) Return the first WpPosts filtered by the guid column
 * @method WpPosts findOneByMenuOrder(int $menu_order) Return the first WpPosts filtered by the menu_order column
 * @method WpPosts findOneByPostType(string $post_type) Return the first WpPosts filtered by the post_type column
 * @method WpPosts findOneByPostMimeType(string $post_mime_type) Return the first WpPosts filtered by the post_mime_type column
 * @method WpPosts findOneByCommentCount(string $comment_count) Return the first WpPosts filtered by the comment_count column
 *
 * @method array findById(string $ID) Return WpPosts objects filtered by the ID column
 * @method array findByPostAuthor(string $post_author) Return WpPosts objects filtered by the post_author column
 * @method array findByPostDate(string $post_date) Return WpPosts objects filtered by the post_date column
 * @method array findByPostDateGmt(string $post_date_gmt) Return WpPosts objects filtered by the post_date_gmt column
 * @method array findByPostContent(string $post_content) Return WpPosts objects filtered by the post_content column
 * @method array findByPostTitle(string $post_title) Return WpPosts objects filtered by the post_title column
 * @method array findByPostExcerpt(string $post_excerpt) Return WpPosts objects filtered by the post_excerpt column
 * @method array findByPostStatus(string $post_status) Return WpPosts objects filtered by the post_status column
 * @method array findByCommentStatus(string $comment_status) Return WpPosts objects filtered by the comment_status column
 * @method array findByPingStatus(string $ping_status) Return WpPosts objects filtered by the ping_status column
 * @method array findByPostPassword(string $post_password) Return WpPosts objects filtered by the post_password column
 * @method array findByPostName(string $post_name) Return WpPosts objects filtered by the post_name column
 * @method array findByToPing(string $to_ping) Return WpPosts objects filtered by the to_ping column
 * @method array findByPinged(string $pinged) Return WpPosts objects filtered by the pinged column
 * @method array findByPostModified(string $post_modified) Return WpPosts objects filtered by the post_modified column
 * @method array findByPostModifiedGmt(string $post_modified_gmt) Return WpPosts objects filtered by the post_modified_gmt column
 * @method array findByPostContentFiltered(string $post_content_filtered) Return WpPosts objects filtered by the post_content_filtered column
 * @method array findByPostParent(string $post_parent) Return WpPosts objects filtered by the post_parent column
 * @method array findByGuid(string $guid) Return WpPosts objects filtered by the guid column
 * @method array findByMenuOrder(int $menu_order) Return WpPosts objects filtered by the menu_order column
 * @method array findByPostType(string $post_type) Return WpPosts objects filtered by the post_type column
 * @method array findByPostMimeType(string $post_mime_type) Return WpPosts objects filtered by the post_mime_type column
 * @method array findByCommentCount(string $comment_count) Return WpPosts objects filtered by the comment_count column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpPostsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpPostsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpPosts', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpPostsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpPostsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpPostsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpPostsQuery) {
            return $criteria;
        }
        $query = new WpPostsQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   WpPosts|WpPosts[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpPostsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   WpPosts A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `POST_AUTHOR`, `POST_DATE`, `POST_DATE_GMT`, `POST_CONTENT`, `POST_TITLE`, `POST_EXCERPT`, `POST_STATUS`, `COMMENT_STATUS`, `PING_STATUS`, `POST_PASSWORD`, `POST_NAME`, `TO_PING`, `PINGED`, `POST_MODIFIED`, `POST_MODIFIED_GMT`, `POST_CONTENT_FILTERED`, `POST_PARENT`, `GUID`, `MENU_ORDER`, `POST_TYPE`, `POST_MIME_TYPE`, `COMMENT_COUNT` FROM `wp_posts` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new WpPosts();
            $obj->hydrate($row);
            WpPostsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return WpPosts|WpPosts[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|WpPosts[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpPostsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpPostsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpPostsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the post_author column
     *
     * Example usage:
     * <code>
     * $query->filterByPostAuthor(1234); // WHERE post_author = 1234
     * $query->filterByPostAuthor(array(12, 34)); // WHERE post_author IN (12, 34)
     * $query->filterByPostAuthor(array('min' => 12)); // WHERE post_author > 12
     * </code>
     *
     * @param     mixed $postAuthor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostAuthor($postAuthor = null, $comparison = null)
    {
        if (is_array($postAuthor)) {
            $useMinMax = false;
            if (isset($postAuthor['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_AUTHOR, $postAuthor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postAuthor['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_AUTHOR, $postAuthor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_AUTHOR, $postAuthor, $comparison);
    }

    /**
     * Filter the query on the post_date column
     *
     * Example usage:
     * <code>
     * $query->filterByPostDate('2011-03-14'); // WHERE post_date = '2011-03-14'
     * $query->filterByPostDate('now'); // WHERE post_date = '2011-03-14'
     * $query->filterByPostDate(array('max' => 'yesterday')); // WHERE post_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $postDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostDate($postDate = null, $comparison = null)
    {
        if (is_array($postDate)) {
            $useMinMax = false;
            if (isset($postDate['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_DATE, $postDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postDate['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_DATE, $postDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_DATE, $postDate, $comparison);
    }

    /**
     * Filter the query on the post_date_gmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPostDateGmt('2011-03-14'); // WHERE post_date_gmt = '2011-03-14'
     * $query->filterByPostDateGmt('now'); // WHERE post_date_gmt = '2011-03-14'
     * $query->filterByPostDateGmt(array('max' => 'yesterday')); // WHERE post_date_gmt > '2011-03-13'
     * </code>
     *
     * @param     mixed $postDateGmt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostDateGmt($postDateGmt = null, $comparison = null)
    {
        if (is_array($postDateGmt)) {
            $useMinMax = false;
            if (isset($postDateGmt['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_DATE_GMT, $postDateGmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postDateGmt['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_DATE_GMT, $postDateGmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_DATE_GMT, $postDateGmt, $comparison);
    }

    /**
     * Filter the query on the post_content column
     *
     * Example usage:
     * <code>
     * $query->filterByPostContent('fooValue');   // WHERE post_content = 'fooValue'
     * $query->filterByPostContent('%fooValue%'); // WHERE post_content LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postContent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostContent($postContent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postContent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postContent)) {
                $postContent = str_replace('*', '%', $postContent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_CONTENT, $postContent, $comparison);
    }

    /**
     * Filter the query on the post_title column
     *
     * Example usage:
     * <code>
     * $query->filterByPostTitle('fooValue');   // WHERE post_title = 'fooValue'
     * $query->filterByPostTitle('%fooValue%'); // WHERE post_title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostTitle($postTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postTitle)) {
                $postTitle = str_replace('*', '%', $postTitle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_TITLE, $postTitle, $comparison);
    }

    /**
     * Filter the query on the post_excerpt column
     *
     * Example usage:
     * <code>
     * $query->filterByPostExcerpt('fooValue');   // WHERE post_excerpt = 'fooValue'
     * $query->filterByPostExcerpt('%fooValue%'); // WHERE post_excerpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postExcerpt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostExcerpt($postExcerpt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postExcerpt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postExcerpt)) {
                $postExcerpt = str_replace('*', '%', $postExcerpt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_EXCERPT, $postExcerpt, $comparison);
    }

    /**
     * Filter the query on the post_status column
     *
     * Example usage:
     * <code>
     * $query->filterByPostStatus('fooValue');   // WHERE post_status = 'fooValue'
     * $query->filterByPostStatus('%fooValue%'); // WHERE post_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostStatus($postStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postStatus)) {
                $postStatus = str_replace('*', '%', $postStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_STATUS, $postStatus, $comparison);
    }

    /**
     * Filter the query on the comment_status column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentStatus('fooValue');   // WHERE comment_status = 'fooValue'
     * $query->filterByCommentStatus('%fooValue%'); // WHERE comment_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByCommentStatus($commentStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentStatus)) {
                $commentStatus = str_replace('*', '%', $commentStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::COMMENT_STATUS, $commentStatus, $comparison);
    }

    /**
     * Filter the query on the ping_status column
     *
     * Example usage:
     * <code>
     * $query->filterByPingStatus('fooValue');   // WHERE ping_status = 'fooValue'
     * $query->filterByPingStatus('%fooValue%'); // WHERE ping_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pingStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPingStatus($pingStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pingStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pingStatus)) {
                $pingStatus = str_replace('*', '%', $pingStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::PING_STATUS, $pingStatus, $comparison);
    }

    /**
     * Filter the query on the post_password column
     *
     * Example usage:
     * <code>
     * $query->filterByPostPassword('fooValue');   // WHERE post_password = 'fooValue'
     * $query->filterByPostPassword('%fooValue%'); // WHERE post_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostPassword($postPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postPassword)) {
                $postPassword = str_replace('*', '%', $postPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_PASSWORD, $postPassword, $comparison);
    }

    /**
     * Filter the query on the post_name column
     *
     * Example usage:
     * <code>
     * $query->filterByPostName('fooValue');   // WHERE post_name = 'fooValue'
     * $query->filterByPostName('%fooValue%'); // WHERE post_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostName($postName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postName)) {
                $postName = str_replace('*', '%', $postName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_NAME, $postName, $comparison);
    }

    /**
     * Filter the query on the to_ping column
     *
     * Example usage:
     * <code>
     * $query->filterByToPing('fooValue');   // WHERE to_ping = 'fooValue'
     * $query->filterByToPing('%fooValue%'); // WHERE to_ping LIKE '%fooValue%'
     * </code>
     *
     * @param     string $toPing The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByToPing($toPing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($toPing)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $toPing)) {
                $toPing = str_replace('*', '%', $toPing);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::TO_PING, $toPing, $comparison);
    }

    /**
     * Filter the query on the pinged column
     *
     * Example usage:
     * <code>
     * $query->filterByPinged('fooValue');   // WHERE pinged = 'fooValue'
     * $query->filterByPinged('%fooValue%'); // WHERE pinged LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pinged The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPinged($pinged = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pinged)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pinged)) {
                $pinged = str_replace('*', '%', $pinged);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::PINGED, $pinged, $comparison);
    }

    /**
     * Filter the query on the post_modified column
     *
     * Example usage:
     * <code>
     * $query->filterByPostModified('2011-03-14'); // WHERE post_modified = '2011-03-14'
     * $query->filterByPostModified('now'); // WHERE post_modified = '2011-03-14'
     * $query->filterByPostModified(array('max' => 'yesterday')); // WHERE post_modified > '2011-03-13'
     * </code>
     *
     * @param     mixed $postModified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostModified($postModified = null, $comparison = null)
    {
        if (is_array($postModified)) {
            $useMinMax = false;
            if (isset($postModified['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_MODIFIED, $postModified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postModified['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_MODIFIED, $postModified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_MODIFIED, $postModified, $comparison);
    }

    /**
     * Filter the query on the post_modified_gmt column
     *
     * Example usage:
     * <code>
     * $query->filterByPostModifiedGmt('2011-03-14'); // WHERE post_modified_gmt = '2011-03-14'
     * $query->filterByPostModifiedGmt('now'); // WHERE post_modified_gmt = '2011-03-14'
     * $query->filterByPostModifiedGmt(array('max' => 'yesterday')); // WHERE post_modified_gmt > '2011-03-13'
     * </code>
     *
     * @param     mixed $postModifiedGmt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostModifiedGmt($postModifiedGmt = null, $comparison = null)
    {
        if (is_array($postModifiedGmt)) {
            $useMinMax = false;
            if (isset($postModifiedGmt['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_MODIFIED_GMT, $postModifiedGmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postModifiedGmt['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_MODIFIED_GMT, $postModifiedGmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_MODIFIED_GMT, $postModifiedGmt, $comparison);
    }

    /**
     * Filter the query on the post_content_filtered column
     *
     * Example usage:
     * <code>
     * $query->filterByPostContentFiltered('fooValue');   // WHERE post_content_filtered = 'fooValue'
     * $query->filterByPostContentFiltered('%fooValue%'); // WHERE post_content_filtered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postContentFiltered The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostContentFiltered($postContentFiltered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postContentFiltered)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postContentFiltered)) {
                $postContentFiltered = str_replace('*', '%', $postContentFiltered);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_CONTENT_FILTERED, $postContentFiltered, $comparison);
    }

    /**
     * Filter the query on the post_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByPostParent(1234); // WHERE post_parent = 1234
     * $query->filterByPostParent(array(12, 34)); // WHERE post_parent IN (12, 34)
     * $query->filterByPostParent(array('min' => 12)); // WHERE post_parent > 12
     * </code>
     *
     * @param     mixed $postParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostParent($postParent = null, $comparison = null)
    {
        if (is_array($postParent)) {
            $useMinMax = false;
            if (isset($postParent['min'])) {
                $this->addUsingAlias(WpPostsPeer::POST_PARENT, $postParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postParent['max'])) {
                $this->addUsingAlias(WpPostsPeer::POST_PARENT, $postParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_PARENT, $postParent, $comparison);
    }

    /**
     * Filter the query on the guid column
     *
     * Example usage:
     * <code>
     * $query->filterByGuid('fooValue');   // WHERE guid = 'fooValue'
     * $query->filterByGuid('%fooValue%'); // WHERE guid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $guid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByGuid($guid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($guid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $guid)) {
                $guid = str_replace('*', '%', $guid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::GUID, $guid, $comparison);
    }

    /**
     * Filter the query on the menu_order column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuOrder(1234); // WHERE menu_order = 1234
     * $query->filterByMenuOrder(array(12, 34)); // WHERE menu_order IN (12, 34)
     * $query->filterByMenuOrder(array('min' => 12)); // WHERE menu_order > 12
     * </code>
     *
     * @param     mixed $menuOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByMenuOrder($menuOrder = null, $comparison = null)
    {
        if (is_array($menuOrder)) {
            $useMinMax = false;
            if (isset($menuOrder['min'])) {
                $this->addUsingAlias(WpPostsPeer::MENU_ORDER, $menuOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($menuOrder['max'])) {
                $this->addUsingAlias(WpPostsPeer::MENU_ORDER, $menuOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::MENU_ORDER, $menuOrder, $comparison);
    }

    /**
     * Filter the query on the post_type column
     *
     * Example usage:
     * <code>
     * $query->filterByPostType('fooValue');   // WHERE post_type = 'fooValue'
     * $query->filterByPostType('%fooValue%'); // WHERE post_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostType($postType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postType)) {
                $postType = str_replace('*', '%', $postType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_TYPE, $postType, $comparison);
    }

    /**
     * Filter the query on the post_mime_type column
     *
     * Example usage:
     * <code>
     * $query->filterByPostMimeType('fooValue');   // WHERE post_mime_type = 'fooValue'
     * $query->filterByPostMimeType('%fooValue%'); // WHERE post_mime_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postMimeType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByPostMimeType($postMimeType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postMimeType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postMimeType)) {
                $postMimeType = str_replace('*', '%', $postMimeType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::POST_MIME_TYPE, $postMimeType, $comparison);
    }

    /**
     * Filter the query on the comment_count column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentCount(1234); // WHERE comment_count = 1234
     * $query->filterByCommentCount(array(12, 34)); // WHERE comment_count IN (12, 34)
     * $query->filterByCommentCount(array('min' => 12)); // WHERE comment_count > 12
     * </code>
     *
     * @param     mixed $commentCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function filterByCommentCount($commentCount = null, $comparison = null)
    {
        if (is_array($commentCount)) {
            $useMinMax = false;
            if (isset($commentCount['min'])) {
                $this->addUsingAlias(WpPostsPeer::COMMENT_COUNT, $commentCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentCount['max'])) {
                $this->addUsingAlias(WpPostsPeer::COMMENT_COUNT, $commentCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostsPeer::COMMENT_COUNT, $commentCount, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpPosts $wpPosts Object to remove from the list of results
     *
     * @return WpPostsQuery The current query, for fluid interface
     */
    public function prune($wpPosts = null)
    {
        if ($wpPosts) {
            $this->addUsingAlias(WpPostsPeer::ID, $wpPosts->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
