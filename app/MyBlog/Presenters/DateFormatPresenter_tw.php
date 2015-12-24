<?php

namespace MyBlog\Presenters;

use Carbon\Carbon;

class DateFormatPresenter_tw implements DateFormatPresenterInterface
{
    /**
     * 顯示日期格式
     *
     * @param Carbon $date
     * @return string
     */
    public function showDateFormat(Carbon $date) : string
    {
        return $date->format('Y/m/d');
    }
}