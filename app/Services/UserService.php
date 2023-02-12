<?php
/**
 * UserService.php
 * @author Abbass Mortazavi <abbassmortazavi@gmail.com | Abbass Mortazavi>
 * @copyright Copyright &copy; from practice
 * @version 1.0.0
 * @date 2022/12/04 18:56
 */


namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    public function __construct(private readonly User $userQuery)
    {
    }

    /**
     * @return Collection|array
     */
    public function getUsers(): Collection|array
    {
        return $this->userQuery->query()->get();
    }

}
