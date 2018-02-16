<?php

namespace Model\Http\Controllers\Auth;

use Carbon\Carbon;
use JWTAuth;
use Illuminate\Http\Request;
use Model\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthenticateController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        try {
            $token = JWTAuth::attempt($credentials, [
                'exp' => Carbon::now()->addWeek()->timestamp
            ]);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }
        if (!$token) {
            return response()->json([
                'error' => 'Could not authenticate',
            ], 401);
        }
        return response()->json(compact('token'));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token expired'], $e->getStatusCode());
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Invalid token'], $e->getStatusCode());
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token absent'], $e->getStatusCode());
        }
        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }
}
