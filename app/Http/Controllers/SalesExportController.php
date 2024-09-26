<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesExportController extends Controller
{
    public function export()
    {
        $sales = Sale::select('employee_id')
            ->selectRaw('sum(amount) as total_amount')
            ->selectRaw('count(*) as total_sales')
            ->whereDate('created_at', Carbon::today())
            ->groupBy('employee_id')
            ->with('employee')
            ->get();

        $pdf = Pdf::loadView('pdf.sales', compact('sales'));

        return $pdf->download('sales_' . today()->format('Y-m-d') . '.pdf');
    }
}
