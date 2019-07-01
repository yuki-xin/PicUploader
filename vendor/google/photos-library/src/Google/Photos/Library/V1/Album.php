<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of an album in Google Photos.
 * Albums are containers for media items. If an album has been shared by the
 * application, it contains an extra `shareInfo` property.
 *
 * Generated from protobuf message <code>google.photos.library.v1.Album</code>
 */
class Album extends \Google\Protobuf\Internal\Message
{
    /**
     * [Ouput only] Identifier for the album. This is a persistent identifier that
     * can be used between sessions to identify this album.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Name of the album displayed to the user in their Google Photos account.
     * This string shouldn't be more than 500 characters.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * [Output only] Google Photos URL for the album. The user needs to be signed
     * in to their Google Photos account to access this link.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     */
    private $product_url = '';
    /**
     * [Output only] True if you can create media items in this album.
     * This field is based on the scopes granted and permissions of the album. If
     * the scopes are changed or permissions of the album are changed, this field
     * is updated.
     *
     * Generated from protobuf field <code>bool is_writeable = 4;</code>
     */
    private $is_writeable = false;
    /**
     * [Output only] Information related to shared albums.
     * This field is only populated if the album is a shared album, the
     * developer created the album and the user has granted the
     * `photoslibrary.sharing` scope.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 5;</code>
     */
    private $share_info = null;
    /**
     * [Output only] The number of media items in the album.
     *
     * Generated from protobuf field <code>int64 media_items_count = 6;</code>
     */
    private $media_items_count = 0;
    /**
     * [Output only] A URL to the cover photo's bytes. This shouldn't be used as
     * is. Parameters should be appended to this URL before use. For example,
     * `'=w2048-h1024'` sets the dimensions of
     * the cover photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string cover_photo_base_url = 7;</code>
     */
    private $cover_photo_base_url = '';
    /**
     * [Output only] Identifier for the media item associated with the cover
     * photo.
     *
     * Generated from protobuf field <code>string cover_photo_media_item_id = 8;</code>
     */
    private $cover_photo_media_item_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           [Ouput only] Identifier for the album. This is a persistent identifier that
     *           can be used between sessions to identify this album.
     *     @type string $title
     *           Name of the album displayed to the user in their Google Photos account.
     *           This string shouldn't be more than 500 characters.
     *     @type string $product_url
     *           [Output only] Google Photos URL for the album. The user needs to be signed
     *           in to their Google Photos account to access this link.
     *     @type bool $is_writeable
     *           [Output only] True if you can create media items in this album.
     *           This field is based on the scopes granted and permissions of the album. If
     *           the scopes are changed or permissions of the album are changed, this field
     *           is updated.
     *     @type \Google\Photos\Library\V1\ShareInfo $share_info
     *           [Output only] Information related to shared albums.
     *           This field is only populated if the album is a shared album, the
     *           developer created the album and the user has granted the
     *           `photoslibrary.sharing` scope.
     *     @type int|string $media_items_count
     *           [Output only] The number of media items in the album.
     *     @type string $cover_photo_base_url
     *           [Output only] A URL to the cover photo's bytes. This shouldn't be used as
     *           is. Parameters should be appended to this URL before use. For example,
     *           `'=w2048-h1024'` sets the dimensions of
     *           the cover photo to have a width of 2048 px and height of 1024 px.
     *     @type string $cover_photo_media_item_id
     *           [Output only] Identifier for the media item associated with the cover
     *           photo.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * [Ouput only] Identifier for the album. This is a persistent identifier that
     * can be used between sessions to identify this album.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Ouput only] Identifier for the album. This is a persistent identifier that
     * can be used between sessions to identify this album.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Name of the album displayed to the user in their Google Photos account.
     * This string shouldn't be more than 500 characters.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Name of the album displayed to the user in their Google Photos account.
     * This string shouldn't be more than 500 characters.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * [Output only] Google Photos URL for the album. The user needs to be signed
     * in to their Google Photos account to access this link.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     * @return string
     */
    public function getProductUrl()
    {
        return $this->product_url;
    }

    /**
     * [Output only] Google Photos URL for the album. The user needs to be signed
     * in to their Google Photos account to access this link.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProductUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_url = $var;

        return $this;
    }

    /**
     * [Output only] True if you can create media items in this album.
     * This field is based on the scopes granted and permissions of the album. If
     * the scopes are changed or permissions of the album are changed, this field
     * is updated.
     *
     * Generated from protobuf field <code>bool is_writeable = 4;</code>
     * @return bool
     */
    public function getIsWriteable()
    {
        return $this->is_writeable;
    }

    /**
     * [Output only] True if you can create media items in this album.
     * This field is based on the scopes granted and permissions of the album. If
     * the scopes are changed or permissions of the album are changed, this field
     * is updated.
     *
     * Generated from protobuf field <code>bool is_writeable = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsWriteable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_writeable = $var;

        return $this;
    }

    /**
     * [Output only] Information related to shared albums.
     * This field is only populated if the album is a shared album, the
     * developer created the album and the user has granted the
     * `photoslibrary.sharing` scope.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 5;</code>
     * @return \Google\Photos\Library\V1\ShareInfo
     */
    public function getShareInfo()
    {
        return $this->share_info;
    }

    /**
     * [Output only] Information related to shared albums.
     * This field is only populated if the album is a shared album, the
     * developer created the album and the user has granted the
     * `photoslibrary.sharing` scope.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ShareInfo share_info = 5;</code>
     * @param \Google\Photos\Library\V1\ShareInfo $var
     * @return $this
     */
    public function setShareInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\ShareInfo::class);
        $this->share_info = $var;

        return $this;
    }

    /**
     * [Output only] The number of media items in the album.
     *
     * Generated from protobuf field <code>int64 media_items_count = 6;</code>
     * @return int|string
     */
    public function getMediaItemsCount()
    {
        return $this->media_items_count;
    }

    /**
     * [Output only] The number of media items in the album.
     *
     * Generated from protobuf field <code>int64 media_items_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMediaItemsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->media_items_count = $var;

        return $this;
    }

    /**
     * [Output only] A URL to the cover photo's bytes. This shouldn't be used as
     * is. Parameters should be appended to this URL before use. For example,
     * `'=w2048-h1024'` sets the dimensions of
     * the cover photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string cover_photo_base_url = 7;</code>
     * @return string
     */
    public function getCoverPhotoBaseUrl()
    {
        return $this->cover_photo_base_url;
    }

    /**
     * [Output only] A URL to the cover photo's bytes. This shouldn't be used as
     * is. Parameters should be appended to this URL before use. For example,
     * `'=w2048-h1024'` sets the dimensions of
     * the cover photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string cover_photo_base_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCoverPhotoBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->cover_photo_base_url = $var;

        return $this;
    }

    /**
     * [Output only] Identifier for the media item associated with the cover
     * photo.
     *
     * Generated from protobuf field <code>string cover_photo_media_item_id = 8;</code>
     * @return string
     */
    public function getCoverPhotoMediaItemId()
    {
        return $this->cover_photo_media_item_id;
    }

    /**
     * [Output only] Identifier for the media item associated with the cover
     * photo.
     *
     * Generated from protobuf field <code>string cover_photo_media_item_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCoverPhotoMediaItemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cover_photo_media_item_id = $var;

        return $this;
    }

}

