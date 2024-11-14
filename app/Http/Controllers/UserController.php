<?php

namespace App\Http\Controllers;

use App\Services\UserRepositoryInterface;

class UserController extends Controller
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        return  response()->json($this->userRepository->getAllUsers());

    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        return  response()->json($this->userRepository->findUserById($id));

    }

    // Other CRUD methods...
}
