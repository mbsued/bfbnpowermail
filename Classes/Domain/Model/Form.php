<?php
namespace Bfbn\Bfbnpowermail\Domain\Model;

use In2code\Powermail\Utility\ConfigurationUtility;
use In2code\Powermail\Utility\StringUtility;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Form
 * @package Bfbn\Bfbnpowermail\Domain\Model
 */
class Form extends \In2code\Powermail\Domain\Model\Form
{

    /**
     * pages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Bfbn\Bfbnpowermail\Domain\Model\Page>
     */
    protected $pages;

    /**
     * @return ObjectStorage|array
     * @throws ExtensionConfigurationExtensionNotConfiguredException
     * @throws ExtensionConfigurationPathDoesNotExistException
     */
    public function getPages()
    {
        // if elementbrowser instead of IRRE (sorting workarround)
        if (ConfigurationUtility::isReplaceIrreWithElementBrowserActive()) {
            $formRepository = GeneralUtility::makeInstance(FormRepository::class);
            $formSorting = GeneralUtility::trimExplode(',', $formRepository->getPagesValue($this->uid), true);
            $formSorting = array_flip($formSorting);
            $pageArray = [];
            foreach ($this->pages as $page) {
                $pageArray[$formSorting[$page->getUid()]] = $page;
            }
            ksort($pageArray);
            return $pageArray;
        }

        return $this->pages;
    }

    /**
     * @param ObjectStorage $pages
     * @return void
     */
    public function setPages(ObjectStorage $pages): void
    {
        $this->pages = $pages;
    }
}
