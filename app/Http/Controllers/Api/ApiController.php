<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
     /**
     * The response object to return success response.
     *
     * @param object $result The result object to returned;
     * @param string $message The response message.
     * @param bool   $isSuccess Whether the response success or not.
     *
     * @return \Illuminate\Http\JsonResponse The response object
     */
    public function sendResponse(
        object $result,
        string $message,
        bool   $isSuccess = true
    ): \Illuminate\Http\JsonResponse {
        $response = [
            'data'    => $result,
            'success' => $isSuccess,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

     /**
     * The response object to return success response.
     *
     * @param string $error The error message.
     * @param array  $errorMessages If given multiple error messages, return them.
     * @param object $data The data to return.
     * @param bool   $isSuccess If there is a success response, return it.
     * @param int    $errorCode The error code.
     *
     * @return \Illuminate\Http\JsonResponse The response object
     */
    public function sendError(
        string $error = 'İşlem sırasında bir hata oluştu',
        array  $errorMessages = [],
        object $data = null,
        bool   $isSuccess = false,
        int    $errorCode = 404
    ): \Illuminate\Http\JsonResponse {
        $response = [
            'data'    => $data,
            'success' => $isSuccess,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['message'] = $errorMessages;
        }

        return response()->json($response, $errorCode);
    }

    /**
     * Create user for specified userId.
     *
     * @param array $model The model to create.
     *
     * @return ?object
     */
    public function createUserTo(array $data, string $RoleName, array $additional = []): ?object
    {
        $data['user_id'] = $data['id'];

        if ($additional !== []) {
            foreach ($additional as $key => $value) {
                $data[$key] = $value;
            }
        }
        
        $role = Role::where('name', $RoleName)->first();

        if (!$RoleName) {
            throw new Exception('Role bulunamadi.');
        }

        $data['role_id'] = $role->id;

        $user = User::create($data);

        return $user;
    }

    /**
     * Filter the given data by user model's fillables.
     */
    public function filterByUser(array $data): array
    {
        $result = [];
        $user = new User();

        foreach ($user->getFillable() as $fillable) {
            foreach ($data as $key => $value) {
                if ($fillable == $key) {
                    $result[$fillable] = $value;
                }
            }
        }

        return $result;
    }
    
     /**
     * Remove user by given model.
     *
     * @param object $model The model to remove it's user.
     *
     * @return ?object
     */
    public function removeUserTo(object $model): ?object
    {
        $user = User::where('user_id', $model->id);

        if (!$user) {
            throw new Exception('Kullanıcı bulunamadı.');
        }

        $user->delete();

        return $user;
    }
}
