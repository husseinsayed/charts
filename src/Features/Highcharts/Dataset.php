<?php

namespace HusseinSayed\Charts\Features\Highcharts;

use Illuminate\Support\Collection;

trait Dataset
{
    /**
     * Set the dataset color.
     *
     * @param string|array $color
     *
     * @return self
     */
    public function color($color)
    {
        if ($color instanceof Collection) {
            $color = $color->toArray();
        }

        return $this->options([
            'color' => $color,
        ]);
    }
}
