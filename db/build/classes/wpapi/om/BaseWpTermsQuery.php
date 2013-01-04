<?php


/**
 * Base class that represents a query for the 'wp_terms' table.
 *
 *
 *
 * @method WpTermsQuery orderByTermId($order = Criteria::ASC) Order by the term_id column
 * @method WpTermsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method WpTermsQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method WpTermsQuery orderByTermGroup($order = Criteria::ASC) Order by the term_group column
 *
 * @method WpTermsQuery groupByTermId() Group by the term_id column
 * @method WpTermsQuery groupByName() Group by the name column
 * @method WpTermsQuery groupBySlug() Group by the slug column
 * @method WpTermsQuery groupByTermGroup() Group by the term_group column
 *
 * @method WpTermsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpTermsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpTermsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpTerms findOne(PropelPDO $con = null) Return the first WpTerms matching the query
 * @method WpTerms findOneOrCreate(PropelPDO $con = null) Return the first WpTerms matching the query, or a new WpTerms object populated from the query conditions when no match is found
 *
 * @method WpTerms findOneByTermId(string $term_id) Return the first WpTerms filtered by the term_id column
 * @method WpTerms findOneByName(string $name) Return the first WpTerms filtered by the name column
 * @method WpTerms findOneBySlug(string $slug) Return the first WpTerms filtered by the slug column
 * @method WpTerms findOneByTermGroup(string $term_group) Return the first WpTerms filtered by the term_group column
 *
 * @method array findByTermId(string $term_id) Return WpTerms objects filtered by the term_id column
 * @method array findByName(string $name) Return WpTerms objects filtered by the name column
 * @method array findBySlug(string $slug) Return WpTerms objects filtered by the slug column
 * @method array findByTermGroup(string $term_group) Return WpTerms objects filtered by the term_group column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpTermsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpTermsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpTerms', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpTermsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpTermsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpTermsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpTermsQuery) {
            return $criteria;
        }
        $query = new WpTermsQuery();
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
     * @return   WpTerms|WpTerms[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpTermsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpTermsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpTerms A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `TERM_ID`, `NAME`, `SLUG`, `TERM_GROUP` FROM `wp_terms` WHERE `TERM_ID` = :p0';
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
            $obj = new WpTerms();
            $obj->hydrate($row);
            WpTermsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpTerms|WpTerms[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpTerms[]|mixed the list of results, formatted by the current formatter
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
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpTermsPeer::TERM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpTermsPeer::TERM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the term_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTermId(1234); // WHERE term_id = 1234
     * $query->filterByTermId(array(12, 34)); // WHERE term_id IN (12, 34)
     * $query->filterByTermId(array('min' => 12)); // WHERE term_id > 12
     * </code>
     *
     * @param     mixed $termId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterByTermId($termId = null, $comparison = null)
    {
        if (is_array($termId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpTermsPeer::TERM_ID, $termId, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpTermsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpTermsPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the term_group column
     *
     * Example usage:
     * <code>
     * $query->filterByTermGroup(1234); // WHERE term_group = 1234
     * $query->filterByTermGroup(array(12, 34)); // WHERE term_group IN (12, 34)
     * $query->filterByTermGroup(array('min' => 12)); // WHERE term_group > 12
     * </code>
     *
     * @param     mixed $termGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function filterByTermGroup($termGroup = null, $comparison = null)
    {
        if (is_array($termGroup)) {
            $useMinMax = false;
            if (isset($termGroup['min'])) {
                $this->addUsingAlias(WpTermsPeer::TERM_GROUP, $termGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($termGroup['max'])) {
                $this->addUsingAlias(WpTermsPeer::TERM_GROUP, $termGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpTermsPeer::TERM_GROUP, $termGroup, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpTerms $wpTerms Object to remove from the list of results
     *
     * @return WpTermsQuery The current query, for fluid interface
     */
    public function prune($wpTerms = null)
    {
        if ($wpTerms) {
            $this->addUsingAlias(WpTermsPeer::TERM_ID, $wpTerms->getTermId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
