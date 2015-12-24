<?php

namespace MyBlog\Presenters;

use Illuminate\Support\Facades\App;

class DateFormatPresenterFactory
{
    /**
     * @param string $locale
     */
    public function create(string $locale)
    {
        App::bind(DateFormatPresenterInterface::class,
            'MyBlog\Presenters\DateFormatPresenter_' . $locale);

        return App::make(DateFormatPresenterInterface::class);
    }
}