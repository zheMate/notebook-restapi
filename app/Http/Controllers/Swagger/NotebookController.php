<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path = "/api/notebooks",
 *     summary = "Создание записи",
 *     tags = {"Notebook"},
 *     security = {{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf = {
 *                      @OA\Schema (
 *                          @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович"),
 *                          @OA\Property(property="company", type="string",nullable= "true", example="Фьюче"),
 *                          @OA\Property(property="phone_number", type="string", example="+8 800 555 35 35"),
 *                          @OA\Property(property="email", type="string", example="danvuk@gmail.com"),
 *                          @OA\Property(property="date_of_birth", type="string",nullable= "true", example="29.08.2003"),
 *                          @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/600x400"),
 *                      )
 *              }
 *          )
 *     ),
 *     @OA\Response(
 *         response = 200,
 *         description = "Ok",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",  example="1"),
 *                  @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович"),
 *                  @OA\Property(property="company", type="string",nullable= "true", example="Фьюче"),
 *                  @OA\Property(property="phone_number", type="string", example="+8 800 555 35 35"),
 *                  @OA\Property(property="email", type="string", example="danvuk@gmail.com"),
 *                  @OA\Property(property="date_of_birth", type="string",nullable= "true", example="29.08.2003"),
 *                  @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/600x400"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 *   @OA\Get(
 *     path = "/api/notebooks",
 *     summary = "Список записей",
 *     tags = {"Notebook"},
 *     security = {{ "bearerAuth": {} }},
 *     @OA\Response(
 *         response = 200,
 *         description = "Ok",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer",  example="1"),
 *                  @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович"),
 *                  @OA\Property(property="company", type="string",nullable= "true", example="Фьюче"),
 *                  @OA\Property(property="phone_number", type="string", example="+8 800 555 35 35"),
 *                  @OA\Property(property="email", type="string", example="danvuk@gmail.com"),
 *                  @OA\Property(property="date_of_birth", type="string",nullable= "true", example="29.08.2003"),
 *                  @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/600x400"),
 *              )),
 *         ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path = "/api/notebooks/{notebook}",
 *     summary = "Единичная запись",
 *     tags = {"Notebook"},
 *     security = {{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response = 200,
 *         description = "Ok",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",  example="1"),
 *                  @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович"),
 *                  @OA\Property(property="company", type="string",nullable= "true", example="Фьюче"),
 *                  @OA\Property(property="phone_number", type="string", example="+8 800 555 35 35"),
 *                  @OA\Property(property="email", type="string", example="danvuk@gmail.com"),
 *                  @OA\Property(property="date_of_birth", type="string",nullable= "true", example="29.08.2003"),
 *                  @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/600x400"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path = "/api/notebooks/{notebook}",
 *     summary = "Обновление записи",
 *     tags = {"Notebook"},
 *     security = {{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf = {
 *                      @OA\Schema (
 *                          @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович измен."),
 *                          @OA\Property(property="company", type="string",nullable= "true", example="Фьюче измен."),
 *                          @OA\Property(property="phone_number", type="string", example="+8 500 111 6767"),
 *                          @OA\Property(property="email", type="string", example="danda@mail.com"),
 *                          @OA\Property(property="date_of_birth", type="string",nullable= "true", example="12.06.2009"),
 *                          @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/300x300"),
 *                      )
 *              }
 *          )
 *     ),
 *
 *     @OA\Response(
 *         response = 200,
 *         description = "Ok",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",  example="1"),
 *                  @OA\Property(property="full_name", type="string",  example="Вуколов Данил Александрович измен."),
 *                  @OA\Property(property="company", type="string",nullable= "true", example="Фьюче измен."),
 *                  @OA\Property(property="phone_number", type="string", example="+8 500 111 6767"),
 *                  @OA\Property(property="email", type="string", example="danda@mail.com"),
 *                  @OA\Property(property="date_of_birth", type="string",nullable= "true", example="12.06.2009"),
 *                  @OA\Property(property="photo", type="string",nullable= "true", example="https://placehold.co/300x300"),
 *              ),
 *         ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path = "/api/notebooks/{notebook}",
 *     summary = "Удаление записи",
 *     tags = {"Notebook"},
 *     security = {{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="ID записи",
 *         in="path",
 *         name="notebook",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response = 200,
 *         description = "Ok",
 *         @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="Запись успешно удалена"),
 *         ),
 *     ),
 * ),
 *
 */

class NotebookController extends Controller
{
    //
}
