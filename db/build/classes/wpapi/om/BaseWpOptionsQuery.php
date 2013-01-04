<?php


/**
 * Base class that represents a query for the 'wp_options' table.
 *
 *
 *
 * @method WpOptionsQuery orderByOptionId($order = Criteria::ASC) Order by the option_id column
 * @method WpOptionsQuery orderByOptionName($order = Criteria::ASC) Order by the option_name column
 * @method WpOptionsQuery orderByOptionValue($order = Criteria::ASC) Order by the option_value column
 * @method WpOptionsQuery orderByAutoload($order = Criteria::ASC) Order by the autoload column
 *
 * @method WpOptionsQuery groupByOptionId() Group by the option_id column
 * @method WpOptionsQuery groupByOptionName() Group by the option_name column
 * @method WpOptionsQuery groupByOptionValue() Group by the option_value column
 * @method WpOptionsQuery groupByAutoload() Group by the autoload column
 *
 * @method WpOptionsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpOptionsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpOptionsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpOptions findOne(PropelPDO $con = null) Return the first WpOptions matching the query
 * @method WpOptions findOneOrCreate(PropelPDO $con = null) Return the first WpOptions matching the query, or a new WpOptions object populated from the query conditions when no match is found
 *
 * @method WpOptions findOneByOptionId(string $option_id) Return the first WpOptions filtered by the option_id column
 * @method WpOptions findOneByOptionName(string $option_name) Return the first WpOptions filtered by the option_name column
 * @method WpOptions findOneByOptionValue(string $option_value) Return the first WpOptions filtered by the option_value column
 * @method WpOptions findOneByAutoload(string $autoload) Return the first WpOptions filtered by the autoload column
 *
 * @method array findByOptionId(string $option_id) Return WpOptions objects filtered by the option_id column
 * @method array findByOptionName(string $option_name) Return WpOptions objects filtered by the option_name column
 * @method array findByOptionValue(string $option_value) Return WpOptions objects filtered by the option_value column
 * @method array findByAutoload(string $autoload) Return WpOptions objects filtered by the autoload column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpOptionsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpOptionsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpOptions', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpOptionsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpOptionsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpOptionsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpOptionsQuery) {
            return $criteria;
        }
        $query = new WpOptionsQuery();
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
     * @return   WpOptions|WpOptions[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpOptionsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpOptionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpOptions A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `OPTION_ID`, `OPTION_NAME`, `OPTION_VALUE`, `AUTOLOAD` FROM `wp_options` WHERE `OPTION_ID` = :p0';
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
            $obj = new WpOptions();
            $obj->hydrate($row);
            WpOptionsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpOptions|WpOptions[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpOptions[]|mixed the list of results, formatted by the current formatter
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
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpOptionsPeer::OPTION_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpOptionsPeer::OPTION_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the option_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionId(1234); // WHERE option_id = 1234
     * $query->filterByOptionId(array(12, 34)); // WHERE option_id IN (12, 34)
     * $query->filterByOptionId(array('min' => 12)); // WHERE option_id > 12
     * </code>
     *
     * @param     mixed $optionId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByOptionId($optionId = null, $comparison = null)
    {
        if (is_array($optionId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpOptionsPeer::OPTION_ID, $optionId, $comparison);
    }

    /**
     * Filter the query on the option_name column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionName('fooValue');   // WHERE option_name = 'fooValue'
     * $query->filterByOptionName('%fooValue%'); // WHERE option_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optionName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByOptionName($optionName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optionName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $optionName)) {
                $optionName = str_replace('*', '%', $optionName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpOptionsPeer::OPTION_NAME, $optionName, $comparison);
    }

    /**
     * Filter the query on the option_value column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionValue('fooValue');   // WHERE option_value = 'fooValue'
     * $query->filterByOptionValue('%fooValue%'); // WHERE option_value LIKE '%fooValue%'
     * </code>
     *
     * @param     string $optionValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByOptionValue($optionValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($optionValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $optionValue)) {
                $optionValue = str_replace('*', '%', $optionValue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpOptionsPeer::OPTION_VALUE, $optionValue, $comparison);
    }

    /**
     * Filter the query on the autoload column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoload('fooValue');   // WHERE autoload = 'fooValue'
     * $query->filterByAutoload('%fooValue%'); // WHERE autoload LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autoload The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function filterByAutoload($autoload = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autoload)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autoload)) {
                $autoload = str_replace('*', '%', $autoload);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpOptionsPeer::AUTOLOAD, $autoload, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpOptions $wpOptions Object to remove from the list of results
     *
     * @return WpOptionsQuery The current query, for fluid interface
     */
    public function prune($wpOptions = null)
    {
        if ($wpOptions) {
            $this->addUsingAlias(WpOptionsPeer::OPTION_ID, $wpOptions->getOptionId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
