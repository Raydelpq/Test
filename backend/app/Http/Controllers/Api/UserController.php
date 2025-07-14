<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Responses\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Domain\User\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        $size = $request->query('size', 20);
        $users = $this->userService->getAllUsers($size);
        return ApiResponse::success(
            UserResource::collection($users),
            'Operación exitosa',
            200,
            [
                'pagination' => [
                    'current_page' => $users->currentPage(),
                    'last_page'    => $users->lastPage(),
                    'total'        => $users->total(),
                ]
            ]
        );
    }

    public function byRole(Request $request)
    {
        $role = $request->query('role');
        if (!$role) {
            return ApiResponse::error('El parámetro "role" es requerido', 422);
        }

        $size = $request->query('size', 20);
        $users = $this->userService->getUsersByRole($role, $size);
        return ApiResponse::success(
            UserResource::collection($users),
            'Operación exitosa',
            200,
            [
                'pagination' => [
                    'current_page' => $users->currentPage(),
                    'last_page'    => $users->lastPage(),
                    'total'        => $users->total(),
                ]
            ]
        );
    }

    public function stats()
    {
        $stats = $this->userService->getUserStatsByRole();
        return ApiResponse::success($stats);
    }
}
