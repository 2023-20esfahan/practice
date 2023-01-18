<?php
/**
 * TypeEnum.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from pakdaman
 * @version 1.0.0
 * @date 2022/12/04 18:00
 */


namespace App\enums;

enum TypeEnum
{
    /**
     * test
     */
    case ENTRYREMITTANCE;
    case EXITREMITTANCE;
    case DEFICITREMITTANCE;
    case ADDITIONALREMITTANCE;
    case SPRINKLERREMITTANCE;

    public function color(): string
    {
        return match($this)
        {
            TypeEnum::ENTRYREMITTANCE => 'حواله ورود اقلام',
            TypeEnum::EXITREMITTANCE => 'حواله خروج اقلام',
            TypeEnum::DEFICITREMITTANCE => 'حواله کسری اقلام',
            TypeEnum::ADDITIONALREMITTANCE => 'حواله اضافه اقلام',
            TypeEnum::SPRINKLERREMITTANCE => 'حواله پاشیدنی اقلام',
        };
    }
}
