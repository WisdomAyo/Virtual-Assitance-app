<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use App\Traits\ResponseCodeTrait;
use App\Utilities\GeneralConstants;
use Illuminate\Support\Facades\Response;

class AppBaseController extends Controller
{
    use ResponseCodeTrait;



    public function sendSuccess($message): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message
        ], 200);
    }


    public function successResponse($data, $resp_message, $resp_code = "00", $resp_description = null): JsonResponse
    {
        return response()->json([
            "resp_code" => $resp_code,
            "resp_message" => $resp_message,
            "resp_description" => $resp_description,
            "data" => $data,
            "errors" => null
        ], self::$STATUS_CODE_DONE);
    }

    public function errorResponse($error, $resp_message, $resp_code = "01", $resp_description = ""): JsonResponse
    {
        if ($resp_description == "") {
            $resp_description = $resp_message;
        }
        return response()->json([
            "resp_code" => $resp_code,
            "resp_message" => $resp_message,
            "resp_description" => $resp_description,
            "data" => null,
            "errors" => $error
        ], self::$STATUS_CODE_NOT_VALID);
    }

    public function customError($error, $resp_message, $resp_code, $resp_description = null): array
    {
        return [
            "resp_code" => $resp_code,
            "resp_message" => $resp_message,
            "resp_description" => $resp_description,
            "data" => null,
            "errors" => $error
        ];
    }

    public static function formatGuzzleError(\GuzzleHttp\Exception\RequestException $error)
    {
        $d = json_decode($error->getResponse()->getBody()->getContents(), true);
        return $d;

    }

    function formatValidationError($errors): array
    {
        return Arr::flatten(json_decode($errors, true));

    }
    public function getValidationError($errors)
    {
        $array = Arr::first(Arr::flatten(json_decode($errors, true)));
        return $array;
    }



    public function microServiceErrorFormat($result)
    {

        //dd($result);
        if (isset($result["resp_message"])) {
            $message = $result["resp_message"];
        } elseif (isset($result["message"])) {
            $message = $result["message"];
        } else {
            $message = "Unknown error";
        }

        return response()->json([
            "resp_code" => self::$STATUS_CODE_ERROR,
            "resp_message" => GeneralConstants::ERROR_RESP_MESSAGE,
            "resp_description" => $result["resp_description"] ?? $message ?? "",
            "data" => null,
            "errors" => $result["errors"] ?? "Error occurred"
        ], self::$STATUS_CODE_NOT_VALID);

    }

    public static function generalError(array $transactionModule = null, $description = null)
    {
        if (!empty($transactionModule)) {
            $error = [
                "status" => $transactionModule["data"]["status"],
                "payment_status" => $transactionModule["data"]["payment_status"]
            ];
            $description = $transactionModule["data"]["status_message"];
            $error = $transactionModule;
            return $transactionModule;
        } else {
            $error = "Pending";
            $description = $description ?? "An error occurred";
        }


        return (new self())->errorResponse(
            $error,
            GeneralConstants::ERROR_RESP_MESSAGE,
            GeneralConstants::ERROR_CODE,
            $description
        );


    }







    public static function getError(array $response)
    {
        if (!empty($response) and is_array($response)) {
            if (!empty($response["errors"]) and count($response["errors"]) > 0) {
                if (isset($response["errors"][0])) {
                    $result = isset($response["errors"]) ? Arr::flatten($response["errors"])[0] : "Invalid request";
                }elseif(isset($response["errors"]["message"])) {
                    $result = $response["errors"]["message"];
                }else{
                    $result = isset($response["errors"]) ? Arr::flatten($response["errors"])[0] : "Invalid request";
                }
            } else {
                $result = isset($response["errors"]) ? $response["errors"] : "Invalid request";
            }
            if (empty($result) and !empty($response["message"])) {
                $result = $response["message"];
            }

            return $result;
        } else {
            return "Invalid request";
        }
    }




    public static function buildUrlQuery($url, array $data): string
    {
        $queryString = http_build_query($data);
        return $url . "?" . $queryString;
    }

    public function ref()
    {
        $mt = explode(' ', microtime());
        $rand = time() . rand(10, 99);
        $time = ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
        $transactionRef = $rand . $time;
        return $transactionRef;
    }

}
