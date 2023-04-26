<?php
namespace Bfbn\Bfbnpowermail\Domain\Model;

/**
 * Class Field
 * @package Bfbn\Bfbnpowermail\Domain\Model
 */

class Field extends \In2code\Powermail\Domain\Model\Field
{

    /**
     * New property bfbnreadonly
     *
     * @var bool $bfbnreadonly
     */
    protected $bfbnreadonly=false;
	
    /**
     * New property bfbncol
     *
     * @var int $bfbncol
     */
    protected $bfbncol = 0;
	
    /**
     * New property bfbnrow
     *
     * @var int $bfbnrow
     */
    protected $bfbnrow = 0;
		
    /**
     * @return bool
     */
    public function isBfbnreadonly(): bool
    {
        return $this->bfbnreadonly;
    }

    /**
     * @param bool $bfbnreadonly
     * @return void
     */
    public function setBfbnreadonly(bool $bfbnreadonly): void
    {
        $this->bfbnreadonly = $bfbnreadonly;
    }
	
    /**
     * @return int
     */
    public function getBfbncol(): int
    {
        return $this->bfbncol;
    }

    /**
     * @param int $bfbncol
     * @return void
     */
    public function setBfbncol(int $bfbncol): void
    {
        $this->bfbncol = $bfbncol;
    }
	
    /**
     * @return int
     */
    public function getBfbnrow(): int
    {
        return $this->bfbnrow;
    }

    /**
     * @param int $bfbnrow
     * @return void
     */
    public function setBfbnrow(int $bfbnrow): void
    {
        $this->bfbnrow = $bfbnrow;
    }
	
}