<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create one or more media items in a user's Google Photos library.
 * If an `albumid` is specified, the media items are also added to that album.
 * `albumPosition` is optional and can only be specified if an `albumId` is set.
 *
 * Generated from protobuf message <code>google.photos.library.v1.BatchCreateMediaItemsRequest</code>
 */
class BatchCreateMediaItemsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier of the album where the media items are added. The media items
     * are also added to the user's library. This is an optional field.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     */
    private $album_id = '';
    /**
     * List of media items to be created.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.NewMediaItem new_media_items = 2;</code>
     */
    private $new_media_items;
    /**
     * Position in the album where the media items are added. If not
     * specified, the media items are added to the end of the album (as per
     * the default value, that is, `LAST_IN_ALBUM`). The request fails if this
     * field is set and the `albumId` is not specified. The request will also fail
     * if you set the field and are not the owner of the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.AlbumPosition album_position = 4;</code>
     */
    private $album_position = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $album_id
     *           Identifier of the album where the media items are added. The media items
     *           are also added to the user's library. This is an optional field.
     *     @type \Google\Photos\Library\V1\NewMediaItem[]|\Google\Protobuf\Internal\RepeatedField $new_media_items
     *           List of media items to be created.
     *     @type \Google\Photos\Library\V1\AlbumPosition $album_position
     *           Position in the album where the media items are added. If not
     *           specified, the media items are added to the end of the album (as per
     *           the default value, that is, `LAST_IN_ALBUM`). The request fails if this
     *           field is set and the `albumId` is not specified. The request will also fail
     *           if you set the field and are not the owner of the shared album.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier of the album where the media items are added. The media items
     * are also added to the user's library. This is an optional field.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @return string
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * Identifier of the album where the media items are added. The media items
     * are also added to the user's library. This is an optional field.
     *
     * Generated from protobuf field <code>string album_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAlbumId($var)
    {
        GPBUtil::checkString($var, True);
        $this->album_id = $var;

        return $this;
    }

    /**
     * List of media items to be created.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.NewMediaItem new_media_items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNewMediaItems()
    {
        return $this->new_media_items;
    }

    /**
     * List of media items to be created.
     *
     * Generated from protobuf field <code>repeated .google.photos.library.v1.NewMediaItem new_media_items = 2;</code>
     * @param \Google\Photos\Library\V1\NewMediaItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNewMediaItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Photos\Library\V1\NewMediaItem::class);
        $this->new_media_items = $arr;

        return $this;
    }

    /**
     * Position in the album where the media items are added. If not
     * specified, the media items are added to the end of the album (as per
     * the default value, that is, `LAST_IN_ALBUM`). The request fails if this
     * field is set and the `albumId` is not specified. The request will also fail
     * if you set the field and are not the owner of the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.AlbumPosition album_position = 4;</code>
     * @return \Google\Photos\Library\V1\AlbumPosition
     */
    public function getAlbumPosition()
    {
        return $this->album_position;
    }

    /**
     * Position in the album where the media items are added. If not
     * specified, the media items are added to the end of the album (as per
     * the default value, that is, `LAST_IN_ALBUM`). The request fails if this
     * field is set and the `albumId` is not specified. The request will also fail
     * if you set the field and are not the owner of the shared album.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.AlbumPosition album_position = 4;</code>
     * @param \Google\Photos\Library\V1\AlbumPosition $var
     * @return $this
     */
    public function setAlbumPosition($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\AlbumPosition::class);
        $this->album_position = $var;

        return $this;
    }

}

