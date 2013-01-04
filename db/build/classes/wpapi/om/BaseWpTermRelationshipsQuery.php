<?php


/**
 * Base class that represents a query for the 'wp_term_relationships' table.
 *
 *
 *
 * @method WpTermRelationshipsQuery orderByObjectId($order = Criteria::ASC) Order by the object_id column
 * @method WpTermRelationshipsQuery orderByTermTaxonomyId($order = Criteria::ASC) Order by the term_taxonomy_id column
 * @method WpTermRelationshipsQuery orderByTermOrder($order = Criteria::ASC) Order by the term_order column
 *
 * @method WpTermRelationshipsQuery groupByObjectId() Group by the object_id column
 * @method WpTermRelationshipsQuery groupByTermTaxonomyId() Group by the term_taxonomy_id column
 * @method WpTermRelationshipsQuery groupByTermOrder() Group by the term_order column
 *
 * @method WpTermRelationshipsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpTermRelationshipsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpTermRelationshipsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpTermRelationships findOne(PropelPDO $con = null) Return the first WpTermRelationships matching the query
 * @method WpTermRelationships findOneOrCreate(PropelPDO $con = null) Return the first WpTermRelationships matching the query, or a new WpTermRelationships object populated from the query conditions when no match is found
 *
 * @method WpTermRelationships findOneByObjectId(string $object_id) Return the first WpTermRelationships filtered by the object_id column
 * @method WpTermRelationships findOneByTermTaxonomyId(string $term_taxonomy_id) Return the first WpTermRelationships filtered by the term_taxonomy_id column
 * @method WpTermRelationships findOneByTermOrder(int $term_order) Return the first WpTermRelationships filtered by the term_order column
 *
 * @method array findByObjectId(string $object_id) Return WpTermRelationships objects filtered by the object_id column
 * @method array findByTermTaxonomyId(string $term_taxonomy_id) Return WpTermRelationships objects filtered by the term_taxonomy_id column
 * @method array findByTermOrder(int $term_order) Return WpTermRelationships objects filtered by the term_order column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpTermRelationshipsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpTermRelationshipsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpTermRelationships', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpTermRelationshipsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpTermRelationshipsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpTermRelationshipsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpTermRelationshipsQuery) {
            return $criteria;
        }
        $query = new WpTermRelationshipsQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$object_id, $term_taxonomy_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   WpTermRelationships|WpTermRelationships[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpTermRelationshipsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpTermRelationshipsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpTermRelationships A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `OBJECT_ID`, `TERM_TAXONOMY_ID`, `TERM_ORDER` FROM `wp_term_relationships` WHERE `OBJECT_ID` = :p0 AND `TERM_TAXONOMY_ID` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new WpTermRelationships();
            $obj->hydrate($row);
            WpTermRelationshipsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return WpTermRelationships|WpTermRelationships[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|WpTermRelationships[]|mixed the list of results, formatted by the current formatter
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
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(WpTermRelationshipsPeer::OBJECT_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(WpTermRelationshipsPeer::TERM_TAXONOMY_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(WpTermRelationshipsPeer::OBJECT_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(WpTermRelationshipsPeer::TERM_TAXONOMY_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the object_id column
     *
     * Example usage:
     * <code>
     * $query->filterByObjectId(1234); // WHERE object_id = 1234
     * $query->filterByObjectId(array(12, 34)); // WHERE object_id IN (12, 34)
     * $query->filterByObjectId(array('min' => 12)); // WHERE object_id > 12
     * </code>
     *
     * @param     mixed $objectId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function filterByObjectId($objectId = null, $comparison = null)
    {
        if (is_array($objectId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpTermRelationshipsPeer::OBJECT_ID, $objectId, $comparison);
    }

    /**
     * Filter the query on the term_taxonomy_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTermTaxonomyId(1234); // WHERE term_taxonomy_id = 1234
     * $query->filterByTermTaxonomyId(array(12, 34)); // WHERE term_taxonomy_id IN (12, 34)
     * $query->filterByTermTaxonomyId(array('min' => 12)); // WHERE term_taxonomy_id > 12
     * </code>
     *
     * @param     mixed $termTaxonomyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function filterByTermTaxonomyId($termTaxonomyId = null, $comparison = null)
    {
        if (is_array($termTaxonomyId) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpTermRelationshipsPeer::TERM_TAXONOMY_ID, $termTaxonomyId, $comparison);
    }

    /**
     * Filter the query on the term_order column
     *
     * Example usage:
     * <code>
     * $query->filterByTermOrder(1234); // WHERE term_order = 1234
     * $query->filterByTermOrder(array(12, 34)); // WHERE term_order IN (12, 34)
     * $query->filterByTermOrder(array('min' => 12)); // WHERE term_order > 12
     * </code>
     *
     * @param     mixed $termOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function filterByTermOrder($termOrder = null, $comparison = null)
    {
        if (is_array($termOrder)) {
            $useMinMax = false;
            if (isset($termOrder['min'])) {
                $this->addUsingAlias(WpTermRelationshipsPeer::TERM_ORDER, $termOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($termOrder['max'])) {
                $this->addUsingAlias(WpTermRelationshipsPeer::TERM_ORDER, $termOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpTermRelationshipsPeer::TERM_ORDER, $termOrder, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpTermRelationships $wpTermRelationships Object to remove from the list of results
     *
     * @return WpTermRelationshipsQuery The current query, for fluid interface
     */
    public function prune($wpTermRelationships = null)
    {
        if ($wpTermRelationships) {
            $this->addCond('pruneCond0', $this->getAliasedColName(WpTermRelationshipsPeer::OBJECT_ID), $wpTermRelationships->getObjectId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(WpTermRelationshipsPeer::TERM_TAXONOMY_ID), $wpTermRelationships->getTermTaxonomyId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
