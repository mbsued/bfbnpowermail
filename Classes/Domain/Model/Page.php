<?php
namespace Bfbn\Bfbnpowermail\Domain\Model;

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Page
 * @package Bfbn\Bfbnpowermail\Domain\Model;
 */
class Page extends \In2code\Powermail\Domain\Model\Page
{

    /**
     * Powermail Fields
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bfbn\Bfbnpowermail\Domain\Model\Field>
     */
    protected $fields = null;

    /**
     * @return ObjectStorage
     */
    public function getFields(): ObjectStorage
    {
        return $this->fields;
    }

    /**
     * @param ObjectStorage $fields
     * @return void
     */
    public function setFields(ObjectStorage $fields): void
    {
        $this->fields = $fields;
    }
}