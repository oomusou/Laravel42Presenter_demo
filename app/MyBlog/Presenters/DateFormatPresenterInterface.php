<?php
namespace MyBlog\Presenters;

use Carbon\Carbon;

interface DateFormatPresenterInterface
{
    /**
     * 顯示日期格式
     *
     * @param Carbon $date
     * @return string
     */
    public function showDateFormat(Carbon $date) : string;
}