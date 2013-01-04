<?php


/**
 * Base class that represents a query for the 'wp_comments' table.
 *
 *
 *
 * @method WpCommentsQuery orderByCommentId($order = Criteria::ASC) Order by the comment_ID column
 * @method WpCommentsQuery orderByCommentPostId($order = Criteria::ASC) Order by the comment_post_ID column
 * @method WpCommentsQuery orderByCommentAuthor($order = Criteria::ASC) Order by the comment_author column
 * @method WpCommentsQuery orderByCommentAuthorEmail($order = Criteria::ASC) Order by the comment_author_email column
 * @method WpCommentsQuery orderByCommentAuthorUrl($order = Criteria::ASC) Order by the comment_author_url column
 * @method WpCommentsQuery orderByCommentAuthorIp($order = Criteria::ASC) Order by the comment_author_IP column
 * @method WpCommentsQuery orderByCommentDate($order = Criteria::ASC) Order by the comment_date column
 * @method WpCommentsQuery orderByCommentDateGmt($order = Criteria::ASC) Order by the comment_date_gmt column
 * @method WpCommentsQuery orderByCommentContent($order = Criteria::ASC) Order by the comment_content column
 * @method WpCommentsQuery orderByCommentKarma($order = Criteria::ASC) Order by the comment_karma column
 * @method WpCommentsQuery orderByCommentApproved($order = Criteria::ASC) Order by the comment_approved column
 * @method WpCommentsQuery orderByCommentAgent($order = Criteria::ASC) Order by the comment_agent column
 * @method WpCommentsQuery orderByCommentType($order = Criteria::ASC) Order by the comment_type column
 * @method WpCommentsQuery orderByCommentParent($order = Criteria::ASC) Order by the comment_parent column
 * @method WpCommentsQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method WpCommentsQuery groupByCommentId() Group by the comment_ID column
 * @method WpCommentsQuery groupByCommentPostId() Group by the comment_post_ID column
 * @method WpCommentsQuery groupByCommentAuthor() Group by the comment_author column
 * @method WpCommentsQuery groupByCommentAuthorEmail() Group by the comment_author_email column
 * @method WpCommentsQuery groupByCommentAuthorUrl() Group by the comment_author_url column
 * @method WpCommentsQuery groupByCommentAuthorIp() Group by the comment_author_IP column
 * @method WpCommentsQuery groupByCommentDate() Group by the comment_date column
 * @method WpCommentsQuery groupByCommentDateGmt() Group by the comment_date_gmt column
 * @method WpCommentsQuery groupByCommentContent() Group by the comment_content column
 * @method WpCommentsQuery groupByCommentKarma() Group by the comment_karma column
 * @method WpCommentsQuery groupByCommentApproved() Group by the comment_approved column
 * @method WpCommentsQuery groupByCommentAgent() Group by the comment_agent column
 * @method WpCommentsQuery groupByCommentType() Group by the comment_type column
 * @method WpCommentsQuery groupByCommentParent() Group by the comment_parent column
 * @method WpCommentsQuery groupByUserId() Group by the user_id column
 *
 * @method WpCommentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpCommentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpCommentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpComments findOne(PropelPDO $con = null) Return the first WpComments matching the query
 * @method WpComments findOneOrCreate(PropelPDO $con = null) Return the first WpComments matching the query, or a new WpComments object populated from the query conditions when no match is found
 *
 * @method WpComments findOneByCommentId(string $comment_ID) Return the first WpComments filtered by the comment_ID column
 * @method WpComments findOneByCommentPostId(string $comment_post_ID) Return the first WpComments filtered by the comment_post_ID column
 * @method WpComments findOneByCommentAuthor(string $comment_author) Return the first WpComments filtered by the comment_author column
 * @method WpComments findOneByCommentAuthorEmail(string $comment_author_email) Return the first WpComments filtered by the comment_author_email column
 * @method WpComments findOneByCommentAuthorUrl(string $comment_author_url) Return the first WpComments filtered by the comment_author_url column
 * @method WpComments findOneByCommentAuthorIp(string $comment_author_IP) Return the first WpComments filtered by the comment_author_IP column
 * @method WpComments findOneByCommentDate(string $comment_date) Return the first WpComments filtered by the comment_date column
 * @method WpComments findOneByCommentDateGmt(string $comment_date_gmt) Return the first WpComments filtered by the comment_date_gmt column
 * @method WpComments findOneByCommentContent(string $comment_content) Return the first WpComments filtered by the comment_content column
 * @method WpComments findOneByCommentKarma(int $comment_karma) Return the first WpComments filtered by the comment_karma column
 * @method WpComments findOneByCommentApproved(string $comment_approved) Return the first WpComments filtered by the comment_approved column
 * @method WpComments findOneByCommentAgent(string $comment_agent) Return the first WpComments filtered by the comment_agent column
 * @method WpComments findOneByCommentType(string $comment_type) Return the first WpComments filtered by the comment_type column
 * @method WpComments findOneByCommentParent(string $comment_parent) Return the first WpComments filtered by the comment_parent column
 * @method WpComments findOneByUserId(string $user_id) Return the first WpComments filtered by the user_id column
 *
 * @method array findByCommentId(string $comment_ID) Return WpComments objects filtered by the comment_ID column
 * @method array findByCommentPostId(string $comment_post_ID) Return WpComments objects filtered by the comment_post_ID column
 * @method array findByCommentAuthor(string $comment_author) Return WpComments objects filtered by the comment_author column
 * @method array findByCommentAuthorEmail(string $comment_author_email) Return WpComments objects filtered by the comment_author_email column
 * @method array findByCommentAuthorUrl(string $comment_author_url) Return WpComments objects filtered by the comment_author_url column
 * @method array findByCommentAuthorIp(string $comment_author_IP) Return WpComments objects filtered by the comment_author_IP column
 * @method array findByCommentDate(string $comment_date) Return WpComments objects filtered by the comment_date column
 * @method array findByCommentDateGmt(string $comment_date_gmt) Return WpComments objects filtered by the comment_date_gmt column
 * @method array findByCommentContent(string $comment_content) Return WpComments objects filtered by the comment_content column
 * @method array findByCommentKarma(int $comment_karma) Return WpComments objects filtered by the comment_karma column
 * @method array findByCommentApproved(string $comment_approved) Return WpComments objects filtered by the comment_approved column
 * @method array findByCommentAgent(string $comment_agent) Return WpComments objects filtered by the comment_agent column
 * @method array findByCommentType(string $comment_type) Return WpComments objects filtered by the comment_type column
 * @method array findByCommentParent(string $comment_parent) Return WpComments objects filtered by the comment_parent column
 * @method array findByUserId(string $user_id) Return WpComments objects filtered by the user_id column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpCommentsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpCommentsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpComments', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpCommentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpCommentsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpCommentsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpCommentsQuery) {
            return $criteria;
        }
        $query = new WpCommentsQuery();
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
     * @return   WpComments|WpComments[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpCommentsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpComments A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `COMMENT_ID`, `COMMENT_POST_ID`, `COMMENT_AUTHOR`, `COMMENT_AUTHOR_EMAIL`, `COMMENT_AUTHOR_URL`, `COMMENT_AUTHOR_IP`, `COMMENT_DATE`, `COMMENT_DATE_GMT`, `COMMENT_CONTENT`, `COMMENT_KARMA`, `COMMENT_APPROVED`, `COMMENT_AGENT`, `COMMENT_TYPE`, `COMMENT_PARENT`, `USER_ID` FROM `wp_comments` WHERE `COMMENT_ID` = :p0';
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
            $obj = new WpComments();
            $obj->hydrate($row);
            WpCommentsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpComments|WpComments[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpComments[]|mixed the list of results, formatted by the current formatter
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
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the comment_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentId(1234); // WHERE comment_ID = 1234
     * $query->filterByCommentId(array(12, 34)); // WHERE comment_ID IN (12, 34)
     * $query->filterByCommentId(array('min' => 12)); // WHERE comment_ID > 12
     * </code>
     *
     * @param     mixed $commentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentId($commentId = null, $comparison = null)
    {
        if (is_array($commentId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_ID, $commentId, $comparison);
    }

    /**
     * Filter the query on the comment_post_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentPostId(1234); // WHERE comment_post_ID = 1234
     * $query->filterByCommentPostId(array(12, 34)); // WHERE comment_post_ID IN (12, 34)
     * $query->filterByCommentPostId(array('min' => 12)); // WHERE comment_post_ID > 12
     * </code>
     *
     * @param     mixed $commentPostId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentPostId($commentPostId = null, $comparison = null)
    {
        if (is_array($commentPostId)) {
            $useMinMax = false;
            if (isset($commentPostId['min'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_POST_ID, $commentPostId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentPostId['max'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_POST_ID, $commentPostId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_POST_ID, $commentPostId, $comparison);
    }

    /**
     * Filter the query on the comment_author column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentAuthor('fooValue');   // WHERE comment_author = 'fooValue'
     * $query->filterByCommentAuthor('%fooValue%'); // WHERE comment_author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentAuthor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentAuthor($commentAuthor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentAuthor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentAuthor)) {
                $commentAuthor = str_replace('*', '%', $commentAuthor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_AUTHOR, $commentAuthor, $comparison);
    }

    /**
     * Filter the query on the comment_author_email column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentAuthorEmail('fooValue');   // WHERE comment_author_email = 'fooValue'
     * $query->filterByCommentAuthorEmail('%fooValue%'); // WHERE comment_author_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentAuthorEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentAuthorEmail($commentAuthorEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentAuthorEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentAuthorEmail)) {
                $commentAuthorEmail = str_replace('*', '%', $commentAuthorEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_AUTHOR_EMAIL, $commentAuthorEmail, $comparison);
    }

    /**
     * Filter the query on the comment_author_url column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentAuthorUrl('fooValue');   // WHERE comment_author_url = 'fooValue'
     * $query->filterByCommentAuthorUrl('%fooValue%'); // WHERE comment_author_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentAuthorUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentAuthorUrl($commentAuthorUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentAuthorUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentAuthorUrl)) {
                $commentAuthorUrl = str_replace('*', '%', $commentAuthorUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_AUTHOR_URL, $commentAuthorUrl, $comparison);
    }

    /**
     * Filter the query on the comment_author_IP column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentAuthorIp('fooValue');   // WHERE comment_author_IP = 'fooValue'
     * $query->filterByCommentAuthorIp('%fooValue%'); // WHERE comment_author_IP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentAuthorIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentAuthorIp($commentAuthorIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentAuthorIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentAuthorIp)) {
                $commentAuthorIp = str_replace('*', '%', $commentAuthorIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_AUTHOR_IP, $commentAuthorIp, $comparison);
    }

    /**
     * Filter the query on the comment_date column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentDate('2011-03-14'); // WHERE comment_date = '2011-03-14'
     * $query->filterByCommentDate('now'); // WHERE comment_date = '2011-03-14'
     * $query->filterByCommentDate(array('max' => 'yesterday')); // WHERE comment_date > '2011-03-13'
     * </code>
     *
     * @param     mixed $commentDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentDate($commentDate = null, $comparison = null)
    {
        if (is_array($commentDate)) {
            $useMinMax = false;
            if (isset($commentDate['min'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE, $commentDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentDate['max'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE, $commentDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE, $commentDate, $comparison);
    }

    /**
     * Filter the query on the comment_date_gmt column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentDateGmt('2011-03-14'); // WHERE comment_date_gmt = '2011-03-14'
     * $query->filterByCommentDateGmt('now'); // WHERE comment_date_gmt = '2011-03-14'
     * $query->filterByCommentDateGmt(array('max' => 'yesterday')); // WHERE comment_date_gmt > '2011-03-13'
     * </code>
     *
     * @param     mixed $commentDateGmt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentDateGmt($commentDateGmt = null, $comparison = null)
    {
        if (is_array($commentDateGmt)) {
            $useMinMax = false;
            if (isset($commentDateGmt['min'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE_GMT, $commentDateGmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentDateGmt['max'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE_GMT, $commentDateGmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_DATE_GMT, $commentDateGmt, $comparison);
    }

    /**
     * Filter the query on the comment_content column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentContent('fooValue');   // WHERE comment_content = 'fooValue'
     * $query->filterByCommentContent('%fooValue%'); // WHERE comment_content LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentContent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentContent($commentContent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentContent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentContent)) {
                $commentContent = str_replace('*', '%', $commentContent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_CONTENT, $commentContent, $comparison);
    }

    /**
     * Filter the query on the comment_karma column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentKarma(1234); // WHERE comment_karma = 1234
     * $query->filterByCommentKarma(array(12, 34)); // WHERE comment_karma IN (12, 34)
     * $query->filterByCommentKarma(array('min' => 12)); // WHERE comment_karma > 12
     * </code>
     *
     * @param     mixed $commentKarma The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentKarma($commentKarma = null, $comparison = null)
    {
        if (is_array($commentKarma)) {
            $useMinMax = false;
            if (isset($commentKarma['min'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_KARMA, $commentKarma['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentKarma['max'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_KARMA, $commentKarma['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_KARMA, $commentKarma, $comparison);
    }

    /**
     * Filter the query on the comment_approved column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentApproved('fooValue');   // WHERE comment_approved = 'fooValue'
     * $query->filterByCommentApproved('%fooValue%'); // WHERE comment_approved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentApproved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentApproved($commentApproved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentApproved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentApproved)) {
                $commentApproved = str_replace('*', '%', $commentApproved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_APPROVED, $commentApproved, $comparison);
    }

    /**
     * Filter the query on the comment_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentAgent('fooValue');   // WHERE comment_agent = 'fooValue'
     * $query->filterByCommentAgent('%fooValue%'); // WHERE comment_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentAgent($commentAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentAgent)) {
                $commentAgent = str_replace('*', '%', $commentAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_AGENT, $commentAgent, $comparison);
    }

    /**
     * Filter the query on the comment_type column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentType('fooValue');   // WHERE comment_type = 'fooValue'
     * $query->filterByCommentType('%fooValue%'); // WHERE comment_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentType($commentType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentType)) {
                $commentType = str_replace('*', '%', $commentType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_TYPE, $commentType, $comparison);
    }

    /**
     * Filter the query on the comment_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentParent(1234); // WHERE comment_parent = 1234
     * $query->filterByCommentParent(array(12, 34)); // WHERE comment_parent IN (12, 34)
     * $query->filterByCommentParent(array('min' => 12)); // WHERE comment_parent > 12
     * </code>
     *
     * @param     mixed $commentParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByCommentParent($commentParent = null, $comparison = null)
    {
        if (is_array($commentParent)) {
            $useMinMax = false;
            if (isset($commentParent['min'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_PARENT, $commentParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentParent['max'])) {
                $this->addUsingAlias(WpCommentsPeer::COMMENT_PARENT, $commentParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::COMMENT_PARENT, $commentParent, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(WpCommentsPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(WpCommentsPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentsPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpComments $wpComments Object to remove from the list of results
     *
     * @return WpCommentsQuery The current query, for fluid interface
     */
    public function prune($wpComments = null)
    {
        if ($wpComments) {
            $this->addUsingAlias(WpCommentsPeer::COMMENT_ID, $wpComments->getCommentId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
