<?php


/**
 * Base class that represents a query for the 'wp_usermeta' table.
 *
 *
 *
 * @method WpUsermetaQuery orderByUmetaId($order = Criteria::ASC) Order by the umeta_id column
 * @method WpUsermetaQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method WpUsermetaQuery orderByMetaKey($order = Criteria::ASC) Order by the meta_key column
 * @method WpUsermetaQuery orderByMetaValue($order = Criteria::ASC) Order by the meta_value column
 *
 * @method WpUsermetaQuery groupByUmetaId() Group by the umeta_id column
 * @method WpUsermetaQuery groupByUserId() Group by the user_id column
 * @method WpUsermetaQuery groupByMetaKey() Group by the meta_key column
 * @method WpUsermetaQuery groupByMetaValue() Group by the meta_value column
 *
 * @method WpUsermetaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpUsermetaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpUsermetaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpUsermeta findOne(PropelPDO $con = null) Return the first WpUsermeta matching the query
 * @method WpUsermeta findOneOrCreate(PropelPDO $con = null) Return the first WpUsermeta matching the query, or a new WpUsermeta object populated from the query conditions when no match is found
 *
 * @method WpUsermeta findOneByUmetaId(string $umeta_id) Return the first WpUsermeta filtered by the umeta_id column
 * @method WpUsermeta findOneByUserId(string $user_id) Return the first WpUsermeta filtered by the user_id column
 * @method WpUsermeta findOneByMetaKey(string $meta_key) Return the first WpUsermeta filtered by the meta_key column
 * @method WpUsermeta findOneByMetaValue(string $meta_value) Return the first WpUsermeta filtered by the meta_value column
 *
 * @method array findByUmetaId(string $umeta_id) Return WpUsermeta objects filtered by the umeta_id column
 * @method array findByUserId(string $user_id) Return WpUsermeta objects filtered by the user_id column
 * @method array findByMetaKey(string $meta_key) Return WpUsermeta objects filtered by the meta_key column
 * @method array findByMetaValue(string $meta_value) Return WpUsermeta objects filtered by the meta_value column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpUsermetaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpUsermetaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpUsermeta', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpUsermetaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpUsermetaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpUsermetaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpUsermetaQuery) {
            return $criteria;
        }
        $query = new WpUsermetaQuery();
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
     * @return   WpUsermeta|WpUsermeta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpUsermetaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpUsermetaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpUsermeta A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `UMETA_ID`, `USER_ID`, `META_KEY`, `META_VALUE` FROM `wp_usermeta` WHERE `UMETA_ID` = :p0';
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
            $obj = new WpUsermeta();
            $obj->hydrate($row);
            WpUsermetaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpUsermeta|WpUsermeta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpUsermeta[]|mixed the list of results, formatted by the current formatter
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
     * @return WpUsermetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpUsermetaPeer::UMETA_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpUsermetaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpUsermetaPeer::UMETA_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the umeta_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUmetaId(1234); // WHERE umeta_id = 1234
     * $query->filterByUmetaId(array(12, 34)); // WHERE umeta_id IN (12, 34)
     * $query->filterByUmetaId(array('min' => 12)); // WHERE umeta_id > 12
     * </code>
     *
     * @param     mixed $umetaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsermetaQuery The current query, for fluid interface
     */
    public function filterByUmetaId($umetaId = null, $comparison = null)
    {
        if (is_array($umetaId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpUsermetaPeer::UMETA_ID, $umetaId, $comparison);
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
     * @return WpUsermetaQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(WpUsermetaPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(WpUsermetaPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpUsermetaPeer::USER_ID, $userId, $comparison);
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
     * @return WpUsermetaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpUsermetaPeer::META_KEY, $metaKey, $comparison);
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
     * @return WpUsermetaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WpUsermetaPeer::META_VALUE, $metaValue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpUsermeta $wpUsermeta Object to remove from the list of results
     *
     * @return WpUsermetaQuery The current query, for fluid interface
     */
    public function prune($wpUsermeta = null)
    {
        if ($wpUsermeta) {
            $this->addUsingAlias(WpUsermetaPeer::UMETA_ID, $wpUsermeta->getUmetaId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
