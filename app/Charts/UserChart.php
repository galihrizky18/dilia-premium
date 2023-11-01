<?php

namespace App\Charts;

use App\Models\Pelanggan;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UserChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {

        $dataUser = Pelanggan::all();
        $data = [
            $dataUser->where('user.status', 'premium')->count(),
            $dataUser->where('user.status', 'non-premium')->count()
        ];
        $label = [
            'Premium User',
            'Non - Premium User',
        ];

        return $this->chart->pieChart()
            ->setTitle('Users Status')
            ->setSubtitle(date('M'))
            ->addData($data)
            ->setLabels($label);
    }
}
