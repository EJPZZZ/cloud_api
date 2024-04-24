<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use App\Models\Loan;
use Illuminate\Http\Request;
/**
 * @OA\Tag(
 *     name="Usuarios",
 *     description="Endpoints relacionados con usuarios"
 * )
 */

 /**
 * @OA\Info(
 *     title="Documentación de la API",
 *     version="1.0.0",
 *     description="Esta es la documentación de la API de mi proyecto."
 * )
 */

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/",
     *     summary="Mostrar formato JSON",
     *     tags={"Usuarios"},
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa",
     *         @OA\JsonContent(
     *             example={"message": "este es el formato json"}
     *         )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Error interno del servidor"
     *     )
     * )
     */
    public function showJsonFormat()
    {
        return response()->json([
            'message' => 'este es el formato json'
        ]);
    }

    /**
     * @OA\Get(
     *     path="/companies",
     *     summary="Mostrar empresas",
     *     tags={"Usuarios"},
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa",
     *         @OA\JsonContent(
     *             example={"message": "Empresas mostradas"}
     *         )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Error interno del servidor"
     *     )
     * )
     */
    public function showCompanies()
    {
        return Company::with('customers')->with('loans')->select('id', 'name')->get();
    }

     /**
     * @OA\Get(
     *     path="/customer",
     *     summary="Mostrar usuarios de los prestamos",
     *     tags={"Usuarios"},
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa",
     *         @OA\JsonContent(
     *             example={"message": "Customer's mostrados"}
     *         )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Error interno del servidor"
     *     )
     * )
     */
    public function showCustomers()
    {
        return Customer::with('companies')->get();
    }

     /**
     * @OA\Get(
     *     path="/loans",
     *     summary="Mostrar prestamos",
     *     tags={"Usuarios"},
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa",
     *         @OA\JsonContent(
     *             example={"message": "Prestamos mostrados"}
     *         )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Error interno del servidor"
     *     )
     * )
     */
    public function showLoans()
    {
        return Loan::with('company')->with('colombian')->with('customer')->get();
    }
}
