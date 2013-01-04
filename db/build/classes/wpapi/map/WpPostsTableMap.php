<?php



/**
 * This class defines the structure of the 'wp_posts' table.
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
class WpPostsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'wpapi.map.WpPostsTableMap';

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
        $this->setName('wp_posts');
        $this->setPhpName('WpPosts');
        $this->setClassname('WpPosts');
        $this->setPackage('wpapi');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('POST_AUTHOR', 'PostAuthor', 'BIGINT', true, null, 0);
        $this->addColumn('POST_DATE', 'PostDate', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('POST_DATE_GMT', 'PostDateGmt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('POST_CONTENT', 'PostContent', 'CLOB', true, null, null);
        $this->addColumn('POST_TITLE', 'PostTitle', 'LONGVARCHAR', true, null, null);
        $this->addColumn('POST_EXCERPT', 'PostExcerpt', 'LONGVARCHAR', true, null, null);
        $this->addColumn('POST_STATUS', 'PostStatus', 'VARCHAR', true, 20, 'publish');
        $this->addColumn('COMMENT_STATUS', 'CommentStatus', 'VARCHAR', true, 20, 'open');
        $this->addColumn('PING_STATUS', 'PingStatus', 'VARCHAR', true, 20, 'open');
        $this->addColumn('POST_PASSWORD', 'PostPassword', 'VARCHAR', true, 20, '');
        $this->addColumn('POST_NAME', 'PostName', 'VARCHAR', true, 200, '');
        $this->addColumn('TO_PING', 'ToPing', 'LONGVARCHAR', true, null, null);
        $this->addColumn('PINGED', 'Pinged', 'LONGVARCHAR', true, null, null);
        $this->addColumn('POST_MODIFIED', 'PostModified', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('POST_MODIFIED_GMT', 'PostModifiedGmt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('POST_CONTENT_FILTERED', 'PostContentFiltered', 'CLOB', true, null, null);
        $this->addColumn('POST_PARENT', 'PostParent', 'BIGINT', true, null, 0);
        $this->addColumn('GUID', 'Guid', 'VARCHAR', true, 255, '');
        $this->addColumn('MENU_ORDER', 'MenuOrder', 'INTEGER', true, null, 0);
        $this->addColumn('POST_TYPE', 'PostType', 'VARCHAR', true, 20, 'post');
        $this->addColumn('POST_MIME_TYPE', 'PostMimeType', 'VARCHAR', true, 100, '');
        $this->addColumn('COMMENT_COUNT', 'CommentCount', 'BIGINT', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // WpPostsTableMap
