<?php
/**
 * Created by PhpStorm.
 * User: yanker
 * Date: 12.11.14
 * Time: 16:45
 */
namespace ITM\FilePreviewBundle\Annotations;

use Doctrine\Common\Annotations\Annotation;

/**
 * Аннотация для загрузки файлов
 *
 * @Annotation
 * @Target({"PROPERTY"})
 */
class FilePreview extends Annotation
{
    public $uploadPath;
    public $uploadUrl;
    public $realName;
}