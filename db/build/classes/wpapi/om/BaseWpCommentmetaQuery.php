<?php


/**
 * Base class that represents a query for the 'wp_commentmeta' table.
 *
 *
 *
 * @method WpCommentmetaQuery orderByMetaId($order = Criteria::ASC) Order by the meta_id column
 * @method WpCommentmetaQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method WpCommentmetaQuery orderByMetaKey($order = Criteria::ASC) Order by the meta_key column
 * @method WpCommentmetaQuery orderByMetaValue($order = Criteria::ASC) Order by the meta_value column
 *
 * @method WpCommentmetaQuery groupByMetaId() Group by the meta_id column
 * @method WpCommentmetaQuery groupByCommentId() Group by the comment_id column
 * @method WpCommentmetaQuery groupByMetaKey() Group by the meta_key column
 * @method WpCommentmetaQuery groupByMetaValue() Group by the meta_value column
 *
 * @method WpCommentmetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpCommentmetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpCommentmetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpCommentmeta findOne(PropelPDO $con = null) Return the first WpCommentmeta matching the query
 * @method WpCommentmeta findOneOrCreate(PropelPDO $con = null) Return the first WpCommentmeta matching the query, or a new WpCommentmeta object populated from the query conditions when no match is found
 *
 * @method WpCommentmeta findOneByMetaId(string $meta_id) Return the first WpCommentmeta filtered by the meta_id column
 * @method WpCommentmeta findOneByCommentId(string $comment_id) Return the first WpCommentmeta filtered by the comment_id column
 * @method WpCommentmeta findOneByMetaKey(string $meta_key) Return the first WpCommentmeta filtered by the meta_key column
 * @method WpCommentmeta findOneByMetaValue(string $meta_value) Return the first WpCommentmeta filtered by the meta_value column
 *
 * @method array findByMetaId(string $meta_id) Return WpCommentmeta objects filtered by the meta_id column
 * @method array findByCommentId(string $comment_id) Return WpCommentmeta objects filtered by the comment_id column
 * @method array findByMetaKey(string $meta_key) Return WpCommentmeta objects filtered by the meta_key column
 * @method array findByMetaValue(string $meta_value) Return WpCommentmeta objects filtered by the meta_value column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpCommentmetaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpCommentmetaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpCommentmeta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpCommentmetaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpCommentmetaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpCommentmetaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpCommentmetaQuery) {
            return $criteria;
        }
        $query = new WpCommentmetaQuery();
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
     * @return   WpCommentmeta|WpCommentmeta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpCommentmetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpCommentmetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpCommentmeta A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `META_ID`, `COMMENT_ID`, `META_KEY`, `META_VALUE` FROM `wp_commentmeta` WHERE `META_ID` = :p0';
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
            $obj = new WpCommentmeta();
            $obj->hydrate($row);
            WpCommentmetaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpCommentmeta|WpCommentmeta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpCommentmeta[]|mixed the list of results, formatted by the current formatter
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
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpCommentmetaPeer::META_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpCommentmetaPeer::META_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the meta_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaId(1234); // WHERE meta_id = 1234
     * $query->filterByMetaId(array(12, 34)); // WHERE meta_id IN (12, 34)
     * $query->filterByMetaId(array('min' => 12)); // WHERE meta_id > 12
     * </code>
     *
     * @param     mixed $metaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByMetaId($metaId = null, $comparison = null)
    {
        if (is_array($metaId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpCommentmetaPeer::META_ID, $metaId, $comparison);
    }

    /**
     * Filter the query on the comment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentId(1234); // WHERE comment_id = 1234
     * $query->filterByCommentId(array(12, 34)); // WHERE comment_id IN (12, 34)
     * $query->filterByCommentId(array('min' => 12)); // WHERE comment_id > 12
     * </code>
     *
     * @param     mixed $commentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByCommentId($commentId = null, $comparison = null)
    {
        if (is_array($commentId)) {
            $useMinMax = false;
            if (isset($commentId['min'])) {
                $this->addUsingAlias(WpCommentmetaPeer::COMMENT_ID, $commentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commentId['max'])) {
                $this->addUsingAlias(WpCommentmetaPeer::COMMENT_ID, $commentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpCommentmetaPeer::COMMENT_ID, $commentId, $comparison);
    }

    /**
     * Filter the query on the meta_key column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaKey('fooValue');   // WHERE meta_key = 'fooValue'
     * $query->filterByMetaKey('%fooValue%'); // WHERE meta_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metaKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByMetaKey($metaKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metaKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metaKey)) {
                $metaKey = str_replace('*', '%', $metaKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentmetaPeer::META_KEY, $metaKey, $comparison);
    }

    /**
     * Filter the query on the meta_value column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaValue('fooValue');   // WHERE meta_value = 'fooValue'
     * $query->filterByMetaValue('%fooValue%'); // WHERE meta_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metaValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function filterByMetaValue($metaValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metaValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metaValue)) {
                $metaValue = str_replace('*', '%', $metaValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpCommentmetaPeer::META_VALUE, $metaValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpCommentmeta $wpCommentmeta Object to remove from the list of results
     *
     * @return WpCommentmetaQuery The current query, for fluid interface
     */
    public function prune($wpCommentmeta = null)
    {
        if ($wpCommentmeta) {
            $this->addUsingAlias(WpCommentmetaPeer::META_ID, $wpCommentmeta->getMetaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
