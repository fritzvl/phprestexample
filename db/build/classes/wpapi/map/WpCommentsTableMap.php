<?php



/**
 * This class defines the structure of the 'wp_comments' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.wpapi.map
 */
class WpCommentsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpCommentsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('wp_comments');
        $this->setPhpName('WpComments');
        $this->setClassname('WpComments');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('COMMENT_ID', 'CommentId', 'BIGINT', true, null, null);
        $this->addColumn('COMMENT_POST_ID', 'CommentPostId', 'BIGINT', true, null, 0);
        $this->addColumn('COMMENT_AUTHOR', 'CommentAuthor', 'VARCHAR', true, 255, null);
        $this->addColumn('COMMENT_AUTHOR_EMAIL', 'CommentAuthorEmail', 'VARCHAR', true, 100, '');
        $this->addColumn('COMMENT_AUTHOR_URL', 'CommentAuthorUrl', 'VARCHAR', true, 200, '');
        $this->addColumn('COMMENT_AUTHOR_IP', 'CommentAuthorIp', 'VARCHAR', true, 100, '');
        $this->addColumn('COMMENT_DATE', 'CommentDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('COMMENT_DATE_GMT', 'CommentDateGmt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('COMMENT_CONTENT', 'CommentContent', 'LONGVARCHAR', true, null, null);
        $this->addColumn('COMMENT_KARMA', 'CommentKarma', 'INTEGER', true, null, 0);
        $this->addColumn('COMMENT_APPROVED', 'CommentApproved', 'VARCHAR', true, 20, '1');
        $this->addColumn('COMMENT_AGENT', 'CommentAgent', 'VARCHAR', true, 255, '');
        $this->addColumn('COMMENT_TYPE', 'CommentType', 'VARCHAR', true, 20, '');
        $this->addColumn('COMMENT_PARENT', 'CommentParent', 'BIGINT', true, null, 0);
        $this->addColumn('USER_ID', 'UserId', 'BIGINT', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpCommentsTableMap
