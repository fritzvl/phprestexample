<?php


/**
 * Base class that represents a query for the 'wp_users' table.
 *
 *
 *
 * @method WpUsersQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method WpUsersQuery orderByUserLogin($order = Criteria::ASC) Order by the user_login column
 * @method WpUsersQuery orderByUserPass($order = Criteria::ASC) Order by the user_pass column
 * @method WpUsersQuery orderByUserNicename($order = Criteria::ASC) Order by the user_nicename column
 * @method WpUsersQuery orderByUserEmail($order = Criteria::ASC) Order by the user_email column
 * @method WpUsersQuery orderByUserUrl($order = Criteria::ASC) Order by the user_url column
 * @method WpUsersQuery orderByUserRegistered($order = Criteria::ASC) Order by the user_registered column
 * @method WpUsersQuery orderByUserActivationKey($order = Criteria::ASC) Order by the user_activation_key column
 * @method WpUsersQuery orderByUserStatus($order = Criteria::ASC) Order by the user_status column
 * @method WpUsersQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 *
 * @method WpUsersQuery groupById() Group by the ID column
 * @method WpUsersQuery groupByUserLogin() Group by the user_login column
 * @method WpUsersQuery groupByUserPass() Group by the user_pass column
 * @method WpUsersQuery groupByUserNicename() Group by the user_nicename column
 * @method WpUsersQuery groupByUserEmail() Group by the user_email column
 * @method WpUsersQuery groupByUserUrl() Group by the user_url column
 * @method WpUsersQuery groupByUserRegistered() Group by the user_registered column
 * @method WpUsersQuery groupByUserActivationKey() Group by the user_activation_key column
 * @method WpUsersQuery groupByUserStatus() Group by the user_status column
 * @method WpUsersQuery groupByDisplayName() Group by the display_name column
 *
 * @method WpUsersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WpUsersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WpUsersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WpUsers findOne(PropelPDO $con = null) Return the first WpUsers matching the query
 * @method WpUsers findOneOrCreate(PropelPDO $con = null) Return the first WpUsers matching the query, or a new WpUsers object populated from the query conditions when no match is found
 *
 * @method WpUsers findOneById(string $ID) Return the first WpUsers filtered by the ID column
 * @method WpUsers findOneByUserLogin(string $user_login) Return the first WpUsers filtered by the user_login column
 * @method WpUsers findOneByUserPass(string $user_pass) Return the first WpUsers filtered by the user_pass column
 * @method WpUsers findOneByUserNicename(string $user_nicename) Return the first WpUsers filtered by the user_nicename column
 * @method WpUsers findOneByUserEmail(string $user_email) Return the first WpUsers filtered by the user_email column
 * @method WpUsers findOneByUserUrl(string $user_url) Return the first WpUsers filtered by the user_url column
 * @method WpUsers findOneByUserRegistered(string $user_registered) Return the first WpUsers filtered by the user_registered column
 * @method WpUsers findOneByUserActivationKey(string $user_activation_key) Return the first WpUsers filtered by the user_activation_key column
 * @method WpUsers findOneByUserStatus(int $user_status) Return the first WpUsers filtered by the user_status column
 * @method WpUsers findOneByDisplayName(string $display_name) Return the first WpUsers filtered by the display_name column
 *
 * @method array findById(string $ID) Return WpUsers objects filtered by the ID column
 * @method array findByUserLogin(string $user_login) Return WpUsers objects filtered by the user_login column
 * @method array findByUserPass(string $user_pass) Return WpUsers objects filtered by the user_pass column
 * @method array findByUserNicename(string $user_nicename) Return WpUsers objects filtered by the user_nicename column
 * @method array findByUserEmail(string $user_email) Return WpUsers objects filtered by the user_email column
 * @method array findByUserUrl(string $user_url) Return WpUsers objects filtered by the user_url column
 * @method array findByUserRegistered(string $user_registered) Return WpUsers objects filtered by the user_registered column
 * @method array findByUserActivationKey(string $user_activation_key) Return WpUsers objects filtered by the user_activation_key column
 * @method array findByUserStatus(int $user_status) Return WpUsers objects filtered by the user_status column
 * @method array findByDisplayName(string $display_name) Return WpUsers objects filtered by the display_name column
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpUsersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWpUsersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'wpapi', $modelName = 'WpUsers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WpUsersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     WpUsersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WpUsersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WpUsersQuery) {
            return $criteria;
        }
        $query = new WpUsersQuery();
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
     * @return   WpUsers|WpUsers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WpUsersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WpUsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   WpUsers A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `USER_LOGIN`, `USER_PASS`, `USER_NICENAME`, `USER_EMAIL`, `USER_URL`, `USER_REGISTERED`, `USER_ACTIVATION_KEY`, `USER_STATUS`, `DISPLAY_NAME` FROM `wp_users` WHERE `ID` = :p0';
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
            $obj = new WpUsers();
            $obj->hydrate($row);
            WpUsersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return WpUsers|WpUsers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|WpUsers[]|mixed the list of results, formatted by the current formatter
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
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WpUsersPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WpUsersPeer::ID, $keys, Criteria::IN);
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
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(WpUsersPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_login column
     *
     * Example usage:
     * <code>
     * $query->filterByUserLogin('fooValue');   // WHERE user_login = 'fooValue'
     * $query->filterByUserLogin('%fooValue%'); // WHERE user_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserLogin($userLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userLogin)) {
                $userLogin = str_replace('*', '%', $userLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_LOGIN, $userLogin, $comparison);
    }

    /**
     * Filter the query on the user_pass column
     *
     * Example usage:
     * <code>
     * $query->filterByUserPass('fooValue');   // WHERE user_pass = 'fooValue'
     * $query->filterByUserPass('%fooValue%'); // WHERE user_pass LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userPass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserPass($userPass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userPass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userPass)) {
                $userPass = str_replace('*', '%', $userPass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_PASS, $userPass, $comparison);
    }

    /**
     * Filter the query on the user_nicename column
     *
     * Example usage:
     * <code>
     * $query->filterByUserNicename('fooValue');   // WHERE user_nicename = 'fooValue'
     * $query->filterByUserNicename('%fooValue%'); // WHERE user_nicename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userNicename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserNicename($userNicename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userNicename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userNicename)) {
                $userNicename = str_replace('*', '%', $userNicename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_NICENAME, $userNicename, $comparison);
    }

    /**
     * Filter the query on the user_email column
     *
     * Example usage:
     * <code>
     * $query->filterByUserEmail('fooValue');   // WHERE user_email = 'fooValue'
     * $query->filterByUserEmail('%fooValue%'); // WHERE user_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserEmail($userEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userEmail)) {
                $userEmail = str_replace('*', '%', $userEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_EMAIL, $userEmail, $comparison);
    }

    /**
     * Filter the query on the user_url column
     *
     * Example usage:
     * <code>
     * $query->filterByUserUrl('fooValue');   // WHERE user_url = 'fooValue'
     * $query->filterByUserUrl('%fooValue%'); // WHERE user_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserUrl($userUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userUrl)) {
                $userUrl = str_replace('*', '%', $userUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_URL, $userUrl, $comparison);
    }

    /**
     * Filter the query on the user_registered column
     *
     * Example usage:
     * <code>
     * $query->filterByUserRegistered('2011-03-14'); // WHERE user_registered = '2011-03-14'
     * $query->filterByUserRegistered('now'); // WHERE user_registered = '2011-03-14'
     * $query->filterByUserRegistered(array('max' => 'yesterday')); // WHERE user_registered > '2011-03-13'
     * </code>
     *
     * @param     mixed $userRegistered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserRegistered($userRegistered = null, $comparison = null)
    {
        if (is_array($userRegistered)) {
            $useMinMax = false;
            if (isset($userRegistered['min'])) {
                $this->addUsingAlias(WpUsersPeer::USER_REGISTERED, $userRegistered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userRegistered['max'])) {
                $this->addUsingAlias(WpUsersPeer::USER_REGISTERED, $userRegistered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_REGISTERED, $userRegistered, $comparison);
    }

    /**
     * Filter the query on the user_activation_key column
     *
     * Example usage:
     * <code>
     * $query->filterByUserActivationKey('fooValue');   // WHERE user_activation_key = 'fooValue'
     * $query->filterByUserActivationKey('%fooValue%'); // WHERE user_activation_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userActivationKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserActivationKey($userActivationKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userActivationKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userActivationKey)) {
                $userActivationKey = str_replace('*', '%', $userActivationKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_ACTIVATION_KEY, $userActivationKey, $comparison);
    }

    /**
     * Filter the query on the user_status column
     *
     * Example usage:
     * <code>
     * $query->filterByUserStatus(1234); // WHERE user_status = 1234
     * $query->filterByUserStatus(array(12, 34)); // WHERE user_status IN (12, 34)
     * $query->filterByUserStatus(array('min' => 12)); // WHERE user_status > 12
     * </code>
     *
     * @param     mixed $userStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByUserStatus($userStatus = null, $comparison = null)
    {
        if (is_array($userStatus)) {
            $useMinMax = false;
            if (isset($userStatus['min'])) {
                $this->addUsingAlias(WpUsersPeer::USER_STATUS, $userStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userStatus['max'])) {
                $this->addUsingAlias(WpUsersPeer::USER_STATUS, $userStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::USER_STATUS, $userStatus, $comparison);
    }

    /**
     * Filter the query on the display_name column
     *
     * Example usage:
     * <code>
     * $query->filterByDisplayName('fooValue');   // WHERE display_name = 'fooValue'
     * $query->filterByDisplayName('%fooValue%'); // WHERE display_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $displayName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function filterByDisplayName($displayName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($displayName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $displayName)) {
                $displayName = str_replace('*', '%', $displayName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WpUsersPeer::DISPLAY_NAME, $displayName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   WpUsers $wpUsers Object to remove from the list of results
     *
     * @return WpUsersQuery The current query, for fluid interface
     */
    public function prune($wpUsers = null)
    {
        if ($wpUsers) {
            $this->addUsingAlias(WpUsersPeer::ID, $wpUsers->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
