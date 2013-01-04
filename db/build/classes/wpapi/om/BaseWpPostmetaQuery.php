<?php


/**
 * Base class that represents a query for the 'wp_postmeta' table.
 *
 *
 *
 * @method WpPostmetaQuery orderByMetaId($order = Criteria::ASC) Order by the meta_id column
 * @method WpPostmetaQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method WpPostmetaQuery orderByMetaKey($order = Criteria::ASC) Order by the meta_key column
 * @method WpPostmetaQuery orderByMetaValue($order = Criteria::ASC) Order by the meta_value column
 *
 * @method WpPostmetaQuery groupByMetaId() Group by the meta_id column
 * @method WpPostmetaQuery groupByPostId() Group by the post_id column
 * @method WpPostmetaQuery groupByMetaKey() Group by the meta_key column
 * @method WpPostmetaQuery groupByMetaValue() Group by the meta_value column
 *
 * @method WpPostmetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpPostmetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpPostmetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpPostmeta findOne(PropelPDO $con = null) Return the first WpPostmeta matching the query
 * @method WpPostmeta findOneOrCreate(PropelPDO $con = null) Return the first WpPostmeta matching the query, or a new WpPostmeta object populated from the query conditions when no match is found
 *
 * @method WpPostmeta findOneByMetaId(string $meta_id) Return the first WpPostmeta filtered by the meta_id column
 * @method WpPostmeta findOneByPostId(string $post_id) Return the first WpPostmeta filtered by the post_id column
 * @method WpPostmeta findOneByMetaKey(string $meta_key) Return the first WpPostmeta filtered by the meta_key column
 * @method WpPostmeta findOneByMetaValue(string $meta_value) Return the first WpPostmeta filtered by the meta_value column
 *
 * @method array findByMetaId(string $meta_id) Return WpPostmeta objects filtered by the meta_id column
 * @method array findByPostId(string $post_id) Return WpPostmeta objects filtered by the post_id column
 * @method array findByMetaKey(string $meta_key) Return WpPostmeta objects filtered by the meta_key column
 * @method array findByMetaValue(string $meta_value) Return WpPostmeta objects filtered by the meta_value column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpPostmetaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpPostmetaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpPostmeta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpPostmetaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpPostmetaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpPostmetaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpPostmetaQuery) {
            return $criteria;
        }
        $query = new WpPostmetaQuery();
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
     * @return   WpPostmeta|WpPostmeta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpPostmetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpPostmetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpPostmeta A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `META_ID`, `POST_ID`, `META_KEY`, `META_VALUE` FROM `wp_postmeta` WHERE `META_ID` = :p0';
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
            $obj = new WpPostmeta();
            $obj->hydrate($row);
            WpPostmetaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpPostmeta|WpPostmeta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpPostmeta[]|mixed the list of results, formatted by the current formatter
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
     * @return WpPostmetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpPostmetaPeer::META_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpPostmetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpPostmetaPeer::META_ID, $keys, Criteria::IN);
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
     * @return WpPostmetaQuery The current query, for fluid interface
     */
    public function filterByMetaId($metaId = null, $comparison = null)
    {
        if (is_array($metaId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpPostmetaPeer::META_ID, $metaId, $comparison);
    }

    /**
     * Filter the query on the post_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPostId(1234); // WHERE post_id = 1234
     * $query->filterByPostId(array(12, 34)); // WHERE post_id IN (12, 34)
     * $query->filterByPostId(array('min' => 12)); // WHERE post_id > 12
     * </code>
     *
     * @param     mixed $postId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpPostmetaQuery The current query, for fluid interface
     */
    public function filterByPostId($postId = null, $comparison = null)
    {
        if (is_array($postId)) {
            $useMinMax = false;
            if (isset($postId['min'])) {
                $this->addUsingAlias(WpPostmetaPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postId['max'])) {
                $this->addUsingAlias(WpPostmetaPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpPostmetaPeer::POST_ID, $postId, $comparison);
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
     * @return WpPostmetaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpPostmetaPeer::META_KEY, $metaKey, $comparison);
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
     * @return WpPostmetaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpPostmetaPeer::META_VALUE, $metaValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpPostmeta $wpPostmeta Object to remove from the list of results
     *
     * @return WpPostmetaQuery The current query, for fluid interface
     */
    public function prune($wpPostmeta = null)
    {
        if ($wpPostmeta) {
            $this->addUsingAlias(WpPostmetaPeer::META_ID, $wpPostmeta->getMetaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
