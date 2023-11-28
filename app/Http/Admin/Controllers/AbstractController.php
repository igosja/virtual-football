<?php
declare(strict_types=1);

namespace App\Http\Admin\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

/**
 * Class AbstractController
 * @package App\Http\Admin\Controllers
 */
abstract class AbstractController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
}
