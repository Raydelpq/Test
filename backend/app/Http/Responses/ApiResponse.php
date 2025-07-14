<?php

namespace App\Http\Responses;

class ApiResponse
{
    public static function success($data = null, $message = 'Operación exitosa', $code = 200, $extra = [])
    {
       $response = [
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ];
        
        if (!empty($extra)) {
            $response = array_merge($response, $extra);
        }

        return response()->json($response, $code);
    }

    public static function error($message = 'Error', $code = 400, $data = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data'    => $data,
        ], $code);
    }
}