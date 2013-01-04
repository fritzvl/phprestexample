<?php


/**
 * Base class that represents a row from the 'wp_comments' table.
 *
 *
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpComments extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WpCommentsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WpCommentsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the comment_id field.
     * @var        string
     */
    protected $comment_id;

    /**
     * The value for the comment_post_id field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $comment_post_id;

    /**
     * The value for the comment_author field.
     * @var        string
     */
    protected $comment_author;

    /**
     * The value for the comment_author_email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $comment_author_email;

    /**
     * The value for the comment_author_url field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $comment_author_url;

    /**
     * The value for the comment_author_ip field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $comment_author_ip;

    /**
     * The value for the comment_date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $comment_date;

    /**
     * The value for the comment_date_gmt field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $comment_date_gmt;

    /**
     * The value for the comment_content field.
     * @var        string
     */
    protected $comment_content;

    /**
     * The value for the comment_karma field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $comment_karma;

    /**
     * The value for the comment_approved field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $comment_approved;

    /**
     * The value for the comment_agent field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $comment_agent;

    /**
     * The value for the comment_type field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $comment_type;

    /**
     * The value for the comment_parent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $comment_parent;

    /**
     * The value for the user_id field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $user_id;

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
        $this->comment_post_id = '0';
        $this->comment_author_email = '';
        $this->comment_author_url = '';
        $this->comment_author_ip = '';
        $this->comment_date = NULL;
        $this->comment_date_gmt = NULL;
        $this->comment_karma = 0;
        $this->comment_approved = '1';
        $this->comment_agent = '';
        $this->comment_type = '';
        $this->comment_parent = '0';
        $this->user_id = '0';
    }

    /**
     * Initializes internal state of BaseWpComments object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [comment_id] column value.
     *
     * @return string
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * Get the [comment_post_id] column value.
     *
     * @return string
     */
    public function getCommentPostId()
    {
        return $this->comment_post_id;
    }

    /**
     * Get the [comment_author] column value.
     *
     * @return string
     */
    public function getCommentAuthor()
    {
        return $this->comment_author;
    }

    /**
     * Get the [comment_author_email] column value.
     *
     * @return string
     */
    public function getCommentAuthorEmail()
    {
        return $this->comment_author_email;
    }

    /**
     * Get the [comment_author_url] column value.
     *
     * @return string
     */
    public function getCommentAuthorUrl()
    {
        return $this->comment_author_url;
    }

    /**
     * Get the [comment_author_ip] column value.
     *
     * @return string
     */
    public function getCommentAuthorIp()
    {
        return $this->comment_author_ip;
    }

    /**
     * Get the [optionally formatted] temporal [comment_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCommentDate($format = 'Y-m-d H:i:s')
    {
        if ($this->comment_date === null) {
            return null;
        }

        if ($this->comment_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->comment_date);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->comment_date, true), $x);
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
     * Get the [optionally formatted] temporal [comment_date_gmt] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCommentDateGmt($format = 'Y-m-d H:i:s')
    {
        if ($this->comment_date_gmt === null) {
            return null;
        }

        if ($this->comment_date_gmt === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->comment_date_gmt);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->comment_date_gmt, true), $x);
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
     * Get the [comment_content] column value.
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->comment_content;
    }

    /**
     * Get the [comment_karma] column value.
     *
     * @return int
     */
    public function getCommentKarma()
    {
        return $this->comment_karma;
    }

    /**
     * Get the [comment_approved] column value.
     *
     * @return string
     */
    public function getCommentApproved()
    {
        return $this->comment_approved;
    }

    /**
     * Get the [comment_agent] column value.
     *
     * @return string
     */
    public function getCommentAgent()
    {
        return $this->comment_agent;
    }

    /**
     * Get the [comment_type] column value.
     *
     * @return string
     */
    public function getCommentType()
    {
        return $this->comment_type;
    }

    /**
     * Get the [comment_parent] column value.
     *
     * @return string
     */
    public function getCommentParent()
    {
        return $this->comment_parent;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of [comment_id] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_id !== $v) {
            $this->comment_id = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_ID;
        }


        return $this;
    } // setCommentId()

    /**
     * Set the value of [comment_post_id] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentPostId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_post_id !== $v) {
            $this->comment_post_id = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_POST_ID;
        }


        return $this;
    } // setCommentPostId()

    /**
     * Set the value of [comment_author] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentAuthor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_author !== $v) {
            $this->comment_author = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_AUTHOR;
        }


        return $this;
    } // setCommentAuthor()

    /**
     * Set the value of [comment_author_email] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentAuthorEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_author_email !== $v) {
            $this->comment_author_email = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_AUTHOR_EMAIL;
        }


        return $this;
    } // setCommentAuthorEmail()

    /**
     * Set the value of [comment_author_url] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentAuthorUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_author_url !== $v) {
            $this->comment_author_url = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_AUTHOR_URL;
        }


        return $this;
    } // setCommentAuthorUrl()

    /**
     * Set the value of [comment_author_ip] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentAuthorIp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_author_ip !== $v) {
            $this->comment_author_ip = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_AUTHOR_IP;
        }


        return $this;
    } // setCommentAuthorIp()

    /**
     * Sets the value of [comment_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->comment_date !== null || $dt !== null) {
            $currentDateAsString = ($this->comment_date !== null && $tmpDt = new DateTime($this->comment_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->comment_date = $newDateAsString;
                $this->modifiedColumns[] = WpCommentsPeer::COMMENT_DATE;
            }
        } // if either are not null


        return $this;
    } // setCommentDate()

    /**
     * Sets the value of [comment_date_gmt] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentDateGmt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->comment_date_gmt !== null || $dt !== null) {
            $currentDateAsString = ($this->comment_date_gmt !== null && $tmpDt = new DateTime($this->comment_date_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->comment_date_gmt = $newDateAsString;
                $this->modifiedColumns[] = WpCommentsPeer::COMMENT_DATE_GMT;
            }
        } // if either are not null


        return $this;
    } // setCommentDateGmt()

    /**
     * Set the value of [comment_content] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentContent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_content !== $v) {
            $this->comment_content = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_CONTENT;
        }


        return $this;
    } // setCommentContent()

    /**
     * Set the value of [comment_karma] column.
     *
     * @param int $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentKarma($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->comment_karma !== $v) {
            $this->comment_karma = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_KARMA;
        }


        return $this;
    } // setCommentKarma()

    /**
     * Set the value of [comment_approved] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentApproved($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_approved !== $v) {
            $this->comment_approved = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_APPROVED;
        }


        return $this;
    } // setCommentApproved()

    /**
     * Set the value of [comment_agent] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentAgent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_agent !== $v) {
            $this->comment_agent = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_AGENT;
        }


        return $this;
    } // setCommentAgent()

    /**
     * Set the value of [comment_type] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_type !== $v) {
            $this->comment_type = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_TYPE;
        }


        return $this;
    } // setCommentType()

    /**
     * Set the value of [comment_parent] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setCommentParent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_parent !== $v) {
            $this->comment_parent = $v;
            $this->modifiedColumns[] = WpCommentsPeer::COMMENT_PARENT;
        }


        return $this;
    } // setCommentParent()

    /**
     * Set the value of [user_id] column.
     *
     * @param string $v new value
     * @return WpComments The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = WpCommentsPeer::USER_ID;
        }


        return $this;
    } // setUserId()

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
            if ($this->comment_post_id !== '0') {
                return false;
            }

            if ($this->comment_author_email !== '') {
                return false;
            }

            if ($this->comment_author_url !== '') {
                return false;
            }

            if ($this->comment_author_ip !== '') {
                return false;
            }

            if ($this->comment_date !== NULL) {
                return false;
            }

            if ($this->comment_date_gmt !== NULL) {
                return false;
            }

            if ($this->comment_karma !== 0) {
                return false;
            }

            if ($this->comment_approved !== '1') {
                return false;
            }

            if ($this->comment_agent !== '') {
                return false;
            }

            if ($this->comment_type !== '') {
                return false;
            }

            if ($this->comment_parent !== '0') {
                return false;
            }

            if ($this->user_id !== '0') {
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

            $this->comment_id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
            $this->comment_post_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->comment_author = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->comment_author_email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->comment_author_url = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->comment_author_ip = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->comment_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->comment_date_gmt = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment_content = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->comment_karma = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->comment_approved = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->comment_agent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->comment_type = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->comment_parent = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->user_id = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 15; // 15 = WpCommentsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating WpComments object", $e);
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
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WpCommentsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WpCommentsQuery::create()
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
            $con = Propel::getConnection(WpCommentsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                WpCommentsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = WpCommentsPeer::COMMENT_ID;
        if (null !== $this->comment_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . WpCommentsPeer::COMMENT_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_ID`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_POST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_POST_ID`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_EMAIL`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_URL)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_URL`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_IP)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_AUTHOR_IP`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_DATE`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_DATE_GMT)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_DATE_GMT`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_CONTENT)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_CONTENT`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_KARMA)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_KARMA`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_APPROVED)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_APPROVED`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_AGENT`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_TYPE`';
        }
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_PARENT`';
        }
        if ($this->isColumnModified(WpCommentsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`USER_ID`';
        }

        $sql = sprintf(
            'INSERT INTO `wp_comments` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`COMMENT_ID`':
                        $stmt->bindValue($identifier, $this->comment_id, PDO::PARAM_INT);
                        break;
                    case '`COMMENT_POST_ID`':
                        $stmt->bindValue($identifier, $this->comment_post_id, PDO::PARAM_INT);
                        break;
                    case '`COMMENT_AUTHOR`':
                        $stmt->bindValue($identifier, $this->comment_author, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_AUTHOR_EMAIL`':
                        $stmt->bindValue($identifier, $this->comment_author_email, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_AUTHOR_URL`':
                        $stmt->bindValue($identifier, $this->comment_author_url, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_AUTHOR_IP`':
                        $stmt->bindValue($identifier, $this->comment_author_ip, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_DATE`':
                        $stmt->bindValue($identifier, $this->comment_date, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_DATE_GMT`':
                        $stmt->bindValue($identifier, $this->comment_date_gmt, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_CONTENT`':
                        $stmt->bindValue($identifier, $this->comment_content, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_KARMA`':
                        $stmt->bindValue($identifier, $this->comment_karma, PDO::PARAM_INT);
                        break;
                    case '`COMMENT_APPROVED`':
                        $stmt->bindValue($identifier, $this->comment_approved, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_AGENT`':
                        $stmt->bindValue($identifier, $this->comment_agent, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_TYPE`':
                        $stmt->bindValue($identifier, $this->comment_type, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_PARENT`':
                        $stmt->bindValue($identifier, $this->comment_parent, PDO::PARAM_INT);
                        break;
                    case '`USER_ID`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
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
        $this->setCommentId($pk);

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


            if (($retval = WpCommentsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = WpCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getCommentId();
                break;
            case 1:
                return $this->getCommentPostId();
                break;
            case 2:
                return $this->getCommentAuthor();
                break;
            case 3:
                return $this->getCommentAuthorEmail();
                break;
            case 4:
                return $this->getCommentAuthorUrl();
                break;
            case 5:
                return $this->getCommentAuthorIp();
                break;
            case 6:
                return $this->getCommentDate();
                break;
            case 7:
                return $this->getCommentDateGmt();
                break;
            case 8:
                return $this->getCommentContent();
                break;
            case 9:
                return $this->getCommentKarma();
                break;
            case 10:
                return $this->getCommentApproved();
                break;
            case 11:
                return $this->getCommentAgent();
                break;
            case 12:
                return $this->getCommentType();
                break;
            case 13:
                return $this->getCommentParent();
                break;
            case 14:
                return $this->getUserId();
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
        if (isset($alreadyDumpedObjects['WpComments'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WpComments'][$this->getPrimaryKey()] = true;
        $keys = WpCommentsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getCommentId(),
            $keys[1] => $this->getCommentPostId(),
            $keys[2] => $this->getCommentAuthor(),
            $keys[3] => $this->getCommentAuthorEmail(),
            $keys[4] => $this->getCommentAuthorUrl(),
            $keys[5] => $this->getCommentAuthorIp(),
            $keys[6] => $this->getCommentDate(),
            $keys[7] => $this->getCommentDateGmt(),
            $keys[8] => $this->getCommentContent(),
            $keys[9] => $this->getCommentKarma(),
            $keys[10] => $this->getCommentApproved(),
            $keys[11] => $this->getCommentAgent(),
            $keys[12] => $this->getCommentType(),
            $keys[13] => $this->getCommentParent(),
            $keys[14] => $this->getUserId(),
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
        $pos = WpCommentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setCommentId($value);
                break;
            case 1:
                $this->setCommentPostId($value);
                break;
            case 2:
                $this->setCommentAuthor($value);
                break;
            case 3:
                $this->setCommentAuthorEmail($value);
                break;
            case 4:
                $this->setCommentAuthorUrl($value);
                break;
            case 5:
                $this->setCommentAuthorIp($value);
                break;
            case 6:
                $this->setCommentDate($value);
                break;
            case 7:
                $this->setCommentDateGmt($value);
                break;
            case 8:
                $this->setCommentContent($value);
                break;
            case 9:
                $this->setCommentKarma($value);
                break;
            case 10:
                $this->setCommentApproved($value);
                break;
            case 11:
                $this->setCommentAgent($value);
                break;
            case 12:
                $this->setCommentType($value);
                break;
            case 13:
                $this->setCommentParent($value);
                break;
            case 14:
                $this->setUserId($value);
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
        $keys = WpCommentsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setCommentId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCommentPostId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCommentAuthor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCommentAuthorEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCommentAuthorUrl($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCommentAuthorIp($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCommentDate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCommentDateGmt($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCommentContent($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCommentKarma($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommentApproved($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCommentAgent($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCommentType($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCommentParent($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUserId($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WpCommentsPeer::DATABASE_NAME);

        if ($this->isColumnModified(WpCommentsPeer::COMMENT_ID)) $criteria->add(WpCommentsPeer::COMMENT_ID, $this->comment_id);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_POST_ID)) $criteria->add(WpCommentsPeer::COMMENT_POST_ID, $this->comment_post_id);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR)) $criteria->add(WpCommentsPeer::COMMENT_AUTHOR, $this->comment_author);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_EMAIL)) $criteria->add(WpCommentsPeer::COMMENT_AUTHOR_EMAIL, $this->comment_author_email);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_URL)) $criteria->add(WpCommentsPeer::COMMENT_AUTHOR_URL, $this->comment_author_url);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AUTHOR_IP)) $criteria->add(WpCommentsPeer::COMMENT_AUTHOR_IP, $this->comment_author_ip);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_DATE)) $criteria->add(WpCommentsPeer::COMMENT_DATE, $this->comment_date);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_DATE_GMT)) $criteria->add(WpCommentsPeer::COMMENT_DATE_GMT, $this->comment_date_gmt);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_CONTENT)) $criteria->add(WpCommentsPeer::COMMENT_CONTENT, $this->comment_content);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_KARMA)) $criteria->add(WpCommentsPeer::COMMENT_KARMA, $this->comment_karma);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_APPROVED)) $criteria->add(WpCommentsPeer::COMMENT_APPROVED, $this->comment_approved);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_AGENT)) $criteria->add(WpCommentsPeer::COMMENT_AGENT, $this->comment_agent);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_TYPE)) $criteria->add(WpCommentsPeer::COMMENT_TYPE, $this->comment_type);
        if ($this->isColumnModified(WpCommentsPeer::COMMENT_PARENT)) $criteria->add(WpCommentsPeer::COMMENT_PARENT, $this->comment_parent);
        if ($this->isColumnModified(WpCommentsPeer::USER_ID)) $criteria->add(WpCommentsPeer::USER_ID, $this->user_id);

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
        $criteria = new Criteria(WpCommentsPeer::DATABASE_NAME);
        $criteria->add(WpCommentsPeer::COMMENT_ID, $this->comment_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getCommentId();
    }

    /**
     * Generic method to set the primary key (comment_id column).
     *
     * @param  string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setCommentId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getCommentId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of WpComments (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCommentPostId($this->getCommentPostId());
        $copyObj->setCommentAuthor($this->getCommentAuthor());
        $copyObj->setCommentAuthorEmail($this->getCommentAuthorEmail());
        $copyObj->setCommentAuthorUrl($this->getCommentAuthorUrl());
        $copyObj->setCommentAuthorIp($this->getCommentAuthorIp());
        $copyObj->setCommentDate($this->getCommentDate());
        $copyObj->setCommentDateGmt($this->getCommentDateGmt());
        $copyObj->setCommentContent($this->getCommentContent());
        $copyObj->setCommentKarma($this->getCommentKarma());
        $copyObj->setCommentApproved($this->getCommentApproved());
        $copyObj->setCommentAgent($this->getCommentAgent());
        $copyObj->setCommentType($this->getCommentType());
        $copyObj->setCommentParent($this->getCommentParent());
        $copyObj->setUserId($this->getUserId());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setCommentId(NULL); // this is a auto-increment column, so set to default value
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
     * @return WpComments Clone of current object.
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
     * @return WpCommentsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WpCommentsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->comment_id = null;
        $this->comment_post_id = null;
        $this->comment_author = null;
        $this->comment_author_email = null;
        $this->comment_author_url = null;
        $this->comment_author_ip = null;
        $this->comment_date = null;
        $this->comment_date_gmt = null;
        $this->comment_content = null;
        $this->comment_karma = null;
        $this->comment_approved = null;
        $this->comment_agent = null;
        $this->comment_type = null;
        $this->comment_parent = null;
        $this->user_id = null;
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
        return (string) $this->exportTo(WpCommentsPeer::DEFAULT_STRING_FORMAT);
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
