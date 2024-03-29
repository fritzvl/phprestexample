<?php


/**
 * Base class that represents a row from the 'wp_users' table.
 *
 *
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpUsers extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WpUsersPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WpUsersPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        string
     */
    protected $id;

    /**
     * The value for the user_login field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_login;

    /**
     * The value for the user_pass field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_pass;

    /**
     * The value for the user_nicename field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_nicename;

    /**
     * The value for the user_email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_email;

    /**
     * The value for the user_url field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_url;

    /**
     * The value for the user_registered field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $user_registered;

    /**
     * The value for the user_activation_key field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $user_activation_key;

    /**
     * The value for the user_status field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $user_status;

    /**
     * The value for the display_name field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $display_name;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->user_login = '';
        $this->user_pass = '';
        $this->user_nicename = '';
        $this->user_email = '';
        $this->user_url = '';
        $this->user_registered = NULL;
        $this->user_activation_key = '';
        $this->user_status = 0;
        $this->display_name = '';
    }

    /**
     * Initializes internal state of BaseWpUsers object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [user_login] column value.
     *
     * @return string
     */
    public function getUserLogin()
    {
        return $this->user_login;
    }

    /**
     * Get the [user_pass] column value.
     *
     * @return string
     */
    public function getUserPass()
    {
        return $this->user_pass;
    }

    /**
     * Get the [user_nicename] column value.
     *
     * @return string
     */
    public function getUserNicename()
    {
        return $this->user_nicename;
    }

    /**
     * Get the [user_email] column value.
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Get the [user_url] column value.
     *
     * @return string
     */
    public function getUserUrl()
    {
        return $this->user_url;
    }

    /**
     * Get the [optionally formatted] temporal [user_registered] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUserRegistered($format = 'Y-m-d H:i:s')
    {
        if ($this->user_registered === null) {
            return null;
        }

        if ($this->user_registered === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->user_registered);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->user_registered, true), $x);
            }
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        } elseif (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        } else {
            return $dt->format($format);
        }
    }

    /**
     * Get the [user_activation_key] column value.
     *
     * @return string
     */
    public function getUserActivationKey()
    {
        return $this->user_activation_key;
    }

    /**
     * Get the [user_status] column value.
     *
     * @return int
     */
    public function getUserStatus()
    {
        return $this->user_status;
    }

    /**
     * Get the [display_name] column value.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = WpUsersPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [user_login] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserLogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_login !== $v) {
            $this->user_login = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_LOGIN;
        }


        return $this;
    } // setUserLogin()

    /**
     * Set the value of [user_pass] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserPass($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_pass !== $v) {
            $this->user_pass = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_PASS;
        }


        return $this;
    } // setUserPass()

    /**
     * Set the value of [user_nicename] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserNicename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_nicename !== $v) {
            $this->user_nicename = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_NICENAME;
        }


        return $this;
    } // setUserNicename()

    /**
     * Set the value of [user_email] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_email !== $v) {
            $this->user_email = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_EMAIL;
        }


        return $this;
    } // setUserEmail()

    /**
     * Set the value of [user_url] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_url !== $v) {
            $this->user_url = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_URL;
        }


        return $this;
    } // setUserUrl()

    /**
     * Sets the value of [user_registered] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserRegistered($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->user_registered !== null || $dt !== null) {
            $currentDateAsString = ($this->user_registered !== null && $tmpDt = new DateTime($this->user_registered)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->user_registered = $newDateAsString;
                $this->modifiedColumns[] = WpUsersPeer::USER_REGISTERED;
            }
        } // if either are not null


        return $this;
    } // setUserRegistered()

    /**
     * Set the value of [user_activation_key] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserActivationKey($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_activation_key !== $v) {
            $this->user_activation_key = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_ACTIVATION_KEY;
        }


        return $this;
    } // setUserActivationKey()

    /**
     * Set the value of [user_status] column.
     *
     * @param int $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setUserStatus($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->user_status !== $v) {
            $this->user_status = $v;
            $this->modifiedColumns[] = WpUsersPeer::USER_STATUS;
        }


        return $this;
    } // setUserStatus()

    /**
     * Set the value of [display_name] column.
     *
     * @param string $v new value
     * @return WpUsers The current object (for fluent API support)
     */
    public function setDisplayName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->display_name !== $v) {
            $this->display_name = $v;
            $this->modifiedColumns[] = WpUsersPeer::DISPLAY_NAME;
        }


        return $this;
    } // setDisplayName()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->user_login !== '') {
                return false;
            }

            if ($this->user_pass !== '') {
                return false;
            }

            if ($this->user_nicename !== '') {
                return false;
            }

            if ($this->user_email !== '') {
                return false;
            }

            if ($this->user_url !== '') {
                return false;
            }

            if ($this->user_registered !== NULL) {
                return false;
            }

            if ($this->user_activation_key !== '') {
                return false;
            }

            if ($this->user_status !== 0) {
                return false;
            }

            if ($this->display_name !== '') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->user_login = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->user_pass = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->user_nicename = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->user_email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->user_url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->user_registered = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->user_activation_key = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->user_status = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->display_name = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 10; // 10 = WpUsersPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating WpUsers object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpUsersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WpUsersPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpUsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WpUsersQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(WpUsersPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                WpUsersPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = WpUsersPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . WpUsersPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WpUsersPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`USER_LOGIN`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_PASS)) {
            $modifiedColumns[':p' . $index++]  = '`USER_PASS`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_NICENAME)) {
            $modifiedColumns[':p' . $index++]  = '`USER_NICENAME`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`USER_EMAIL`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_URL)) {
            $modifiedColumns[':p' . $index++]  = '`USER_URL`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_REGISTERED)) {
            $modifiedColumns[':p' . $index++]  = '`USER_REGISTERED`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_ACTIVATION_KEY)) {
            $modifiedColumns[':p' . $index++]  = '`USER_ACTIVATION_KEY`';
        }
        if ($this->isColumnModified(WpUsersPeer::USER_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`USER_STATUS`';
        }
        if ($this->isColumnModified(WpUsersPeer::DISPLAY_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`DISPLAY_NAME`';
        }

        $sql = sprintf(
            'INSERT INTO `wp_users` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`USER_LOGIN`':
                        $stmt->bindValue($identifier, $this->user_login, PDO::PARAM_STR);
                        break;
                    case '`USER_PASS`':
                        $stmt->bindValue($identifier, $this->user_pass, PDO::PARAM_STR);
                        break;
                    case '`USER_NICENAME`':
                        $stmt->bindValue($identifier, $this->user_nicename, PDO::PARAM_STR);
                        break;
                    case '`USER_EMAIL`':
                        $stmt->bindValue($identifier, $this->user_email, PDO::PARAM_STR);
                        break;
                    case '`USER_URL`':
                        $stmt->bindValue($identifier, $this->user_url, PDO::PARAM_STR);
                        break;
                    case '`USER_REGISTERED`':
                        $stmt->bindValue($identifier, $this->user_registered, PDO::PARAM_STR);
                        break;
                    case '`USER_ACTIVATION_KEY`':
                        $stmt->bindValue($identifier, $this->user_activation_key, PDO::PARAM_STR);
                        break;
                    case '`USER_STATUS`':
                        $stmt->bindValue($identifier, $this->user_status, PDO::PARAM_INT);
                        break;
                    case '`DISPLAY_NAME`':
                        $stmt->bindValue($identifier, $this->display_name, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        } else {
            $this->validationFailures = $res;

            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = WpUsersPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = WpUsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getUserLogin();
                break;
            case 2:
                return $this->getUserPass();
                break;
            case 3:
                return $this->getUserNicename();
                break;
            case 4:
                return $this->getUserEmail();
                break;
            case 5:
                return $this->getUserUrl();
                break;
            case 6:
                return $this->getUserRegistered();
                break;
            case 7:
                return $this->getUserActivationKey();
                break;
            case 8:
                return $this->getUserStatus();
                break;
            case 9:
                return $this->getDisplayName();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['WpUsers'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WpUsers'][$this->getPrimaryKey()] = true;
        $keys = WpUsersPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getUserLogin(),
            $keys[2] => $this->getUserPass(),
            $keys[3] => $this->getUserNicename(),
            $keys[4] => $this->getUserEmail(),
            $keys[5] => $this->getUserUrl(),
            $keys[6] => $this->getUserRegistered(),
            $keys[7] => $this->getUserActivationKey(),
            $keys[8] => $this->getUserStatus(),
            $keys[9] => $this->getDisplayName(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = WpUsersPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setUserLogin($value);
                break;
            case 2:
                $this->setUserPass($value);
                break;
            case 3:
                $this->setUserNicename($value);
                break;
            case 4:
                $this->setUserEmail($value);
                break;
            case 5:
                $this->setUserUrl($value);
                break;
            case 6:
                $this->setUserRegistered($value);
                break;
            case 7:
                $this->setUserActivationKey($value);
                break;
            case 8:
                $this->setUserStatus($value);
                break;
            case 9:
                $this->setDisplayName($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = WpUsersPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserLogin($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setUserPass($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUserNicename($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUserEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUserUrl($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUserRegistered($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUserActivationKey($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setUserStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDisplayName($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WpUsersPeer::DATABASE_NAME);

        if ($this->isColumnModified(WpUsersPeer::ID)) $criteria->add(WpUsersPeer::ID, $this->id);
        if ($this->isColumnModified(WpUsersPeer::USER_LOGIN)) $criteria->add(WpUsersPeer::USER_LOGIN, $this->user_login);
        if ($this->isColumnModified(WpUsersPeer::USER_PASS)) $criteria->add(WpUsersPeer::USER_PASS, $this->user_pass);
        if ($this->isColumnModified(WpUsersPeer::USER_NICENAME)) $criteria->add(WpUsersPeer::USER_NICENAME, $this->user_nicename);
        if ($this->isColumnModified(WpUsersPeer::USER_EMAIL)) $criteria->add(WpUsersPeer::USER_EMAIL, $this->user_email);
        if ($this->isColumnModified(WpUsersPeer::USER_URL)) $criteria->add(WpUsersPeer::USER_URL, $this->user_url);
        if ($this->isColumnModified(WpUsersPeer::USER_REGISTERED)) $criteria->add(WpUsersPeer::USER_REGISTERED, $this->user_registered);
        if ($this->isColumnModified(WpUsersPeer::USER_ACTIVATION_KEY)) $criteria->add(WpUsersPeer::USER_ACTIVATION_KEY, $this->user_activation_key);
        if ($this->isColumnModified(WpUsersPeer::USER_STATUS)) $criteria->add(WpUsersPeer::USER_STATUS, $this->user_status);
        if ($this->isColumnModified(WpUsersPeer::DISPLAY_NAME)) $criteria->add(WpUsersPeer::DISPLAY_NAME, $this->display_name);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(WpUsersPeer::DATABASE_NAME);
        $criteria->add(WpUsersPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of WpUsers (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserLogin($this->getUserLogin());
        $copyObj->setUserPass($this->getUserPass());
        $copyObj->setUserNicename($this->getUserNicename());
        $copyObj->setUserEmail($this->getUserEmail());
        $copyObj->setUserUrl($this->getUserUrl());
        $copyObj->setUserRegistered($this->getUserRegistered());
        $copyObj->setUserActivationKey($this->getUserActivationKey());
        $copyObj->setUserStatus($this->getUserStatus());
        $copyObj->setDisplayName($this->getDisplayName());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return WpUsers Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return WpUsersPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WpUsersPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->user_login = null;
        $this->user_pass = null;
        $this->user_nicename = null;
        $this->user_email = null;
        $this->user_url = null;
        $this->user_registered = null;
        $this->user_activation_key = null;
        $this->user_status = null;
        $this->display_name = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(WpUsersPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
