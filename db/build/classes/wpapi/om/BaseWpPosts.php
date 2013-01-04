<?php


/**
 * Base class that represents a row from the 'wp_posts' table.
 *
 *
 *
 * @package    propel.generator.wpapi.om
 */
abstract class BaseWpPosts extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WpPostsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WpPostsPeer
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
     * The value for the post_author field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $post_author;

    /**
     * The value for the post_date field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $post_date;

    /**
     * The value for the post_date_gmt field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $post_date_gmt;

    /**
     * The value for the post_content field.
     * @var        string
     */
    protected $post_content;

    /**
     * The value for the post_title field.
     * @var        string
     */
    protected $post_title;

    /**
     * The value for the post_excerpt field.
     * @var        string
     */
    protected $post_excerpt;

    /**
     * The value for the post_status field.
     * Note: this column has a database default value of: 'publish'
     * @var        string
     */
    protected $post_status;

    /**
     * The value for the comment_status field.
     * Note: this column has a database default value of: 'open'
     * @var        string
     */
    protected $comment_status;

    /**
     * The value for the ping_status field.
     * Note: this column has a database default value of: 'open'
     * @var        string
     */
    protected $ping_status;

    /**
     * The value for the post_password field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $post_password;

    /**
     * The value for the post_name field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $post_name;

    /**
     * The value for the to_ping field.
     * @var        string
     */
    protected $to_ping;

    /**
     * The value for the pinged field.
     * @var        string
     */
    protected $pinged;

    /**
     * The value for the post_modified field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $post_modified;

    /**
     * The value for the post_modified_gmt field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $post_modified_gmt;

    /**
     * The value for the post_content_filtered field.
     * @var        string
     */
    protected $post_content_filtered;

    /**
     * The value for the post_parent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $post_parent;

    /**
     * The value for the guid field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $guid;

    /**
     * The value for the menu_order field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $menu_order;

    /**
     * The value for the post_type field.
     * Note: this column has a database default value of: 'post'
     * @var        string
     */
    protected $post_type;

    /**
     * The value for the post_mime_type field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $post_mime_type;

    /**
     * The value for the comment_count field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $comment_count;

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
        $this->post_author = '0';
        $this->post_date = NULL;
        $this->post_date_gmt = NULL;
        $this->post_status = 'publish';
        $this->comment_status = 'open';
        $this->ping_status = 'open';
        $this->post_password = '';
        $this->post_name = '';
        $this->post_modified = NULL;
        $this->post_modified_gmt = NULL;
        $this->post_parent = '0';
        $this->guid = '';
        $this->menu_order = 0;
        $this->post_type = 'post';
        $this->post_mime_type = '';
        $this->comment_count = '0';
    }

    /**
     * Initializes internal state of BaseWpPosts object.
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
     * Get the [post_author] column value.
     *
     * @return string
     */
    public function getPostAuthor()
    {
        return $this->post_author;
    }

    /**
     * Get the [optionally formatted] temporal [post_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostDate($format = 'Y-m-d H:i:s')
    {
        if ($this->post_date === null) {
            return null;
        }

        if ($this->post_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->post_date);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_date, true), $x);
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
     * Get the [optionally formatted] temporal [post_date_gmt] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostDateGmt($format = 'Y-m-d H:i:s')
    {
        if ($this->post_date_gmt === null) {
            return null;
        }

        if ($this->post_date_gmt === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->post_date_gmt);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_date_gmt, true), $x);
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
     * Get the [post_content] column value.
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->post_content;
    }

    /**
     * Get the [post_title] column value.
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }

    /**
     * Get the [post_excerpt] column value.
     *
     * @return string
     */
    public function getPostExcerpt()
    {
        return $this->post_excerpt;
    }

    /**
     * Get the [post_status] column value.
     *
     * @return string
     */
    public function getPostStatus()
    {
        return $this->post_status;
    }

    /**
     * Get the [comment_status] column value.
     *
     * @return string
     */
    public function getCommentStatus()
    {
        return $this->comment_status;
    }

    /**
     * Get the [ping_status] column value.
     *
     * @return string
     */
    public function getPingStatus()
    {
        return $this->ping_status;
    }

    /**
     * Get the [post_password] column value.
     *
     * @return string
     */
    public function getPostPassword()
    {
        return $this->post_password;
    }

    /**
     * Get the [post_name] column value.
     *
     * @return string
     */
    public function getPostName()
    {
        return $this->post_name;
    }

    /**
     * Get the [to_ping] column value.
     *
     * @return string
     */
    public function getToPing()
    {
        return $this->to_ping;
    }

    /**
     * Get the [pinged] column value.
     *
     * @return string
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Get the [optionally formatted] temporal [post_modified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostModified($format = 'Y-m-d H:i:s')
    {
        if ($this->post_modified === null) {
            return null;
        }

        if ($this->post_modified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->post_modified);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_modified, true), $x);
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
     * Get the [optionally formatted] temporal [post_modified_gmt] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPostModifiedGmt($format = 'Y-m-d H:i:s')
    {
        if ($this->post_modified_gmt === null) {
            return null;
        }

        if ($this->post_modified_gmt === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        } else {
            try {
                $dt = new DateTime($this->post_modified_gmt);
            } catch (Exception $x) {
                throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->post_modified_gmt, true), $x);
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
     * Get the [post_content_filtered] column value.
     *
     * @return string
     */
    public function getPostContentFiltered()
    {
        return $this->post_content_filtered;
    }

    /**
     * Get the [post_parent] column value.
     *
     * @return string
     */
    public function getPostParent()
    {
        return $this->post_parent;
    }

    /**
     * Get the [guid] column value.
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Get the [menu_order] column value.
     *
     * @return int
     */
    public function getMenuOrder()
    {
        return $this->menu_order;
    }

    /**
     * Get the [post_type] column value.
     *
     * @return string
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * Get the [post_mime_type] column value.
     *
     * @return string
     */
    public function getPostMimeType()
    {
        return $this->post_mime_type;
    }

    /**
     * Get the [comment_count] column value.
     *
     * @return string
     */
    public function getCommentCount()
    {
        return $this->comment_count;
    }

    /**
     * Set the value of [id] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = WpPostsPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [post_author] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostAuthor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_author !== $v) {
            $this->post_author = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_AUTHOR;
        }


        return $this;
    } // setPostAuthor()

    /**
     * Sets the value of [post_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->post_date !== null || $dt !== null) {
            $currentDateAsString = ($this->post_date !== null && $tmpDt = new DateTime($this->post_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->post_date = $newDateAsString;
                $this->modifiedColumns[] = WpPostsPeer::POST_DATE;
            }
        } // if either are not null


        return $this;
    } // setPostDate()

    /**
     * Sets the value of [post_date_gmt] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostDateGmt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->post_date_gmt !== null || $dt !== null) {
            $currentDateAsString = ($this->post_date_gmt !== null && $tmpDt = new DateTime($this->post_date_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->post_date_gmt = $newDateAsString;
                $this->modifiedColumns[] = WpPostsPeer::POST_DATE_GMT;
            }
        } // if either are not null


        return $this;
    } // setPostDateGmt()

    /**
     * Set the value of [post_content] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostContent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_content !== $v) {
            $this->post_content = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_CONTENT;
        }


        return $this;
    } // setPostContent()

    /**
     * Set the value of [post_title] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_title !== $v) {
            $this->post_title = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_TITLE;
        }


        return $this;
    } // setPostTitle()

    /**
     * Set the value of [post_excerpt] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostExcerpt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_excerpt !== $v) {
            $this->post_excerpt = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_EXCERPT;
        }


        return $this;
    } // setPostExcerpt()

    /**
     * Set the value of [post_status] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_status !== $v) {
            $this->post_status = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_STATUS;
        }


        return $this;
    } // setPostStatus()

    /**
     * Set the value of [comment_status] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setCommentStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_status !== $v) {
            $this->comment_status = $v;
            $this->modifiedColumns[] = WpPostsPeer::COMMENT_STATUS;
        }


        return $this;
    } // setCommentStatus()

    /**
     * Set the value of [ping_status] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPingStatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->ping_status !== $v) {
            $this->ping_status = $v;
            $this->modifiedColumns[] = WpPostsPeer::PING_STATUS;
        }


        return $this;
    } // setPingStatus()

    /**
     * Set the value of [post_password] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_password !== $v) {
            $this->post_password = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_PASSWORD;
        }


        return $this;
    } // setPostPassword()

    /**
     * Set the value of [post_name] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_name !== $v) {
            $this->post_name = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_NAME;
        }


        return $this;
    } // setPostName()

    /**
     * Set the value of [to_ping] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setToPing($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->to_ping !== $v) {
            $this->to_ping = $v;
            $this->modifiedColumns[] = WpPostsPeer::TO_PING;
        }


        return $this;
    } // setToPing()

    /**
     * Set the value of [pinged] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPinged($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pinged !== $v) {
            $this->pinged = $v;
            $this->modifiedColumns[] = WpPostsPeer::PINGED;
        }


        return $this;
    } // setPinged()

    /**
     * Sets the value of [post_modified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostModified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->post_modified !== null || $dt !== null) {
            $currentDateAsString = ($this->post_modified !== null && $tmpDt = new DateTime($this->post_modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->post_modified = $newDateAsString;
                $this->modifiedColumns[] = WpPostsPeer::POST_MODIFIED;
            }
        } // if either are not null


        return $this;
    } // setPostModified()

    /**
     * Sets the value of [post_modified_gmt] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostModifiedGmt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->post_modified_gmt !== null || $dt !== null) {
            $currentDateAsString = ($this->post_modified_gmt !== null && $tmpDt = new DateTime($this->post_modified_gmt)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->post_modified_gmt = $newDateAsString;
                $this->modifiedColumns[] = WpPostsPeer::POST_MODIFIED_GMT;
            }
        } // if either are not null


        return $this;
    } // setPostModifiedGmt()

    /**
     * Set the value of [post_content_filtered] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostContentFiltered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_content_filtered !== $v) {
            $this->post_content_filtered = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_CONTENT_FILTERED;
        }


        return $this;
    } // setPostContentFiltered()

    /**
     * Set the value of [post_parent] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostParent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_parent !== $v) {
            $this->post_parent = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_PARENT;
        }


        return $this;
    } // setPostParent()

    /**
     * Set the value of [guid] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setGuid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->guid !== $v) {
            $this->guid = $v;
            $this->modifiedColumns[] = WpPostsPeer::GUID;
        }


        return $this;
    } // setGuid()

    /**
     * Set the value of [menu_order] column.
     *
     * @param int $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setMenuOrder($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->menu_order !== $v) {
            $this->menu_order = $v;
            $this->modifiedColumns[] = WpPostsPeer::MENU_ORDER;
        }


        return $this;
    } // setMenuOrder()

    /**
     * Set the value of [post_type] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_type !== $v) {
            $this->post_type = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_TYPE;
        }


        return $this;
    } // setPostType()

    /**
     * Set the value of [post_mime_type] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setPostMimeType($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->post_mime_type !== $v) {
            $this->post_mime_type = $v;
            $this->modifiedColumns[] = WpPostsPeer::POST_MIME_TYPE;
        }


        return $this;
    } // setPostMimeType()

    /**
     * Set the value of [comment_count] column.
     *
     * @param string $v new value
     * @return WpPosts The current object (for fluent API support)
     */
    public function setCommentCount($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->comment_count !== $v) {
            $this->comment_count = $v;
            $this->modifiedColumns[] = WpPostsPeer::COMMENT_COUNT;
        }


        return $this;
    } // setCommentCount()

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
            if ($this->post_author !== '0') {
                return false;
            }

            if ($this->post_date !== NULL) {
                return false;
            }

            if ($this->post_date_gmt !== NULL) {
                return false;
            }

            if ($this->post_status !== 'publish') {
                return false;
            }

            if ($this->comment_status !== 'open') {
                return false;
            }

            if ($this->ping_status !== 'open') {
                return false;
            }

            if ($this->post_password !== '') {
                return false;
            }

            if ($this->post_name !== '') {
                return false;
            }

            if ($this->post_modified !== NULL) {
                return false;
            }

            if ($this->post_modified_gmt !== NULL) {
                return false;
            }

            if ($this->post_parent !== '0') {
                return false;
            }

            if ($this->guid !== '') {
                return false;
            }

            if ($this->menu_order !== 0) {
                return false;
            }

            if ($this->post_type !== 'post') {
                return false;
            }

            if ($this->post_mime_type !== '') {
                return false;
            }

            if ($this->comment_count !== '0') {
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
            $this->post_author = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->post_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->post_date_gmt = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->post_content = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->post_title = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->post_excerpt = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->post_status = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->comment_status = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ping_status = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->post_password = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->post_name = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->to_ping = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->pinged = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->post_modified = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->post_modified_gmt = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->post_content_filtered = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->post_parent = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->guid = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->menu_order = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->post_type = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->post_mime_type = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->comment_count = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 23; // 23 = WpPostsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating WpPosts object", $e);
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
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WpPostsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WpPostsQuery::create()
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
            $con = Propel::getConnection(WpPostsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                WpPostsPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = WpPostsPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . WpPostsPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WpPostsPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_AUTHOR)) {
            $modifiedColumns[':p' . $index++]  = '`POST_AUTHOR`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_DATE)) {
            $modifiedColumns[':p' . $index++]  = '`POST_DATE`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_DATE_GMT)) {
            $modifiedColumns[':p' . $index++]  = '`POST_DATE_GMT`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_CONTENT)) {
            $modifiedColumns[':p' . $index++]  = '`POST_CONTENT`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_TITLE)) {
            $modifiedColumns[':p' . $index++]  = '`POST_TITLE`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_EXCERPT)) {
            $modifiedColumns[':p' . $index++]  = '`POST_EXCERPT`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`POST_STATUS`';
        }
        if ($this->isColumnModified(WpPostsPeer::COMMENT_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_STATUS`';
        }
        if ($this->isColumnModified(WpPostsPeer::PING_STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`PING_STATUS`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`POST_PASSWORD`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`POST_NAME`';
        }
        if ($this->isColumnModified(WpPostsPeer::TO_PING)) {
            $modifiedColumns[':p' . $index++]  = '`TO_PING`';
        }
        if ($this->isColumnModified(WpPostsPeer::PINGED)) {
            $modifiedColumns[':p' . $index++]  = '`PINGED`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`POST_MODIFIED`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_MODIFIED_GMT)) {
            $modifiedColumns[':p' . $index++]  = '`POST_MODIFIED_GMT`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_CONTENT_FILTERED)) {
            $modifiedColumns[':p' . $index++]  = '`POST_CONTENT_FILTERED`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_PARENT)) {
            $modifiedColumns[':p' . $index++]  = '`POST_PARENT`';
        }
        if ($this->isColumnModified(WpPostsPeer::GUID)) {
            $modifiedColumns[':p' . $index++]  = '`GUID`';
        }
        if ($this->isColumnModified(WpPostsPeer::MENU_ORDER)) {
            $modifiedColumns[':p' . $index++]  = '`MENU_ORDER`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`POST_TYPE`';
        }
        if ($this->isColumnModified(WpPostsPeer::POST_MIME_TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`POST_MIME_TYPE`';
        }
        if ($this->isColumnModified(WpPostsPeer::COMMENT_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`COMMENT_COUNT`';
        }

        $sql = sprintf(
            'INSERT INTO `wp_posts` (%s) VALUES (%s)',
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
                    case '`POST_AUTHOR`':
                        $stmt->bindValue($identifier, $this->post_author, PDO::PARAM_INT);
                        break;
                    case '`POST_DATE`':
                        $stmt->bindValue($identifier, $this->post_date, PDO::PARAM_STR);
                        break;
                    case '`POST_DATE_GMT`':
                        $stmt->bindValue($identifier, $this->post_date_gmt, PDO::PARAM_STR);
                        break;
                    case '`POST_CONTENT`':
                        $stmt->bindValue($identifier, $this->post_content, PDO::PARAM_STR);
                        break;
                    case '`POST_TITLE`':
                        $stmt->bindValue($identifier, $this->post_title, PDO::PARAM_STR);
                        break;
                    case '`POST_EXCERPT`':
                        $stmt->bindValue($identifier, $this->post_excerpt, PDO::PARAM_STR);
                        break;
                    case '`POST_STATUS`':
                        $stmt->bindValue($identifier, $this->post_status, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_STATUS`':
                        $stmt->bindValue($identifier, $this->comment_status, PDO::PARAM_STR);
                        break;
                    case '`PING_STATUS`':
                        $stmt->bindValue($identifier, $this->ping_status, PDO::PARAM_STR);
                        break;
                    case '`POST_PASSWORD`':
                        $stmt->bindValue($identifier, $this->post_password, PDO::PARAM_STR);
                        break;
                    case '`POST_NAME`':
                        $stmt->bindValue($identifier, $this->post_name, PDO::PARAM_STR);
                        break;
                    case '`TO_PING`':
                        $stmt->bindValue($identifier, $this->to_ping, PDO::PARAM_STR);
                        break;
                    case '`PINGED`':
                        $stmt->bindValue($identifier, $this->pinged, PDO::PARAM_STR);
                        break;
                    case '`POST_MODIFIED`':
                        $stmt->bindValue($identifier, $this->post_modified, PDO::PARAM_STR);
                        break;
                    case '`POST_MODIFIED_GMT`':
                        $stmt->bindValue($identifier, $this->post_modified_gmt, PDO::PARAM_STR);
                        break;
                    case '`POST_CONTENT_FILTERED`':
                        $stmt->bindValue($identifier, $this->post_content_filtered, PDO::PARAM_STR);
                        break;
                    case '`POST_PARENT`':
                        $stmt->bindValue($identifier, $this->post_parent, PDO::PARAM_INT);
                        break;
                    case '`GUID`':
                        $stmt->bindValue($identifier, $this->guid, PDO::PARAM_STR);
                        break;
                    case '`MENU_ORDER`':
                        $stmt->bindValue($identifier, $this->menu_order, PDO::PARAM_INT);
                        break;
                    case '`POST_TYPE`':
                        $stmt->bindValue($identifier, $this->post_type, PDO::PARAM_STR);
                        break;
                    case '`POST_MIME_TYPE`':
                        $stmt->bindValue($identifier, $this->post_mime_type, PDO::PARAM_STR);
                        break;
                    case '`COMMENT_COUNT`':
                        $stmt->bindValue($identifier, $this->comment_count, PDO::PARAM_INT);
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


            if (($retval = WpPostsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = WpPostsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getPostAuthor();
                break;
            case 2:
                return $this->getPostDate();
                break;
            case 3:
                return $this->getPostDateGmt();
                break;
            case 4:
                return $this->getPostContent();
                break;
            case 5:
                return $this->getPostTitle();
                break;
            case 6:
                return $this->getPostExcerpt();
                break;
            case 7:
                return $this->getPostStatus();
                break;
            case 8:
                return $this->getCommentStatus();
                break;
            case 9:
                return $this->getPingStatus();
                break;
            case 10:
                return $this->getPostPassword();
                break;
            case 11:
                return $this->getPostName();
                break;
            case 12:
                return $this->getToPing();
                break;
            case 13:
                return $this->getPinged();
                break;
            case 14:
                return $this->getPostModified();
                break;
            case 15:
                return $this->getPostModifiedGmt();
                break;
            case 16:
                return $this->getPostContentFiltered();
                break;
            case 17:
                return $this->getPostParent();
                break;
            case 18:
                return $this->getGuid();
                break;
            case 19:
                return $this->getMenuOrder();
                break;
            case 20:
                return $this->getPostType();
                break;
            case 21:
                return $this->getPostMimeType();
                break;
            case 22:
                return $this->getCommentCount();
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
        if (isset($alreadyDumpedObjects['WpPosts'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['WpPosts'][$this->getPrimaryKey()] = true;
        $keys = WpPostsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPostAuthor(),
            $keys[2] => $this->getPostDate(),
            $keys[3] => $this->getPostDateGmt(),
            $keys[4] => $this->getPostContent(),
            $keys[5] => $this->getPostTitle(),
            $keys[6] => $this->getPostExcerpt(),
            $keys[7] => $this->getPostStatus(),
            $keys[8] => $this->getCommentStatus(),
            $keys[9] => $this->getPingStatus(),
            $keys[10] => $this->getPostPassword(),
            $keys[11] => $this->getPostName(),
            $keys[12] => $this->getToPing(),
            $keys[13] => $this->getPinged(),
            $keys[14] => $this->getPostModified(),
            $keys[15] => $this->getPostModifiedGmt(),
            $keys[16] => $this->getPostContentFiltered(),
            $keys[17] => $this->getPostParent(),
            $keys[18] => $this->getGuid(),
            $keys[19] => $this->getMenuOrder(),
            $keys[20] => $this->getPostType(),
            $keys[21] => $this->getPostMimeType(),
            $keys[22] => $this->getCommentCount(),
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
        $pos = WpPostsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setPostAuthor($value);
                break;
            case 2:
                $this->setPostDate($value);
                break;
            case 3:
                $this->setPostDateGmt($value);
                break;
            case 4:
                $this->setPostContent($value);
                break;
            case 5:
                $this->setPostTitle($value);
                break;
            case 6:
                $this->setPostExcerpt($value);
                break;
            case 7:
                $this->setPostStatus($value);
                break;
            case 8:
                $this->setCommentStatus($value);
                break;
            case 9:
                $this->setPingStatus($value);
                break;
            case 10:
                $this->setPostPassword($value);
                break;
            case 11:
                $this->setPostName($value);
                break;
            case 12:
                $this->setToPing($value);
                break;
            case 13:
                $this->setPinged($value);
                break;
            case 14:
                $this->setPostModified($value);
                break;
            case 15:
                $this->setPostModifiedGmt($value);
                break;
            case 16:
                $this->setPostContentFiltered($value);
                break;
            case 17:
                $this->setPostParent($value);
                break;
            case 18:
                $this->setGuid($value);
                break;
            case 19:
                $this->setMenuOrder($value);
                break;
            case 20:
                $this->setPostType($value);
                break;
            case 21:
                $this->setPostMimeType($value);
                break;
            case 22:
                $this->setCommentCount($value);
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
        $keys = WpPostsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPostAuthor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPostDate($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPostDateGmt($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPostContent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPostTitle($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPostExcerpt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPostStatus($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCommentStatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPingStatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPostPassword($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPostName($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setToPing($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setPinged($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPostModified($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPostModifiedGmt($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setPostContentFiltered($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPostParent($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setGuid($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMenuOrder($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPostType($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPostMimeType($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCommentCount($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WpPostsPeer::DATABASE_NAME);

        if ($this->isColumnModified(WpPostsPeer::ID)) $criteria->add(WpPostsPeer::ID, $this->id);
        if ($this->isColumnModified(WpPostsPeer::POST_AUTHOR)) $criteria->add(WpPostsPeer::POST_AUTHOR, $this->post_author);
        if ($this->isColumnModified(WpPostsPeer::POST_DATE)) $criteria->add(WpPostsPeer::POST_DATE, $this->post_date);
        if ($this->isColumnModified(WpPostsPeer::POST_DATE_GMT)) $criteria->add(WpPostsPeer::POST_DATE_GMT, $this->post_date_gmt);
        if ($this->isColumnModified(WpPostsPeer::POST_CONTENT)) $criteria->add(WpPostsPeer::POST_CONTENT, $this->post_content);
        if ($this->isColumnModified(WpPostsPeer::POST_TITLE)) $criteria->add(WpPostsPeer::POST_TITLE, $this->post_title);
        if ($this->isColumnModified(WpPostsPeer::POST_EXCERPT)) $criteria->add(WpPostsPeer::POST_EXCERPT, $this->post_excerpt);
        if ($this->isColumnModified(WpPostsPeer::POST_STATUS)) $criteria->add(WpPostsPeer::POST_STATUS, $this->post_status);
        if ($this->isColumnModified(WpPostsPeer::COMMENT_STATUS)) $criteria->add(WpPostsPeer::COMMENT_STATUS, $this->comment_status);
        if ($this->isColumnModified(WpPostsPeer::PING_STATUS)) $criteria->add(WpPostsPeer::PING_STATUS, $this->ping_status);
        if ($this->isColumnModified(WpPostsPeer::POST_PASSWORD)) $criteria->add(WpPostsPeer::POST_PASSWORD, $this->post_password);
        if ($this->isColumnModified(WpPostsPeer::POST_NAME)) $criteria->add(WpPostsPeer::POST_NAME, $this->post_name);
        if ($this->isColumnModified(WpPostsPeer::TO_PING)) $criteria->add(WpPostsPeer::TO_PING, $this->to_ping);
        if ($this->isColumnModified(WpPostsPeer::PINGED)) $criteria->add(WpPostsPeer::PINGED, $this->pinged);
        if ($this->isColumnModified(WpPostsPeer::POST_MODIFIED)) $criteria->add(WpPostsPeer::POST_MODIFIED, $this->post_modified);
        if ($this->isColumnModified(WpPostsPeer::POST_MODIFIED_GMT)) $criteria->add(WpPostsPeer::POST_MODIFIED_GMT, $this->post_modified_gmt);
        if ($this->isColumnModified(WpPostsPeer::POST_CONTENT_FILTERED)) $criteria->add(WpPostsPeer::POST_CONTENT_FILTERED, $this->post_content_filtered);
        if ($this->isColumnModified(WpPostsPeer::POST_PARENT)) $criteria->add(WpPostsPeer::POST_PARENT, $this->post_parent);
        if ($this->isColumnModified(WpPostsPeer::GUID)) $criteria->add(WpPostsPeer::GUID, $this->guid);
        if ($this->isColumnModified(WpPostsPeer::MENU_ORDER)) $criteria->add(WpPostsPeer::MENU_ORDER, $this->menu_order);
        if ($this->isColumnModified(WpPostsPeer::POST_TYPE)) $criteria->add(WpPostsPeer::POST_TYPE, $this->post_type);
        if ($this->isColumnModified(WpPostsPeer::POST_MIME_TYPE)) $criteria->add(WpPostsPeer::POST_MIME_TYPE, $this->post_mime_type);
        if ($this->isColumnModified(WpPostsPeer::COMMENT_COUNT)) $criteria->add(WpPostsPeer::COMMENT_COUNT, $this->comment_count);

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
        $criteria = new Criteria(WpPostsPeer::DATABASE_NAME);
        $criteria->add(WpPostsPeer::ID, $this->id);

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
     * @param object $copyObj An object of WpPosts (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPostAuthor($this->getPostAuthor());
        $copyObj->setPostDate($this->getPostDate());
        $copyObj->setPostDateGmt($this->getPostDateGmt());
        $copyObj->setPostContent($this->getPostContent());
        $copyObj->setPostTitle($this->getPostTitle());
        $copyObj->setPostExcerpt($this->getPostExcerpt());
        $copyObj->setPostStatus($this->getPostStatus());
        $copyObj->setCommentStatus($this->getCommentStatus());
        $copyObj->setPingStatus($this->getPingStatus());
        $copyObj->setPostPassword($this->getPostPassword());
        $copyObj->setPostName($this->getPostName());
        $copyObj->setToPing($this->getToPing());
        $copyObj->setPinged($this->getPinged());
        $copyObj->setPostModified($this->getPostModified());
        $copyObj->setPostModifiedGmt($this->getPostModifiedGmt());
        $copyObj->setPostContentFiltered($this->getPostContentFiltered());
        $copyObj->setPostParent($this->getPostParent());
        $copyObj->setGuid($this->getGuid());
        $copyObj->setMenuOrder($this->getMenuOrder());
        $copyObj->setPostType($this->getPostType());
        $copyObj->setPostMimeType($this->getPostMimeType());
        $copyObj->setCommentCount($this->getCommentCount());
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
     * @return WpPosts Clone of current object.
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
     * @return WpPostsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WpPostsPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->post_author = null;
        $this->post_date = null;
        $this->post_date_gmt = null;
        $this->post_content = null;
        $this->post_title = null;
        $this->post_excerpt = null;
        $this->post_status = null;
        $this->comment_status = null;
        $this->ping_status = null;
        $this->post_password = null;
        $this->post_name = null;
        $this->to_ping = null;
        $this->pinged = null;
        $this->post_modified = null;
        $this->post_modified_gmt = null;
        $this->post_content_filtered = null;
        $this->post_parent = null;
        $this->guid = null;
        $this->menu_order = null;
        $this->post_type = null;
        $this->post_mime_type = null;
        $this->comment_count = null;
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
        return (string) $this->exportTo(WpPostsPeer::DEFAULT_STRING_FORMAT);
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
