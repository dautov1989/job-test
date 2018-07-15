<?php

namespace App\Exceptions;

use Exception;

class PaymentMethodNotAllowed extends Exception
{
    public function render($request)
    {
        return response("Method " . $request->paymentType . " not allowed!");
    }
}
